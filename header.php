<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

  <link rel="stylesheet" href="style.css">
  <!-- use the page set title variable -->
  <?php echo '<title>'.$title.'</title>' ?>

</head>
<div class="container d-flex-sm">
<a id="top"></a>
  <div  id="back" 
        style="margin-top: 6px;">
    <img src="pictures/caribe-roda2.jpeg" 
        class="rounded mx-auto d-block
        img-fluid"
        style="padding-top: 20px"
        width="650px" 
        height="200px" 
        alt="Capoeira roda very colofull Caribé">
  </div>
  
  <!-- class="mx-auto"  -->

    <ul id="back" style="" class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link" href="index.php" aria-controls="profile" aria-selected="false">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="add.php" aria-controls="contact" aria-selected="false">Add Post</a>
          </li>

          <?php
          if(empty($_SESSION["user_id"])){
            echo '
                <li class="nav-item">
                  <a class="nav-link" id="index-tab" href="login.php" aria-controls="profile" aria-selected="false">Log in </a>
                </li>

                  <li class="nav-item">
                  <a class="nav-link" id="index-tab" 
                      href="register.php"aria-controls="profile" aria-selected="false">Register</a>     
                </li>
            ';
          }   
          ?>
        <?php
          if(!empty($_SESSION["user_id"])){
            echo '
                  <li class="nav-item">
                    <a class="nav-link" id="index-tab" 
                    href="logout.php" aria-controls="profile" aria-selected="false">Logout </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" id="index-tab" href="index.php?mycomments"aria-controls="profile" aria-selected="false">My Comments</a>
                  </li>
                ';
          }   
          ?>
          <li class="nav-item">
            <a class="nav-link" id="index-tab" href="aboutus.php" aria-controls="profile" aria-selected="false">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="index-tab" href="search.php" aria-controls="profile" aria-selected="false">Search</a>
          </li>
    </ul>
</div>