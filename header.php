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
  <link rel="apple-touch-icon" sizes="180x180" href="pictures/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="pictures/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="pictures/logFavicon/favicon-16x16.png">

</head>
<a id="top"></a>


<div class="container">
  <img src="pictures/caribe-roda2.jpeg" 
      class="img-fluid"
      style=" height: 200px;
              width: 1110px;"
      alt="Capoeira roda very colofull,author: Caribé.">

    <nav 
        class="navbar navbar-expand-lg navbar-dark d-flex justify-content-between border-bottom border-warning"        
        role="navigation"
        style="background-color:black"> 
        <a class="align-items-stretch" href="index.php">
          <img src="pictures/logo-1.png" alt="Oficial logo, star with capoeira journal on the top wings">

        </a>
        <button 
                type="button" 
                class="d-lg-none menu-trasitio rounded-circle" 
                data-toggle="collapse" 
                data-target="#navbar" 
                aria-controls="navbar"
                aria-expanded="false" 
                aria-label="Toggle navigation"
                style=" height: 55px; width: 65px;">
        </button>

        <div class="collapse navbar-collapse" id="navbar">
            <ul class="d-md-flex ml-auto nav-bar-nav list-unstyled p-1 h6">
                    <li class="nav-item active">
                      <a class="nav-link text-white" href="index.php" aria-controls="profile" aria-selected="false">Home</a>
                    </li>

                    <?php
                    if(empty($_SESSION["user_id"])){
                      echo '
                          <li class="nav-item">
                            <a class="nav-link text-white" id="index-tab" href="login.php" aria-controls="profile" aria-selected="false">Log in </a>
                          </li>

                            <li class="nav-item">
                            <a class="nav-link text-white" id="index-tab" 
                                href="register.php"aria-controls="profile" aria-selected="false">Register</a>     
                          </li>
                      ';
                    }   
                    ?>
                  <?php
                    if(!empty($_SESSION["user_id"])){
                      echo '
                            <li class="nav-item">
                              <a class="nav-link text-white" id="index-tab" 
                              href="logout.php" aria-controls="profile" aria-selected="false">Logout </a>
                            </li>

                            <li class="nav-item ">
                              <a class="nav-link text-white" href="add.php" aria-controls="contact" aria-selected="false">Add Post</a>
                            </li>      

                            <li class="nav-item">
                              <a class="nav-link text-white" id="index-tab" href="index.php?mycomments"aria-controls="profile" aria-selected="false">My Comments</a>
                            </li>
                          ';
                    }   
                    ?>
                    <li class="nav-item ">
                      <a class="nav-link text-white" id="index-tab" href="aboutus.php" aria-controls="profile" aria-selected="false">About Us</a>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link text-white" id="index-tab" href="search.php" aria-controls="profile" aria-selected="false">Search</a>
                    </li>
              </ul>
        </div>
    </nav>
</div>
