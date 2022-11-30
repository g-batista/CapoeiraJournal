
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

                <div class="container">
                    <div class="alert alert-success text-center mt-3 h4" role="alert">
                        <h1>Thank You!</h1>
                        Your contribution was successfuly submited!
                        <br />
                        Check the home page content. 
                        <br />
                        <button type="button" 
                                class="btn btn-outline-success  btn-warning"
                                href="index.php">
                                Home
                        </button>
                    </div>
                </div> 
                <style>
                    div.hideForm {
                    display: none;
                </style>
                ';
            
                mysqli_close($dbc);
            }
        }
?>
 <div class="container row mx-auto d-flex justify-content-center">

    <div class="my-3"> 
        <img src="pictures/logo.png" 
                class="img-fluid" 
                alt="Capoeira Journal oficial logo">
    </div>

    <div class="card bg-info hideForm col-md-9 container ">
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
        class="mx-auto mb-3 mt-3  text-center hideForm container"      
        style="width: 500px; background-color:#FFFF8F">

        <h3 class="col text-center mt-3"><strong class="text-dark">Contact US</strong></h3>
        <form method="post" class="">
            <div class="form-group">
            <label for="email">Email address:</label>
            <input required type="text" class="form-control" id="exampleFormControlInput1" placeholder="capoeiraJournal@user.com" name="email">
            </div>

            <div class="form-group">
                <label for="ex">
                    Experience leve?</br>
                    5=excellent.
                </label>
                <select name="ex" class="custom-select" required>
                    <option value="">Select</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <div class="form-group disply-content-center">
                <label for="text">Please leve your message:</label>
                <textarea class="form-control" id="text" rows="3"  name="text" required></textarea>
            </div>
            <button                 
                    class="btn btn-outline-dark btn-warning mb-5"
                    type="submit">
                Submit
            </button>
        </form>
    </div>
</div>

<?php require_once "footer.php" ?>
