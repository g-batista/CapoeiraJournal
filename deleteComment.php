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
  exit();
}
 
$id= $_GET['id'];

      $result= mysqli_query($dbc, "SELECT * FROM comments WHERE id=$id")
      or die('Error querying database.');

      $comment= mysqli_fetch_assoc($result);
      unlink("pictures/".$comment["picture"]);

      //commet query to add iformatiosSET
      mysqli_query($dbc, "DELETE FROM comments WHERE id=$id")
          or die('Error querying database.');
         
          echo '
            <div class="alert alert-success container text-center mt-3 h4" role="alert">
              Post deleted with success!
              <div class="card-body container">
                <h5 class="card-title">Check the new Capoeira Journals</h5>
                <a href="index.php" class="btn btn-outline-dark btn-warning"">Home</a>
              </div>
            </div>
         ';  
?>
<?php mysqli_close($dbc);?>

