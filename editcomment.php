<?php
  //concet to database
require_once "system.php";
$title = "Eddit Comment";
require_once "header.php";

if (!isset($_SESSION['user_id'])) {
  echo '  
      <h4 class="alert alert-success container mt-3">
          Please <strong><a href="login.php">log in</a></strong>  to access this page.
      </h4>
      ';
  exit();
}
 
$id= $_GET['id'];

  //if not empty post data
  if($_POST) {
    
      if(!empty($_POST['title'] && $_POST['msg'])) {

      //get the ipunt from user from imput name
      $title = mysqli_real_escape_string($dbc,$_POST
      ['title']);

      $msg = mysqli_real_escape_string($dbc,$_POST['msg']);
        
      //commet query to add iformatios
      mysqli_query($dbc, "UPDATE comments SET title ='$title', msg='$msg', approved='0' WHERE id=$id")
          or die('Error querying database.');
         
          echo '
              <h4 class="alert alert-success container mt-3 text-center">
                Menssage updated with success.
                <strong class="text-success text-uppercase">&#9888;</strong>
                <br />
                We will review and add to the home page immediately!
                <br />
                <div class="mt-3">
                  <a href="add.php" class="btn btn-outline-dark btn-warning"">Add New Post</a>
                  <a href="index.php" class="btn btn-outline-dark btn-warning"">Home</a>                
                </div>
              </h4>    
          ';         
      }

    else {
        echo '
              <h4 class="alert alert-danger container mt-3">
                You need to enter all the information to update your comment
                <strong class="text-danger text-uppercase">&#9888;</strong>
              </h4>
            ';
    }

}


  $result= mysqli_query($dbc, "SELECT * FROM comments WHERE id=$id")
      or die('Error querying database.');

      $comment= mysqli_fetch_assoc($result);

      
?>
  <?php
 
 $displayForm = true;
 if (isset($_POST['submit'])) {
   $displayForm= false;
   echo '
   <style>
     div.a {
       visibility: hidden;
     }
   </style> 
   ';


 }    
 if ($displayForm){
 ?>

  <form 
        method="post" 
        class="container col-md-6"
        action=""
        style="background-color:#FFFF8F"

      >
    <h4 class="form-group row justify-content-center text-dark mt-3">
        Edit Comment
    </h4>
    <div class="form-group text-center ">
      <label for="title" 
             class=""
            >
            Eddit title:
      </label>    
      <div>
        <input
              id="title"
              autofocus
              required
              type="text"  
              name="title" 
              class="from-control text-center"
              value="<?php echo $comment['title'];?>"
             />
      </div>
    </div>
    
    <div class="form-group text-center">
      <label for="text">Eddit you text here:</label>
      <textarea 
                id="text"
                class="form-control" 
                rows="5" 
                name="msg" 
                value=""
                required><?php echo $comment['msg'];?></textarea>
    </div> 

    <div class="form-group row justify-content-center">
      <div class="mb-4">
        <button type="submit" 
                class="btn btn-outline-dark btn-warning"
                value="submit Form" 
                name="submit">
          Submit
        </button>
      </div>
    </div>

   
    <!-- <input type="submit" value="Submit Form" name="submit" /> -->
  </form>
<?php
 }
?>








<?php 
require_once "footer.php";
mysqli_close($dbc);
?>

