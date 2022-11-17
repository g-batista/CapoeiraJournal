<?php

require_once "system.php";
$title = 'Add Post';
require_once "header.php";

      


    //if not loged see this message
    if (!isset($_SESSION['user_id'])) {
      echo '</br>
            <div 
                class="alert alert-danger container text-center mt-3 h4" role="alert"
                >
                <strong >Please</strong>
                <a href="login.php" style="color:red">log in</a> to add your post!
                <br /> 
                <strong>Or</strong><a href="register.php" style="color:red"> register</a> if you are not a member.
            </div>
           ';
          require_once "footer.php";
  exit();
}
  
    //check if the post is submint
    if (isset($_POST['submit'])) {

      echo'
          <div id="card" style="margin-top:9px" class="container">
              <h3 style="text-align:center; color:">Add your post</h3></br>
              <p id="home" style="text-align:center">To add your post you need to log in or register. 
              You are welcome to make as many post as you want, one at the time. After entering your posts, our team members will have to approve. Please enjoy!</p></br>
          </div>';
          
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

          // Confirm success with the user
          echo '
                <div 
                    class="alert alert-success container text-center mt-3 h4" role="alert">
                    Thanks for adding your new post!
                    <br /> 
                    We will review and add to the home page immediately
                </div>
                <div 
                      class="alert alert-warning container  mt-3 h4 alert-dismissible" role="alert">
                    <strong>Post Title:</strong> ' . $title . '
                    <br /><strong>Argument:</strong> ' . $msg . '
                </div>';
       }
  }
?>

<!-- fomato nao esta bom -->
<div id="form" class="mx-auto" style="width: 50%">
    <form method= "post" 
          action="<?php echo $_SERVER['PHP_SELF']; ?>"
          enctype="multipart/form-data"
    >
    
      <div class="form-group">
        <label for="title">Post Title:</label><br/>
        <input name= "title" type="text" class="form-control" id="title" required/>
      </div>
      <div class="form-group">
        <label for="msg">Argument</label>
        <textarea name= "msg" class="form-control" id="msg" rows="3" required ></textarea>
      </div>
      <div class="form-group">
        <label for="name">Upload Picture</label>
        <input name= "picture" type="file" class="form-control" id="name" required/>
      </div>
      <div class="text-center">
        <button type="submit" name= "submit" class="btn btn-primary">Submit</button>
      </div>
      <br/><br/>
    </form>

</div>


<?php
require_once "footer.php";
?>