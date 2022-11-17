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
                echo '<div class="container text-center bg-white">
                        <h4 style= "color:black">
                            Your new account has been successfully created. &#128512
                            You\'re now ready to 
                            <p><a href="login.php"> log in</a></p>
                        </h4>
                        </div>
                        <img id="imglog" src= "pictures/figura-3-alabés.png"><br /><br />
                    ';
                mysqli_close($dbc);
                exit;
                }
                else {
                    // Alert account already exists for this username, so display an error message
                    echo '
                            <h4 class="alert alert-danger container mt-3">
                                An account already exists for this 
                                <strong class="text-danger text-uppercase">username</strong> 
                                    Please use a different user name.&#9888;
                            </h4>
                            ';
                    //Redefine variable
                    $username = ""; 
                }
            }
    }
     
     mysqli_close($dbc);  
?>

<div 
    class="mx-auto mb-3 mt-3  text-center container row"
    style="width: 300px; background-color:#FFFF8F">
    <br />
    <h3 class="col-12 "><strong class="text-dark">Register</strong></h3>

    <!-- other way to use action attribute is action="<?php echo $_SERVER['PHP_SELF']; ?>"-->
    <form
        method="post" 
        action="register.php"
        class="col-12 form-group"
         >
        
        <label for="username" style= "color:black" class="form-label">Username:</label><br />
        <input type="text" id="username" name="username" class="form-control" autofocus required  /><br>

        <label for="password" style= "color:black" class="form-label">Password:</label><br />
        <input type="text" id="password" name="password" class="form-control" required/><br>

        <label for="first_name" style= "color:black" class="form-label">First name:</label><br />
        <input type="text" id="first_name" name="first_name" class="form-control" required/><br />
        
        <label for="last_name" style= "color:black" class="form-label">Last name:</label><br />
        <input type="text" id="last_name" name="last_name" class="form-control" required/><br /><br />
        
        <button type="submit"
                class="btn btn-outline-dark btn-warning mb-5"
                value="Submit Form"
                name="submit"
                style="">
                Submit
        </button> 
        <br />   
    </form>
</div>
<?php
  require_once "footer.php";
?>

