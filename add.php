<?php

require_once "system.php";
$title = 'Add Post';
require_once "header.php";

    //if not loged see this message
    if (!isset($_SESSION['user_id'])) {
      
      //alert to login
      echo '
      <div class="container">
          <div class="alert alert-danger text-center mt-3 h4" role="alert">
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

          // Confirm success with the user
          echo '
            <div class="container">
              <div 
                  class="alert alert-success text-center mt-3 h4" role="alert">
                  Thanks for adding your new post!
                  <br /> 
                  We will review and add to the home page immediately!
                <div class="mt-2">
                    Add a new <a href="add.php" style="color:red">Post</a>
                    <strong>Or </strong>Navegate to the <a href="index.php" style="color:red">Home</a> page.
                </div>
              
              </div>
              <div 
                  class="alert alert-warning  mt-3 h4 alert-dismissible" role="alert">
                    
                  <strong>Post Title:</strong> ' . $title . '
                  <br /><strong>Argument:</strong> ' . $msg . '
              </div>
            </div>
            <style>
                form.hideForm {
                display: none;
            </style>
            ';
       }
  }
  else {
    echo'
        <div class="container">
          <div id="card" class="my-3 p-3">

              <h3 class="text-center">Add your post</h3>

              <div class="text-white text-center">
                To add your post you need to a title, a argument and picture.<br/> 
                You are welcome to make as many post as you want, one at the time!<br/> 
                If needed, remember to cite the fount sorce in your argument, please.<br/> 
                After entering your posts, our team members will have to approve. 
                Please enjoy!
              </div>
          </div>
        </div>';
  }
?>
<div class="container col-md-7 text-center">
  <form 
        method= "post" 
        class="py-4 mb-3 bg-warning hideForm form-group "
        action="<?php echo $_SERVER['PHP_SELF']; ?>">

        <label for="title" class="form-label col">
          Post Title:
        </label>
        <div class=" justify-content-center row col-sm">
          <input name="title" type="text" class="form-control col-md-4 " id="title" required autofocus />
        </div>
    
    <div class="form-group text-center ">
        <label for="msg">Argument:</label>
        <div class=" justify-content-center row">
          <textarea name= "msg" class="form-control col-md-9" id="msg" rows="3" required placeholder="Enter text here!"></textarea>
        </div>

    </div>

    <div class="form-group text-center">
        <label for="picture">Upload Picture:</label>
        <div class=" justify-content-center row">
          <input name= "picture" type="file" class="form-control col-md-5" id="name" required/>
      </div>
    </div>

    <div class="text-center">
      <button type="submit" name= "submit" class="btn btn-dark btn btn-outline-success mb-3">
        Submit
      </button>
    </div>
  </form>
</div>

<?php
require_once "footer.php";
?>