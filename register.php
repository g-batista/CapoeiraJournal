<?php
    require_once "system.php";
    $title ="Register";
    require_once "header.php";
    
    // Grab the profile data from the POST
    if (isset($_POST['submit'])) {

         // Grab the profile data from the POST   
        $username = mysqli_real_escape_string($dbc,$_POST['username']);
        $password = mysqli_real_escape_string($dbc,$_POST['password']);
        $first_name = mysqli_real_escape_string($dbc,$_POST['first_name']);
        $last_name = mysqli_real_escape_string($dbc,$_POST['last_name']);
        
            // chequink if the fields are not empty
            if (!empty($username) && !empty($password) && !empty($first_name) && !empty($last_name)) {
            
                // Make sure someone isn't already registered using this username
                $query = "SELECT * FROM journal_user WHERE username = '$username'";
                $data = mysqli_query($dbc, $query);

                if (mysqli_num_rows($data) == 0) {

                    //Insert the data into the database
                    mysqli_query($dbc,"INSERT INTO journal_user (username, password, first_name, last_name) 
                                    values ('$username',sha1('$password'),'$first_name', '$last_name')");

                    // Alert success new account
                    echo '
                            <div class="container col-md-7">
                                <div class="text-center alert-success h4 my-3 p-2 border border-dark border-2">
                                    Your new account has been successfully created.
                                    <br />You\'re now ready to login.
                                    <br />
                                    <div class="mt-2">
                                        <a href="login.php" class="btn btn-light btn-outline-success">
                                            Login
                                        </a>
                                    </div>
                                </div>
                            </div>
                        ';
                    require_once "footer.php";
            
                    mysqli_close($dbc);
                    exit();
                }
                else {
                    // Alert account already exists for this username, so display an error message
                    echo '
                        <div class="container text-center col-md-6">
                            <h4 class="alert alert-danger mt-3 border border-dark border-2">
                                An account already exists for this 
                                <strong class="text-danger text-uppercase">username</strong>. 
                                   <br />Please use a different user name.&#9888;
                            </h4>
                        </div>';
                    //Redefine variable
                    $username = ""; 
                }
            }
    }
     
    //  mysqli_close($dbc);  
?>

<!-- other way to use action attribute is action="<?php echo $_SERVER['PHP_SELF']; ?>"-->
<div class="container">
    <div class="container col-md-6 my-3 border border-2 border-dark"
         style="background-color: #FFFF99">
        <form
            method="post" 
            action="register.php"
            class="form-group my-2 p-2 text-center">
            
            <h3 class="text-dark" for="username">Register</h3>
            
            <label for="username" style= "color:black" class="form-label h5">
                Username:
                <p class="fw-lighter text-muted">Numbers or letters minimum #4</p>
            </label>
            <input  type="text" 
                    id="username" 
                    name="username" 
                    class="form-control text-center" 
                    autofocus 
                    required
                    pattern="[A-Za-z0-9]{4,}"/>
                    
            <label for="password" style= "color:black" class="form-label h5 text-center">
                Password:
                <p class="fw-lighter text-muted"> Only number minimum #4</p>
            </label>
            <input type="text" 
                   id="password" 
                   name="password" 
                   class="form-control text-center" 
                   required
                   pattern="[0-9]{4}"/>

            <label for="first_name" style= "color:black" class="form-label h5 text-center">
            First name: 
            <p class="fw-lighter text-muted"> Numbers or letters minimum #4</p>
            </label>
            <input 
                type="text" 
                id="first_name" 
                name="first_name" 
                class="form-control text-center" 
                required 
                pattern="[A-Za-z0-9]{4,}"/>
            
            <label 
                for="last_name" 
                style= "color:black" 
                class="form-label h5 text-center">
                Last name:
                <p class="fw-lighter text-muted"> Numbers or letters minimum #4</p>
        </label>
            <input 
                type="text" 
                id="last_name" 
                name="last_name" 
                class="form-control text-center" 
                required                     
                pattern="[A-Za-z0-9]{4,}"/>
            
            <button type="submit"
                    class="btn btn-outline-light btn-danger my-3"
                    value="Submit Form"
                    name="submit"
                    style="">
                    Submit
            </button> 
        </form>
    </div>
</div>

<?php
  require_once "footer.php";
?>

