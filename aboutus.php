
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

                <div class="container col-md-7 ">
                    <div class="alert alert-success border border-dark border-2 text-center mt-3 h4" role="alert">
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
    <div class="card bg-info hideContent col-md-9 container border border-dark border-2">
        <h1 style="text-align:center"
            class="card-title">
          Our Mission
        </h1>
        <p id="tab" class="card-text p-3 text-dark">
            &nbsp; &nbsp;Capoeira is an afro-Brazilian art that is intended to enrich all instances of life.
            Capoeira is a fight, a dance, and a body game.
            On this website, you or your Capoeira group will find the keys to connecting to other groups, sharing the Capoeira philosophy, and learning about all subjects of Capoeira at all levels. The content is all made by the community/users and the posts will be checked to make sure the content is appropriate.
            Finnaly, the main objectve is to connect the capoeristas and suport the world wide Capoeira grupo. Give and take the best of Capoeira life is here now!
        </p>
    </div>

    <div  
        class="mx-auto mb-3 mt-3  text-center hideContent container border border-dark border-2 col-md-7"      
        style="background-color:#FFFF8F">

        <h3 class="col text-center mt-3"><strong class="text-dark">Contact US</strong></h3>

        <form method="post" class="mx-md-5 mx-sm-2">
            <div class="form-group">
                <label for="email" class="h5">Email address:</label>
                <input 
                    required 
                    type="text" 
                    class="form-control text-center" 
                    id="email" 
                    placeholder="capoeiraJournal@user.com" 
                    name="email"  
                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
            </div>

            <div class="form-group mt-2">
                <label for="ex" class="h5">
                    Experience level?</br>
                    5=excellent.
                </label>
                <select name="ex" id="ex" class="custom-select" required>
                    <option value="">Select</option>
                    <option value="5">5</option>
                    <option value="4">4</option>
                    <option value="3">3</option>
                    <option value="2">2</option>
                    <option value="1">1</option>
                </select>
            </div>
            <div class="form-group disply-content-center mt-3">
                <label class="h5" for="text">Please leve your message:</label>
                <textarea 
                    class="form-control" 
                    id="text" 
                    rows="3"  
                    name="text" 
                    required 
                    pattern=""></textarea>
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
