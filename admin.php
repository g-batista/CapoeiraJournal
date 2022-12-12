
<?php
  $title = 'Admin Page';
  require_once "authorize.php";
  require_once  "header.php";
  require_once  "system.php";


  echo'
      <div class="container d-flex justify-content-center">
        <h4 class="alert alert-danger col-md-4 text-center mt-3 border border-dark border-2">
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
      <div class="table-responsive">
        <table class="table-warning table">
          <thead class="thead-light text-center border border-dark">
            <tr class="table-secondary h5">
              <th class="border border-dark" scope="col border border-dark">Title</th>
              <th class="border border-dark" scope="col">Date</th>
              <th class="border border-dark" scope="col">Message</th>';
              if(!empty ($row['picture'])){
                echo '
                <th class="border border-dark" scope="col">Picture</th>
                ';}
                echo '
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
            <td class="col-1 border border-dark text-dark h5">' . $row['title'] . '</td>
            <td class="col-1 border border-dark">' . $row['date'] . '</td>
            <td class="border border-dark">' . $row['msg'] . '</td>';
            
              if(!empty ($row['picture'])){
                echo'
                    <td class="col-3">
                    <img class="img-fluid"
                        src="pictures/'.$row['picture'].'">
                    </td>
                ';}
              
          echo'
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
        </div>
      </div>';
  
  mysqli_close($dbc);
?>