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
<a id="top"></a>

  <div
      class=" mt-2 container  d-flex justify-content-center">
      
</div>

<div class="container">
<img src="pictures/caribe-roda2.jpeg" 
      class="img-fluid"
      style=" height: 200px;
            width: 1110px;"
     
      alt="Capoeira roda very colofull Caribé">

    <nav 
        class="navbar navbar-expand-lg navbar-light bg-dark d-flex justify-content-between"        
        role="navigation">
        
        <!-- addicionanr logo fivicon -->
        <a class="navbar-brand text-white" href="index.php">Capoeira Jornal</a><img src="" alt="">

        <button type="button" class="navbar-toggle bg-transparent d-lg-none" 
                data-toggle="collapse" data-target="#navbar" 
                aria-controls="navbar"
                aria-expanded="false" 
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon bg-dark"></span>
        </button>

      <div class="collapse navbar-collapse" id="navbar">
          <ul class="d-md-flex ml-auto nav-bar-nav list-unstyled p-3 m-1">
                  <li class="nav-item active">
                    <a class="nav-link text-white" href="index.php" aria-controls="profile" aria-selected="false">Home</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link text-white" href="add.php" aria-controls="contact" aria-selected="false">Add Post</a>
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
      <!-- class="mx-auto"  -->

    </nav>
</div>
