<?php
    require_once "system.php";
    
    if(isset($_GET['mycomments'])){
        
        $title = "My Comments";
        // hide element
        echo '
        <style>
                .hideMypost, .myCommentsHide {
                    display: none
                }
        </style>';

    }
    else{
        $title = "Capoeira Journal";

    }
    if(isset($_POST['search'])){
        
        $search = $_POST['search'];
        $where_search="and title like '%{$search}%' or username like '%{$search}%'"; 

        //hide element
        echo '
            <style>
                div.hideMypost {
                    display: none
                }
            </style>
            ';         
    }
 
    else{
        $search=false;
        $where_search=false;
    }

    require_once "header.php";
        
 ?>

<!-- go to top button & display only on md-lg -->
<div class="container my-2 hideMypost">
<a    
        href="#top" 
        class="float d-none d-md-block ">
        &#8593;
    </a>

    <div
        class="p-3 border border-warning" 
        style="background-color:black"> 
        <p  id="home">
            Welcome to Capoeira Journal! Here everyone can give a contribution to the capoeira world.
            From a noob to a Capoeira master, you can make difference! 
        </p>
    </div>
</div>
 <?php 

    if(!empty($_SESSION['user_id'])) {
        //if the user is login
        $user_id = $_SESSION['user_id'];

    }

    else {

        $user_id = 0;
    }

    //get paramether 
    if(isset($_GET['mycomments'])) {

        
    
        //geting approved posts with user ID
        $posts = mysqli_query($dbc,"SELECT comments.*, journal_user.username
                                    FROM comments
                                    INNER JOIN journal_user 
                                    ON comments.user_id = journal_user.id
                                    WHERE approved =1 $where_search
                                    AND user_id =$user_id 
                                    ORDER BY date DESC");

        if(mysqli_num_rows($posts)==0) {
            echo' 
                <div class="container text-center col-md-6">                  
                    <div class="card-body alert alert-danger mt-3 text-center border border-dark border-2">
                        <h5 class="card-title">
                            You don\'t have any posts yet!<br />
                            Or the post may be waiting for approval!</h5> 
                        <a href="add.php" class="btn btn-outline-dark btn-warning">Add Post</a>
                    </div>
                </div>
                <style>
                    .alertNotApproved {
                    display: none}
            </style>
    
            ';
        }
       echo' 
       <div class="container col-md-9 mt-2 text-center h5 alertNotApproved">
            <div class="alert alert-danger alert-dismissible fade show border border-dark border-3" role="alert">
                <strong class="h3">
                    If you don\'t see a post that passed 48 hours,
                    after being added! 
                </strong>
                <br />
                Maybe it is because it was not approved
                <br/>
                Or the post is still waiting for approval!
                <br/>
                <a href="aboutus.php" class="btn btn-outline-dark btn-warning mt-3">Contact Us</a>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    
        ';
    }   
   
    else {
         //geting approved posts without user ID
         $posts = mysqli_query($dbc,"SELECT comments.*, journal_user.username
                                     FROM comments
                                     INNER JOIN journal_user 
                                     ON comments.user_id = journal_user.id
                                     WHERE approved =1 $where_search 
                                     and approved =1
                                     ORDER BY date DESC");    
    }
    //show message if nothig found.
    if(mysqli_num_rows($posts)==0) {
        echo' 
            <div class="container mx-auto myCommentsHide col-md-5">
                
                <div class="card-body alert alert-danger mt-3 text-center border border-dark border-2">
                    <h5 class="card-title">Search not found!</h5>
                    <a href="search.php" class="btn btn-outline-dark btn-warning"">Search Again</a>
                </div>
            </div>

        ';
    }
    //loop on the query and echo comment
     while ($post = mysqli_fetch_assoc($posts)) {
            echo '
                <div class="container">
                    <div  
                        id="card" 
                        class="card my-3"
                        style="border-color: yellow;
                        border-style:solid;
                        border-width: 1px;">

                        <div class="card-body">

                            <h4 style="text-align:center">
                                <strong  class="border-bottom border-warning">'.$post['title'].'</strong>
                            </h4>

                            <p>
                                <small class="text-muted">Posted: '.$post['date'].'</small><br/>
                                <small class="text-muted">Author: '.$post['username'].'</small>
                            </p>';

                            if(!empty ($post['picture'])){
                                echo '
                                    <div id="back row">
                                        <img  
                                        class="rounded mx-auto d-block mb-3 img-fluid col-md-6 col-sm border border-warning p-0"
                                        src="pictures/'.$post['picture'].'">
                                    </div>
                                ';}

            //Edit & comment
            if($user_id == $post['user_id']){
                echo '
                    <div>
                        <a  
                            class="nav-link text-success" 
                            id="index-tab" 
                            href="editcomment.php?id='.$post['id'].'" 
                            aria-selected="false">
                            Edit Post
                        </a>
                        <a 
                            class="nav-link text-danger" 
                            id="index-tab" 
                            href="deleteComment.php?id='.$post['id'].'" 
                            aria-selected="false">
                            Delete
                        </a>
                    </div>
                    ';
            }
                            echo '
                                <div
                                    style="border-color: #fff3b2;
                                    border-style:solid;
                                    border-width: 1px;
                                    class="">
                                    <p class="text-left p-2">&emsp; '.$post['msg'].' test<p>
                                </div>
                        </div>
                    </div>
                </div>                    
            ';      
        
    } 

   mysqli_close($dbc);
    require_once "footer.php";
?>