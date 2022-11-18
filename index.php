<?php
    require_once "system.php";
    
    if(isset($_GET['mycomments'])){
        
        $title = "My Comments";
        // hide element
        echo '
        <style>
                div.hideMypost {
                    display: none;
        </style>';
    }
    else{
        $title = "Capoeira";
    }
    if(isset($_POST['search'])){
        
        $search = $_POST['search'];
        $where_search="and title like '%{$search}%' or username like '%{$search}%'"; 
        //hide element
        echo '<style>
        div.hideMypost {
            display: none;        }
        </style>';         
    }
 
    else{
        $search=false;
        $where_search=false;
    }

    require_once "header.php";
        
 ?>
<!-- go to top button -->
<a    
    href="#top" 
    class="float">
    &#8593;
</a>

<body class="container">

    <div class="mt-4 hideMypost"
         style="background-color:black"> 
        <p  id="home">
               Welcome to Capoeira Journal! Here everyone can give a contribution to the capoeira world.
               From a newb to a Capoeira master, you can make difference! 
        </p>
    </div>
 
 <?php 

    if(!empty($_SESSION['user_id'])) {
        //if the user is login
        $user_id = $_SESSION['user_id'];

    }

    else {

        $user_id = 0;
    }

    //if "mycomments" inside browser address
    // index.php?mycomments

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
    }   
   
     else {
         //geting approved posts without user ID
         $posts = mysqli_query($dbc,"SELECT comments.*, journal_user.username
                                     FROM comments
                                     INNER JOIN journal_user 
                                     ON comments.user_id = journal_user.id
                                     WHERE approved =1 $where_search
                                     ORDER BY date DESC");    

    }
    //show message if nothig found.
    if(mysqli_num_rows($posts)==0) {
        echo' 
            <div class="card-body alert alert-danger container mt-3 text-center col-md-6">
                <h5 class="card-title">Search not found!</h5>
                <a href="add.php" class="btn btn-outline-dark btn-warning"">Add Post</a>
                <a href="search.php" class="btn btn-outline-dark btn-warning"">Search Again</a>
            </div>
        ';
    }
   
    //loop on the query and echo comment
     while ($post = mysqli_fetch_assoc($posts)) {

            echo '<div  id="card" 
                        class="card mt-3"
                        style="border-color: yellow;
                        border-style:solid;
                        border-width: 3px;"
                    >';

                echo'<div class="card-body">';
            
                    echo '<h4 style="text-align:center">
                           <strong>'.$post['title'].'</strong>
                          </h4>';

                    echo '<p>
                            <small class="text-muted">Posted: '.$post['date'].'</small><br/>
                            <small class="text-muted">Autor: '.$post['username'].'</small>
                          </p></br>';

                    echo '<div id="back">
                            <img  class="rounded mx-auto d-block"
                                  width = "40%" height="" class="img-fluid"  
                                  src="pictures/'.$post['picture'].'">
                          </div>
                          <br/>';

            //Edit & comment
            if($user_id == $post['user_id']){
                    echo '<a class="nav-link" id="index-tab" href="editcomment.php?id='.$post['id'].'" aria-selected="false">Edit Post</a>';
                    echo '<a class="nav-link" id="index-tab" href="deleteComment.php?id='.$post['id'].'" aria-selected="false">Delete</a>';
            }

                echo '<div
                        style="border-color: #fff3b2;
                        border-style:solid;
                        border-width: 2px;
                        padding: 30px;"
                    >
                        <p class="text-left">&emsp; '.$post['msg'].'<p>
                    </div>';
                echo '</div></br>';
                echo'</div>';
        echo '<div></br> 
        </body>';
    } 

   mysqli_close($dbc);
    require_once "footer.php";
?>