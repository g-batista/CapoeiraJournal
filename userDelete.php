
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

        // Confirm success with the user
        echo '<p>Your account was successfully removed!</p>';
    }
    else {
      echo '<p class="error">Account was not removed.</p>';
    }
  }
  else{
    echo '<p>Are you sure you want to delete your account?</p>';
    echo '<form method="post" action="">';
    echo '<input type="radio" name="confirm" value="Yes" /> Yes ';
    echo '<input type="radio" name="confirm" value="No" checked="checked" /> No <br />';
    echo '<input type="submit" value="Submit" name="submit" />';
    echo '</form>';
  }

  echo '<p><a href="index.php">&lt;&lt; home</a></p>';
  
    require_once "footer.php";

?>
