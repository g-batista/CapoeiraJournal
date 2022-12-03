<?php
  //concet to database
require_once "system.php";
$title = "Delete Post";
require_once "header.php";

if (!isset($_SESSION['user_id'])) {
  echo '
    <div class="alert alert-danger container text-center mt-3 h4" role="alert">
      Please <a  class="alert-link" href="login.php">login</a> to access this page!
    </div>
    ';
    require_once "footer.php";
  exit();
}
 
$id= $_GET['id'];

if (isset($_POST ['submit'])) {
    if ($_POST['confirm'] == 'Yes') {

      $result= mysqli_query($dbc, "SELECT * FROM comments WHERE id=$id")
      or die('Error querying database.');

      $comment= mysqli_fetch_assoc($result);
      unlink("pictures/".$comment["picture"]);

      //commet query to add iformatiosSET
      mysqli_query($dbc, "DELETE FROM comments WHERE id=$id")
          or die('Error querying database.');
         
          //success deleted comment
          echo '
            <div class="alert alert-success container text-center mt-3 h4" role="alert">
              Post deleted with success!
              <div class="card-body container">
                <h5 class="card-title">Check the new Capoeira Journals</h5>
                <a href="index.php" class="btn btn-outline-dark btn-warning"">Home</a>
              </div>
            </div>
         ';  
    }
    else {
      // not removed account message
      echo '
            <div class="container">
                <div 
                    class="alert alert-danger  text-center mt-3 h4" role="alert">
                    Post was <strong>NOT</strong> removed!
                </div>
                <div 
                    class="card-body  alert alert-info  text-center mt-3 h4">
                  <h5 class="card-title">Check the Home Capoeira Journals</h5>
                  <a href="index.php" class="btn btn-outline-dark btn-warning"">Home</a>
                </div>
            </div>
          ';
    }

  
  }
  else{
    echo '
    <div class="container">
        <div class="alert alert-danger mt-4  text-center h4">
            Do you want to <i class="h2">delete</i> this comment?
            <form method="post" action="" class="h3">
                <input type="radio" name="confirm" value="Yes" /> Yes
                <input type="radio" name="confirm" value="No" checked="checked" /> No
                <br />
                <br />
                <button type="submit" value="submit" name="submit" class="btn btn-danger ">
                    Submit
                </button>
            </form>
        </div>
     </div>   
        ';
        require_once  "header.php";

  }

  
?>
<?php mysqli_close($dbc);
  require_once "footer.php";
?>

