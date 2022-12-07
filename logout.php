<?php 
$title = "Logout";
require_once  "header.php";

 // If the user is logged in, delete the session vars to log them out
 session_start();

 if (isset($_SESSION['user_id'])) {

   // Delete the session vars by clearing the $_SESSION array to logout.
   $_SESSION = array();
  
 }
?>
<center class="container my-3">
  <div class="card border border-dark border-2">
    <div class="card-header alert alert-success">
      <span class="text-success h1">&#9745;</span>
      <h3 class=" text-success">You're logged out now. See you next time!</h3>
    </div>
    <div class="card-body">
      <h5 class="card-title">Check the new Capoeira Journals</h5>
        <p class="card-text text-dark">or Log in</p>
      <a href="index.php" class="btn btn-outline-dark btn-warning"">Home</a>
      <a href="login.php" class="btn btn-outline-dark btn-warning"">Log in</a>
    </div>
  </div>
</center>
<?php
  require_once "footer.php";
?>

  