<?php
  //concet to database
require_once "system.php";
$title = "Edit Account";
require_once "header.php";

if (!isset($_SESSION['user_id'])) {
  
  //Alert not login.
  echo '
      <div class="alert alert-danger container text-center mt-3 h4" role="alert">
          Please <a  class="alert-link" href="login.php">login</a> to access this page!
      </div>';

  
  require_once "footer.php";
  exit();
}
 
$id= $_SESSION['user_id'];

  //if not empty post data
if ($_POST) {

    $username = mysqli_real_escape_string($dbc,$_POST['username']);
    $password = mysqli_real_escape_string($dbc,$_POST['password']);
    $first_name = mysqli_real_escape_string($dbc,$_POST['first_name']);
    $last_name = mysqli_real_escape_string($dbc,$_POST['last_name']);

    if (!empty($username) && !empty($password) && !empty($first_name) && !empty($last_name)) {
        
        //cheque if user name is unique
        $query = "SELECT * FROM journal_user WHERE username = '$username'";
        $data = mysqli_query($dbc, $query);

        if (mysqli_num_rows($data) == 0) {

        //commet query to add iformatios
        mysqli_query($dbc, "UPDATE journal_user 
                            SET username ='$username', 
                            password= sha1('$password'),first_name='$first_name',last_name='$last_name'
                            WHERE id=$id")
            or die('#1Error querying database.');
            
            echo '
                <div class="alert alert-success container text-center bg-white mt-3">
                    Successfully edit!
                    <br />
                    Add a <a  class="alert-link" href="add.php">New post</a>
                    Or Visete the <a class="alert-link" href=".php">home</a> page 
                </div>

                    <div class="alert alert-danger container text-center mt-3 h4" role="alert">
                    Please <a  class="alert-link" href="login.php">login</a> to access this page!
                </div>';
                $_SESSION = array();
                    
        } 
        else {
               // An account already exists for this username, so display an error message
               echo '
                       <h4 class="alert alert-danger container mt-3">
                           An account already exists for this 
                           <strong class="text-danger text-uppercase">username</strong> 
                               Please use a different user name.&#9888;
                       </h4>
                    ';
            }
    }
        
}  

    $result= mysqli_query($dbc, "SELECT * FROM journal_user WHERE id=$id")
    or die('#2Error querying database.');

    $user= mysqli_fetch_assoc($result);

?>
<form id="form" class="mx-auto" style="width: 300px" method="post" action="">
    
    <label for="title">first name:</label><br />
    <input type="text" id="first_name" name="first_name" value= "<?php echo $user['first_name'];?>" /><br />

    <div class="form-group">
      <label for="text"> last name:</label>
      <input type="text" id="last_name" name="last_name" value= "<?php echo $user['last_name'];?>" /><br />
    </div>
    <div class="form-group">
      <label for="text"> Username:</label>
      <input type="text" id="username" name="username" value= "<?php echo $user['username'];?>" /><br />
    </div>
    <div class="form-group">
      <label for="text">New Password:</label>
      <input type="text" id="password" name="password"/><br />
    </div>


    <input type="submit" value="Submit Form" name="submit" />
  </form>

<?php mysqli_close($dbc);
require_once "footer.php";
?>

