<?php

require_once "system.php";
$title= "Accont Page";
require_once "header.php";

//checking if user is login
if(empty($_SESSION['user_id'])){
    echo '<p classe = error>Error! You need to log in!</p>'; 
    exit;
  }

?>


<h2>Account Page</h2>
<a href="editprofile.php">Editprofile</a>