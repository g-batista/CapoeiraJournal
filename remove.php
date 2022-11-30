
<?php
require_once "authorize.php";
$title = 'Remove';
require_once  "header.php";
require_once  "system.php";

  if (isset($_GET['id'])) {
    // Grab the information data from the GET
    $id = $_GET['id'];
  
  }
 
  else {
    echo '<div class="alert alert-danger container h3">Sorry, no value was specified for removal.</div>';
  }

  if (isset($_POST['submit'])) {
    if ($_POST['confirm'] == 'Yes') {

      // Delete the score data from the database
      $query = "DELETE FROM comments WHERE id = $id LIMIT 1";
      mysqli_query($dbc, $query);
      mysqli_close($dbc);

      // Confirm success with the user
      echo '<div class=" alert alert-success container h3">The comment was successfully removed.</div>';
    }
    else {
      echo '<div class="alert alert-danger h3 container">The message was not removed.</div>';
    }
  }
  else{
    echo '<div class="alert alert-danger h3 container">
              Are you sure you want to delete this comment?
          </div>
          <div class="container bg-info">
            <form method="post" action="" class="form-group">
              <input type="radio" name="confirm" value="Yes" /> Yes
              <input type="radio" name="confirm" value="No" checked="checked" /> No 
              <br />
              <input type="submit" value="Submit" name="submit" />
              <button type="button" value="Submit" class="btn btn-warning">Submit</button>
            </form>
          </div>';
  }

  echo '<div class="alert alert-warining h3 container">
          <a href="admin.php">Back to admin page</a>
        </div>';
  
    require_once "footer.php";
?>
