
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

            
            echo '<div class="container mt-3 ">
                    <h1 style="text-align:center; color: darkgreen; background-color:white">
                        <span style="font-size:100px;">&#128140;</span>
                        Your contribution was successfuly sent.</br>Thank You!
                    </h1>
                  </div>
                ';
            
                mysqli_close($dbc);
            }
        }
?>
    <div class="card container mt-3 bg-info">
        <h1 style="text-align:center"
            class="card-title"
        >
          Our Mission
        </h1>
        <p id="home" id="tab" class="card-text mb-3 text-center "> 
            &nbsp;&nbsp; Capoeira is an afro-Brazilian art that is intended to enrich all instances of life. 
            Capoeira is a fight, a dance, and a game body. On this web page, you or your capoeira group will find the keys to connect to other groups, share their philosophy, and learn about all subjects of capoeira at all levels. The content is all made by the community/users and the posts will be checked to make sure the content is appropriate. 
            Finnaly, the main objectve is to connect the capoeristas and suport the world wide capoeira grupo.  
        </p>
    </div>



<div  
     class="mx-auto mb-3 my-3  text-center container row justify-content-md-center"      
     style="width: 500px; background-color:#FFFF8F"
>

<h3 class="col-12 "><strong class="text-dark">Contact US</strong></h3>
        <form method="post" class="">
            <div class="form-group">
            <label for="email">Email address:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@iseethefuture.com"  name="email">
            </div>
        
        <div class="form-group">
            <label for="ex">
                How was your experience?</br>
                1-not good, 5-excellent.
            </label>
            <select name="ex" class="form-control">
                <option value="0">Select</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <div class="form-group disply-content-center">
            <label for="text">Please enter your opinion:</label>
            <textarea class="form-control" id="text" rows="3"  name="text"></textarea>
        </div>
            <button                 
                    class="btn btn-outline-dark btn-warning mb-5"
                    type="submit">
                Submit form
            </button>
        </form>
</div>
<?php require_once "footer.php" ?>
