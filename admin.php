
<?php
  require_once "authorize.php";
  $title = 'Admin Page';
  require_once  "header.php";
  require_once  "system.php";


  echo'
      <div class="container d-flex justify-content-center">
        <h4 class="alert alert-danger col-md-4 text-center mt-3 border border-dark">
          <a href="userreport.php" class="text-dark ">
          &#10132; User Report Path
          </a>
        </h4>
      </div>
      ';

  // Retrieve the information data from MySQL
  $query = "SELECT * FROM comments ORDER BY date DESC";
  $data = mysqli_query($dbc, $query);


  while ($row = mysqli_fetch_assoc($data)) { 
    // Loop through the array data, formatting it as HTML 
  echo '
      <div class="container">
        <table class="table table-warning table-responsive">
          <thead class="thead-light text-center border border-dark">
            <tr class="">
              <th class="border border-dark" scope="col border border-dark">Title</th>
              <th class="border border-dark" scope="col">Date</th>
              <th class="border border-dark" scope="col">Message</th>
              <th class="border border-dark" scope="col">Picture</th>
              <th class="border border-dark" scope="col">Remove?</th>
              ';
              
              if ($row['approved'] == '0') {
                echo '
                <th class="border border-dark" scope="col">Aprove?</th>
                ';
              }
      echo' </tr>
          </thead>
        ';
    //Display the score data
    echo '
        <tbody class="border border-dark">
          <tr class="border border-dark" scope="row">
            <td class="col-1 border border-dark">' . $row['title'] . '</td>
            <td class="col-1 border border-dark">' . $row['date'] . '</td>
            <td class="border border-dark">' . $row['msg'] . '</td>
            <td class="col-3 justify-content-center">
             <img class="img-fluid"
                 src="pictures/'.$row['picture'].'">
            </td>
            
            <td class="border border-dark col-1">
              <a class="text-danger" href="remove.php?id=' . $row['id']. '"> 
                Remove
              </a>
            </td>';

    if ($row['approved'] == '0') {
        echo '<td class="col-1">
                <a class="text-success" href="approvepost.php?id=' . $row['id'] .'">
                  Approve
                </a>
              </td>';
    }
      echo '</tr>
        </tbody>';
  }
   echo '</table>
      </div>';
  
  mysqli_close($dbc);
?>