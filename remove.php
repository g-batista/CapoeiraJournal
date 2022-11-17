
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
    echo '<p class="error">Sorry, no value was specified for removal.</p>';
  }

  if (isset($_POST['submit'])) {
    if ($_POST['confirm'] == 'Yes') {

      // Delete the score data from the database
      $query = "DELETE FROM comments WHERE id = $id LIMIT 1";
      mysqli_query($dbc, $query);
      mysqli_close($dbc);

      // Confirm success with the user
      echo '<p>The comment was successfully removed.</p>';
    }
    else {
      echo '<p class="error">The message was not removed.</p>';
    }
  }
  else{
    echo '<p>Are you sure you want to delete this comment?</p>';
    echo '<form method="post" action="">';
    echo '<input type="radio" name="confirm" value="Yes" /> Yes ';
    echo '<input type="radio" name="confirm" value="No" checked="checked" /> No <br />';
    echo '<input type="submit" value="Submit" name="submit" />';
    echo '</form>';
  }

  echo '<p><a href="admin.php">&lt;&lt; Back to admin page</a></p>';
  
    require_once "footer.php";

?>
