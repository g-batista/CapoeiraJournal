<?php
  //concet to database
  require_once "system.php";
  $title = "Edit Account";
  // require_once "header.php";

if (!isset($_SESSION['user_id'])) {
  require_once "header.php";

  //Alert not login.
  echo '
        <div class="container col-md-6">
            <div class="alert alert-danger text-center mt-3 h4  border border-dark border-2" role="alert">
                Please <a  class="alert-link" href="login.php">login</a> to access this page!
            </div>
        </div>
      ';

  require_once "footer.php";
  exit();
}
 
  $id= $_SESSION['user_id'];

  //if not empty post data

  // if (isset($_POST['submit'])) {
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

          //commet query to add informatio
          mysqli_query($dbc, "UPDATE journal_user 
                            SET username ='$username', 
                            password= sha1('$password'),first_name='$first_name',last_name='$last_name'
                            WHERE id=$id")
            or die('#1 Error querying database.');
            
            
            unset($_SESSION['user_id']);

            if (!isset($_SESSION['user_id'])) {
              require_once "header.php";
            
              //Alert not login.
              echo '
              <div class="container col-md-6">
                <div class="alert alert-success  text-center mt-3 h4 border border-dark">
                  Successfully edited account!
                  <br />
                  Vist the <a class="alert-link" href="index.php">Home</a> page. 
                </div>
                
                <div class="alert alert-danger  text-center mt-3 h4 border border-dark" role="alert">
                  Please <a  class="alert-link" href="login.php">login</a> again to access this page!
                </div>
              </div>
              
              <style>
                form.hideForm {
                  display: none;
              </style>
            ';
            
              require_once "footer.php";
              exit();
            }
            
            $_SESSION = array();

          } 
              
        else {
          require_once "header.php";

               // An account already exists for this username, so display an error message
               echo '
                      <div class="container col-md-6">
                        <h4 class="alert alert-danger container mt-3 text-center border border-dark">
                            An account already exists for this 
                            <strong class="text-danger text-uppercase">username.</strong>
                            <br />
                                Please use a different user name.&#9888;
                        </h4>
                       </div>
                    ';
            }
            require_once "header.php";
    }
}  
  require_once "header.php";

    $result= mysqli_query($dbc, "SELECT * FROM journal_user WHERE id=$id")
    or die('#2 Error querying database.');

    $user= mysqli_fetch_assoc($result);

?>
<div class="container">
  <div class="container my-3 hideForm col-md-6">
    <form 
      id="form" 
      class="bg-warning form-group my-2 p-2 text-center border border-dark border-2" 
      method="post" 
      action="">
      <h3 class="text-dark">Edit your account:</h3>
          
      <label for="first_name" class="form-label h5">
        First name:
        <p class="fw-lighter text-muted">Numbers or letters minimum #4</p>
      </label>
            <input 
              type="text" 
              id="first_name" 
              name="first_name" 
              class="form-control text-center"
              autofocus 
              required 
              pattern="[A-Za-z0-9]{4,}"
              value= "<?php echo $user['first_name'];?>" />
      
          <label for="text">
            Last Name:
            <p class="fw-lighter text-muted"> Numbers or letters minimum #4</p>
          </label>
            <input 
            type="text" 
            id="last_name" 
            name="last_name" 
            class="form-control text-center" 
            pattern="[A-Za-z0-9]{4,}"
            value= "<?php echo $user['last_name'];?>" 
            required />

            <label for="text">
              Username:
              <p class="fw-lighter text-muted">Numbers or letters minimum #4</p>
            </label>
            <input 
              type="text" 
              id="username" 
              name="username" 
              class="form-control text-center" 
              pattern="[A-Za-z0-9]{4,}"
              value= "<?php echo $user['username'];?>" 
              required />

          <label for="text">
            Password:
            <p class="fw-lighter text-muted"> Only number #4</p>
          </label>
          <input 
            type="text" 
            id="password" 
            name="password" 
            class="form-control text-center" 
            placeholder="New Password"
            pattern="[0-9]{4}"
            required/>

      <div class="form-group mt-2">
        <button 
            type="submit"  
            value="Submit Form" 
            name="submit" 
            class="btn btn-success">
            Submit
        </button>
        <a  type="button"  
            value="button" 
            name="button" 
            class="btn btn-danger ml-2"
            href="index.php">
            Cancel
        </a>
      </div>
    </form>
  </div>
</div>

<?php mysqli_close($dbc);
require_once "footer.php";
?>