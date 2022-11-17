
<?php
require_once "authorize.php";
$title = 'Delete User';
require_once  "header.php";
require_once  "system.php";
 
if (!isset($_SESSION['user_id'])) {
    echo '
      <div class="alert alert-danger container text-center mt-3 h4" role="alert">
        Please <a  class="alert-link" href="login.php">login</a> to access this page!
      </div>
    ';
    require_once "footer.php";
    exit();
}

  if (isset($_POST['submit'])) {
    if ($_POST['confirm'] == 'Yes') {
        $user_id=$_SESSION['user_id'];   

        // Delete the score data from the database
        $query = "DELETE FROM journal_user WHERE id = $user_id LIMIT 1";
        mysqli_query($dbc, $query);

        $query = "DELETE FROM comments WHERE user_id = $user_id";
        mysqli_query($dbc, $query);

        mysqli_close($dbc);

        unset($_SESSION['user_id']);

        // Confirm success delete user
        echo '
            <div class="alert alert-success container text-center mt-3 h4" role="alert">
                Your account was successfully removed!
            </div>
            <div class="card-body container alert alert-warning container text-center mt-3 h4">
              <h5 class="card-title">Go here to create new account!</h5>
              <a href="register.php" class="btn btn-outline-dark btn-warning"">New Account</a>
            </div>
        ';
        $_SESSION = array();
    }
    else {
      // not removed account message
      echo '
          <div 
              class="alert alert-danger container text-center mt-3 h4" role="alert">
              Account was <strong>NOT</strong> removed!
          </div>
          <div 
              class="card-body container alert alert-info container text-center mt-3 h4">
            <h5 class="card-title">Check the new Capoeira Journals</h5>
            <a href="index.php" class="btn btn-outline-dark btn-warning"">Home</a>
          </div>
          ';
    }
  }

  else{
    echo '
        <div class="alert alert-danger mt-4 container text-center h4">
            Are you sure you want to delete your account?
            <form method="post" action="" class="h3">
                <input type="radio" name="confirm" value="Yes" /> Yes
                <input type="radio" name="confirm" value="No" checked="checked" /> No
                <br />
                <br />
                <button type="submit" value="Submit" name="submit" class="btn btn-warning ">
                    Submit
                </button>
            </form>
        </div>
        ';
  }
  
require_once "footer.php";
?>
