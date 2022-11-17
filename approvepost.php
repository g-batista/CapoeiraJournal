
<?php
 require_once "authorize.php";
 $title = 'Approve';
 require_once  "header.php";
 require_once  "system.php";

  if (isset($_GET['id'])) {
    // Grab the score data from the GET
    $id = $_GET['id'];  
  }
  else {
    echo '<p class="error">Sorry, no post was specified for approval.</p>';
  }

  if (isset($_POST['submit'])) {
    if ($_POST['confirm'] == 'Yes') {
    
      // Approve the post by setting the approved column in the database
      mysqli_query($dbc, "UPDATE comments SET approved = 1 WHERE id = $id");
      mysqli_close($dbc);

      // Confirm success with the user
      echo '<h2 style="text-align:center">The post has been successfully approved.</h2>';

    }
    // Message for no// yes was not showing
    else {
      echo '<p class="error">Sorry, there was a problem approving the post.</p>';
    }
  }

  //if submit was not set show the option to select
  else{
    echo'<div class="mx-auto" style="width: 200px">'; 
      echo '</form>';       
              echo '<p>Are you sure you want to approve this post?</p>';
              echo '<form method="post" action="">';
              echo '<input type="radio" name="confirm" value="Yes" /> Yes ';
              echo '<input type="radio" name="confirm" value="No" checked="checked" /> No <br /> </br>';
              echo '<input type="submit" value="Submit" name="submit" />';      
      echo '</form>';
    echo '</div></br>';
  }

  echo '<p style="text-align:center"><a href="admin.php">&lt;&lt; Back to admin page</a></p>';
  
    
  require_once "footer.php";
?>
