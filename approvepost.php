
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
      echo '
            
              <div class="container alert alert-info h3 text-center my-3 col-md-6 border border-dark border-2">
                Post successfully approved!
              </div>
            ';  
    }
    // Message was not approved
    else {
      echo '
            <div class="container col-md-7">
              <div class="alert alert-danger text-center container my-3 h3 border border-dark border-2">
              <strong class="h1">&#9888;</strong>
              <br/>  
              <strong>Post not approved!<strong>
              </div>
            </div>
            ';
    }

  }

  //if submit was not set show the option to select
  else{
    echo'
    <div class="container">
      <div class="mx-auto my-3 py-3 bg-info col-md-6 text-center h5 border border-dark border-2">
          </form>       
              <div alert alert-dange>Do you want to approve this post?</div>
              <form method="post" action="">
                <input type="radio" name="confirm" value="Yes" /> Yes
                <input type="radio" name="confirm" value="No" checked="checked" /> No <br /> </br>
                <button type="submit" value="Submit" name="submit" class="btn btn-warning">
                  Submit
                </button> 
              </form>
        </div>
    </div>';
  }

  echo '
        <div class="container">
          <div class="container alert alert-warning text-center col-md-4 h3 border border-dark border-2">
            <a class="alert-link text-dark" href="admin.php"> &#10132;Back to admin page</a>
          </div>
        </div>
        ';
?>
