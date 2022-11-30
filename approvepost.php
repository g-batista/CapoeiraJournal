
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
    echo '<div class="alert alert-danger container my-3">
            Sorry, no post was specified for approval.
          </div>';
  }

  if (isset($_POST['submit'])) {
    if ($_POST['confirm'] == 'Yes') {
    
      // Approve the post by setting the approved column in the database
      mysqli_query($dbc, "UPDATE comments SET approved = 1 WHERE id = $id");
      mysqli_close($dbc);

      // Confirm success with the user
      echo '<div alert alert-success h3 container text-center my-3>
              The post has been successfully approved.
            </div>';

    }
    // Message for no// yes was not showing
    else {
      echo '<div class="alert alert-danger text-center container my-3">
              Sorry, there was a problem approving the post.
            </div>';
    }
  }

  //if submit was not set show the option to select
  else{
    echo'<div class="mx-auto my-3 bg-info container" style="width: 400px">
          </form>       
              <div alert alert-danger>Are you sure you want to approve this post?</div>
              <form method="post" action="">
                <input type="radio" name="confirm" value="Yes" /> Yes
                <input type="radio" name="confirm" value="No" checked="checked" /> No <br /> </br>
                <input type="submit" value="Submit" name="submit" />    
                <button type="button" value="Submit" class="btn btn-warning">Submit</button> 
              </form>
        </div>';
  }

  echo '<div class="container alert alert-info">
          <a href="admin.php">Back to admin page</a>
        </div>';
?>
