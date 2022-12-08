
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
    echo '
    <div class="container border border-dark border-2">
      <div class="alert alert-danger container h3">
          Sorry, no value was specified for removal.
      </div>
    </div>';
  }

  if (isset($_POST['submit'])) {
    if ($_POST['confirm'] == 'Yes') {

      // Delete the score data from the database
      $query = "DELETE FROM comments WHERE id = $id LIMIT 1";
      mysqli_query($dbc, $query);
      mysqli_close($dbc);

      // Confirm success with the user
      echo '
      <div class="container mt-2">
        <div class=" alert alert-success h3 text-center  border border-dark border-2">
          The post was successfully removed.
        </div>
      </div>';
    }
    else {
      echo '
      <div class="container mt-3 text-center ">
        <div class="alert alert-danger h3 container border border-dark border-2">
          The post was not removed.
        </div>
      </div>';
    }
  }
  else{
    echo '
    <div class="container">
        <div class="alert alert-danger h3 mt-3 text-center border border-dark border-2">
              Are you sure you want to delete this post?
        </div>
          <div class="alert alert-info text-center col-md-6 container pt-3 border border-dark border-2">
            <form method="post" action="" class="form-group pb-3 h4">
              <input type="radio" name="confirm" value="Yes" /> Yes
              <input  type="radio" name="confirm" value="No" checked="checked" /> No 
              <br />
              <button  type="submit" value="Submit" name="submit" class="btn btn-warning mt-3">
                Submit
              </button>
            </form>
          </div>
    </div>  
    ';
  }

  echo '
    <div class="container">
      <div class="container alert alert-warning text-center col-md-4 h3 border border-dark border-2">
        <a class="alert-link text-dark" href="admin.php"> &#10132;Back to admin page</a>
      </div>
    </div>
  ';
  ?>
