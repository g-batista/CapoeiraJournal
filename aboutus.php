
<?php    
    require_once "system.php";
    $title = "About Us";
    require_once "header.php";
    
        //if set/submit
        if($_POST){
            //if fealds not empty
            if(!empty($_POST['email'] && $_POST['email'] && $_POST['text'])){
            
                $email = mysqli_real_escape_string($dbc,$_POST['email']);
                $ex = mysqli_real_escape_string($dbc,$_POST['ex']);
                $text = mysqli_real_escape_string($dbc,$_POST['text']);
                

            mysqli_query($dbc,"INSERT INTO ux (email, ex, text) values('$email', '$ex', '$text')")
            or die("Erro iserting exercise log!");

            echo '

                <div class="container ">
                    <div class="alert alert-success border border-dark text-center mt-3 h4" role="alert">
                        <h1>Thank You!</h1>
                        Your contribution was successfuly submited!
                        <br />
                        Check the home page content. 
                        <br />
                        <div class="mt-2">
                            <a type="button" 
                                    class="btn btn-outline-success  btn-warning"
                                    href="index.php">
                                    Home
                            </a>
                        </div>
                    </div>
                </div> 
                <style>
                    .hideContent {
                    display: none;
                </style>
                ';
            
                mysqli_close($dbc);
            }
        }
?>
 <div class="container">

    <div class="my-3 hideContent col-md-9 container"> 
        <img src="pictures/logo.png" 
                class="img-fluid col-md-12 border border-warning p-0" 
                alt="Capoeira Journal oficial logo">

</div>
    <div class="card bg-info hideContent col-md-9 container border border-dark ">
        <h1 style="text-align:center"
            class="card-title">
          Our Mission
        </h1>
        <p id="home" id="tab" class="card-text p-3"> 
            &nbsp; Capoeira is an afro-Brazilian art that is intended to enrich all instances of life.
            <br> &nbsp;&nbsp;&nbsp;Capoeira is a fight, a dance, and a body game. 
            <br>&nbsp;&nbsp;&nbsp;In this web site, you or your capoeira group will find the keys to connect to other groups, share the capoeira philosophy, and learn about all subjects of capoeira at all levels. The content is all made by the community/users and the posts will be checked to make sure the content is appropriate. 
            <br>&nbsp;Finnaly, the main objectve is to connect the capoeristas and suport the world wide capoeira grupo.
            Give and take the best of capoira life is here now!<br>
        </p>
    </div>

    <div  
        class="mx-auto mb-3 mt-3  text-center hideContent container border border-dark border-2 col-md-7"      
        style="background-color:#FFFF8F">

        <h3 class="col text-center mt-3"><strong class="text-dark">Contact US</strong></h3>

        <form method="post" class="mx-md-5 mx-sm-2">
            <div class="form-group">
                <label for="email" class="h5">Email address:</label>
                <input required type="text" class="form-control text-center" id="email" placeholder="capoeiraJournal@user.com" name="email">
            </div>

            <div class="form-group mt-2">
                <label for="ex" class="h5">
                    Experience level?</br>
                    5=excellent.
                </label>
                <select name="ex" id="ex" class="custom-select" required>
                    <option value="">Select</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <div class="form-group disply-content-center mt-3">
                <label class="h5" for="text">Please leve your message:</label>
                <textarea class="form-control" id="text" rows="3"  name="text" required></textarea>
            </div>
            <button                 
                    class="btn btn-outline-dark btn-warning my-3"
                    type="submit">
                Submit
            </button>
        </form>
    </div>
</div>

<?php require_once "footer.php" ?>
