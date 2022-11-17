
<?php
  require_once "authorize.php";
  $title = 'Admin Page';
  require_once  "header.php";
  require_once  "system.php";


  echo'<h4 style="text-align:center; color: FFEB3B"><a href="userreport.php">User Report Path</a></h4>';

  // Retrieve the information data from MySQL
  $query = "SELECT * FROM comments ORDER BY date DESC";
  $data = mysqli_query($dbc, $query);
  
 

  // Loop through the array data, formatting it as HTML 
  echo '<table class= "table">';
  while ($row = mysqli_fetch_array($data)) { 
    
    //Display the score data
    echo '<tr class="blogtable"><td><strong>' . $row['title'] . '</strong></td>';
    echo '<td>' . $row['date'] . '</td>';
    echo '<td>' . $row['msg'] . '</td>';

   echo '<td><a href="remove.php?id=' . $row['id']. '">Remove</a></td>';

    if ($row['approved'] == '0') {
      echo '<td><a href="approvepost.php?id=' . $row['id'] .'">Approve</a></td>';
  }
  echo '</tr>';

  }
  
  echo '</table>';

  
  mysqli_close($dbc);
    require_once "footer.php";
?>