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
          <div class="container">
              <div class=" text-center mt-3 mb-4 card ">
                <div class="" role="alert">
                  <h5 class="card-header alert alert-danger" role="alert">
                      Incorrect <strong>username or password!</strong>
                  </h5>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Please try again or Register</h5>
                  <br/>
                  <a href="login.php" class="btn btn-light btn-outline-success">Log in</a>
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
             <div class="container">
                <div class="text-center card mt-3 mb-4">
                  <div class="card-header alert-success">
                      <h4 class="text-success">
                          You are now logged in &#9745;
                      </h4>
                  </div>
                  <div class="card-body">
                      <h5 class="card-title">
                          Welcome to Capoeira Jornal
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

<div class="mt-3 container col-md-6 col">
  <form method="post" 
        class="bg-light"
        action="<?php echo $_SERVER['PHP_SELF']; ?>"
  >
      <div class="form-group row justify-content-center">
        <label for="username" class="col-sm-2 col-form-label mt-3">Username:</label>
          <div class="col-sm-10 col-md-3">
            <input
            id="username" 
            autofocus
            type="text"
            name="username"
            class="form-control mt-3"
            placeholder="Enter your username"
            value="<?php if (!empty($user_username)) echo $user_username; ?>"
            />
          </div>
        </div>
        <div class="form-group row justify-content-center ">
        <label for="password" class="col-sm-2 col-form-label">Password: </label>
        <div class="col-sm-10 col-md-3">
          <input 
              id="password" 
              type="password" 
              name="password" 
              class="form-control" 
              value="" 
              placeholder="Password"
          >
        </div>
      </div>
      <div class="form-group row justify-content-center">
        <div class="col-sm-10 col-md-3 mb-4">
          <button type="submit" 
                  class="btn btn-outline-dark btn-warning"
                  value="Log In" 
                  name="submit">
            Submit
          </button>
        </div>
      </div>
  </form>
</div>
<?php
  require_once "footer.php";
?>
