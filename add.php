<?php

require_once "system.php";
$title = 'Add Post';
require_once "header.php";

    //if not loged see this message
    if (!isset($_SESSION['user_id'])) {
      
      //alert to login
      echo '
      <div class="container">
          <div class="alert alert-danger text-center mt-3 h4 border border-dark border-2" role="alert">
              <strong >Please</strong>
              <a href="login.php" style="color:red">log in</a> to add your post!
              <br /> 
              <strong>Or</strong><a href="register.php" style="color:red"> register</a> if you are not a member.
          </div>
      </div>      
           ';
          require_once "footer.php";
  exit();
}
  
    //check if the post is submint
    if (isset($_POST['submit'])) {
                
      move_uploaded_file($_FILES['picture']['tmp_name'], "pictures/".$_FILES['picture']['name']);

    $user_id = $_SESSION['user_id'];

      // Grab the score data from the POST
      $title = mysqli_real_escape_string($dbc, trim($_POST['title']));
      $msg = mysqli_real_escape_string($dbc,trim($_POST['msg']));
     
      if (!empty($title) && !empty($msg)) {
          $picture= $_FILES['picture']['name'];
          // Write the data to the database
          mysqli_query($dbc,"INSERT INTO comments
            (name, title, msg, picture_id, user_id, picture)
                VALUES ('','$title', '$msg', 0, '$user_id','$picture')")
              or die ('Error getting on the data base');

          // Confirm success
          echo '
             <div class="container col-md-7">
                <div 
                    class="alert alert-success text-center mt-3 h4 container border border-dark border-2" role="alert">
                    Thank you for adding your new post!
                    <br /> 
                    We will review it and add it to the home page immediately!
                </div>
                <div 
                    class="alert alert-warning mt-2  border border-dark border-2" role="alert">
                    <div>
                      <strong class="h5 mb-4">Post Title: <i class="text-danger"> ' . $title . '</i></strong>
                      <br />
                      <strong class="h5">Text:</strong> ' . $msg . '                  
                    </div> 
                </div>
                <div class="mt-2 alert alert-info text-center col-md-6 container border border-info h5 border border-dark border-2">
                  Add a new <a class="btn btn-warning"  href="add.php" role="button">Post</a>
                  <br />
                  <strong>Or</strong><br />
                  Navigate to the <a class="btn btn-warning" href="index.php" role="button"">Home</a> page.
                </div>
              </div>
              ';
            
            echo'
                <style>
                .hideContent {
                display: none;
                </style>
            ';
       }

  } else {
      echo'
      <div class="container hideContent">
        <div id="card" style="margin-top:9px" class="border border-warning border-2">
            <h3 style="text-align:center; color:">Add your post</h3></br>
            <p id="home" style="text-align:center">To add your post you need to log in or register. 
            You are welcome to make as many post as you want, one at the time. After entering your posts, our team members will have to approve. Please enjoy!</p></br>
        </div>
      </div>';
    }
?>

<!-- fomato nao esta bom -->
<div class="container col-md-8 hideContent">
  <div class="container bg-warning my-2 p-3 border border-dark border-2">
    <form method= "post" 
          action="<?php echo $_SERVER['PHP_SELF']; ?>"
          enctype="multipart/form-data">
    
      <div class="form-group">
        <label for="title">Post Title:</label><br/>
        <input name= "title" 
               type="text" 
               class="form-control border border-dark" 
               id="title" 
               required 
               autofocus
               pattern="[a-zA-Z0-9\s\+\.]$"/>
      </div>
      <div class="form-group my-3">
        <label for="msg">Text:</label>
        <textarea name= "msg" 
                  class="form-control border border-dark" 
                  id="msg" 
                  rows="3" 
                  required
                  pattern="[a-zA-Z0-9\s\+\.]"></textarea>
      </div>
      <div class="form-group my-3">
        <label for="name">Upload Picture: png, jpeg, jpg </label>
        <input name= "picture" 
               type="file" 
               class="form-control border border-dark" 
               id="name" 
               required"/>
      </div>
      <div class="text-center my-3">
        <button type="submit" name= "submit" class="btn btn-success">Submit</button>
      </div>
    </form>
  </div>
</div>


<?php
require_once "footer.php";
?>