<?php

require_once "system.php";
$title = "Login";

session_start();

  if ($_POST) {
      $username = mysqli_real_escape_string ($dbc,$_POST['username']);
      $password = mysqli_real_escape_string($dbc,$_POST ['password']);
      $password = sha1($password);

      // selecting data
      $query = mysqli_query($dbc,"SELECT id
                                  FROM journal_user 
                                  WHERE username = '$username'
                                  AND password = '$password'");
      $user = mysqli_fetch_assoc($query);

      if(!$user){
        require_once "header.php";

        //Warning incorrect password
        echo '
          <div class="container col-md-6">
              <div class=" text-center mt-3 mb-4 card border border-dark border-2 ">
                <div class="" role="alert">
                  <h5 class="card-header alert alert-danger" role="alert">
                      Incorrect <strong>username or password!</strong>
                  </h5>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Please try again or Register</h5>
                  <br/>
                  <a href="login.php" class="btn btn-light btn-outline-success">Try again</a>
                  <a href="register.php" class="btn btn-light btn-outline-warning">Register</a>
                </div>
              </div>
          </div>
          ';
          require_once "footer.php";

        die(); 
      }

      $_SESSION["user_id"]= $user['id'];

      //Success senario
      require_once "header.php";
      //Success password
      echo '
             <div class="container col-md-6">
                <div class="text-center card mt-3 mb-4 border border-dark border-2">
                  <div class="card-header alert-success">
                      <h4 class="text-success">
                          You are now logged in &#9745;
                      </h4>
                  </div>
                  <div class="card-body">
                      <h5 class="card-title text-success">
                          Welcome to Capoeira Journal!
                      </h5>
                      <br />
                      <a href="index.php" class="btn btn-warning btn-outline-dark">
                          Home
                      </a>
                      <a href="add.php" class="btn btn-warning btn-outline-dark">
                          Add Post
                      </a>
                  </div>
                </div>
             </div>'; 
             require_once "footer.php";
            exit();
  }
  require_once "header.php";
?>

<div class="my-3 container col-md-3 d-flex flex-column align-items-center">
  <form 
        method="post" 
        class="bg-light border border-dark border-2 container p-3"
        action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <h4 class="text-dark text-center mb-4 border-2 border-bottom border-dark">Log In</h4>
        
      <div class="form-group h5">
        <label for="username" class="form-label">Username:</label>
        <input
        id="username" 
        autofocus
        type="text"
        name="username"
        class="form-control" 
        placeholder="Enter your username"
        required
        value="<?php if (!empty($user_username)) echo $user_username; ?>"/>
      </div>
      <div class="form-group h5">
        <label for="password" class="form-label">Password: </label>
        <input 
            id="password" 
            type="password" 
            name="password" 
            class="form-control" 
            value="" 
            required
            placeholder="Password">
        </div>
        
      <div class=" my-3 text-center">
          <button type="submit" 
                  class="btn btn-outline-dark btn-warning"
                  value="Log In" 
                  name="submit">
              Submit
          </button>
      </div>
  </form>
</div>
<?php
  require_once "footer.php";
?>
