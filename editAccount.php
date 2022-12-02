<?php
  //concet to database
require_once "system.php";
$title = "Edit Account";
require_once "header.php";

if (!isset($_SESSION['user_id'])) {
  
  //Alert not login.
  echo '
        <div class="container">
            <div class="alert alert-danger text-center mt-3 h4" role="alert">
                Please <a  class="alert-link" href="login.php">login</a> to access this page!
            </div>
        </div>
      ';

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
            or die('#1 Error querying database.');
            
            unset($_SESSION['user_id']);

            //success message
            echo '
                  <div class="container">
                      <div class="alert alert-success  text-center mt-3 h4">
                          Successfully edit account!
                          <br />
                          Add a <a  class="alert-link" href="add.php">New post</a>
                          Or Visete the <a class="alert-link" href=".php">Home</a> page. 
                      </div>

                      <div class="alert alert-danger  text-center mt-3 h4" role="alert">
                          Please <a  class="alert-link" href="login.php">login</a> again to access this page!
                      </div>
                  </div>

                  <style>
                      form.hideForm {
                      display: none;
                  </style>
                ';
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
    or die('#2 Error querying database.');

    $user= mysqli_fetch_assoc($result);

?>
    <form 
      id="form" 
      class="container my-3 col-4 bg-warning hideForm border border-dark" 
      method="post" 
      action="">
      <div class="form-group row">   
          <div class="col-4 mt-3">  
            <label for="first_name" class="form-label">First name:</label>
          </div>
          <div class="col mt-3">
              <input type="text" id="first_name" name="first_name" class="form-control" autofocus required value= "<?php echo $user['first_name'];?>" />
          </div>   
      </div>

      <div class="form-group row">
        <div class="col-4">
          <label for="text"> Last Name:</label>
        </div>
        <div class="col">
          <input type="text" id="last_name" name="last_name" class="form-control" value= "<?php echo $user['last_name'];?>" required />
        </div>
      </div>

      <div class="form-group row">
        <div class="col-4">
            <label for="text"> Username:</label>
        </div>
        <div class="col">
            <input type="text" id="username" name="username" class="form-control" value= "<?php echo $user['username'];?>" required />
        </div>
      </div>

      <div class="form-group row">
        <div class="col-4">
          <label for="text">Password:</label>
        </div>
        <div class="col">
          <input type="text" id="password" name="password" class="form-control" placeholder="New Password" required/>
        </div>
      </div>

      <div class="form-group row justify-content-center">
        <button type="submit"  value="Submit Form" name="submit" class="btn btn-primary mb-3">
            Submit
        </button>
      </div>
    </form>

<?php mysqli_close($dbc);
require_once "footer.php";
?>

