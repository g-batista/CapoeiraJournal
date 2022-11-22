
<?php
  require_once "authorize.php";
  $title = 'Admin Page';
  require_once  "header.php";
  require_once  "system.php";


  echo'<h4 class="container alert alert-warning col-4 text-center mt-3"><a href="userreport.php" class="text-dark">User Report Path</a></h4>';
  // <h4 class="container alert alert-warning col-4 text-center mt-3"><a class="text-dark" href="admin.php">Admin Path</a></h4>

  // Retrieve the information data from MySQL
  $query = "SELECT * FROM comments ORDER BY date DESC";
  $data = mysqli_query($dbc, $query);
  
 

  // Loop through the array data, formatting it as HTML 
  echo '
      <div class="container">
        <table class= "table table-bordered table-warning table-responsive-sm">
        <thead>
        <tr>
          <th scope="col">Title</th>
          <th scope="col">Date</th>
          <th scope="col">Message</th>
          <th scope="col">Remove?</th>
          <th scope="col">Aprove?</th>
        </tr>
      </thead>
        ';
  while ($row = mysqli_fetch_array($data)) { 
    
    //Display the score data
    echo '<tr class="">
          <td>' . $row['title'] . '</td>';
    echo '<td>' . $row['date'] . '</td>';
    echo '<td>' . $row['msg'] . '</td>';

   echo '<td><a href="remove.php?id=' . $row['id']. '">Remove</a></td>';

    if ($row['approved'] == '0') {
      echo '<td><a href="approvepost.php?id=' . $row['id'] .'">Approve</a></td>';
  }
  echo '</tr>';

  }
  
  echo '</table>
     </div>';
  
  mysqli_close($dbc);
    require_once "footer.php";
?>