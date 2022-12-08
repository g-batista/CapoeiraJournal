<?php

require_once "authorize.php";
require_once "system.php";
$title = "User Report";
require_once "header.php";

    echo'
    <div class="container text-center">
        <h4 class=" container alert alert-danger col-md-4 text-center mt-3 border border-dark border-2">
            <a href="admin.php" class="text-dark">
            &#10132; Admin Path
            </a>
        </h4>
    </div>';

    // SELECT * FROM `ux` ORDER BY id DESC
    //selec all from data base
    $data = mysqli_query($dbc,"SELECT * FROM ux ORDER BY id DESC")
        or die('not eable to select data');

    //looping on the query
    while ($report = mysqli_fetch_assoc($data)){

         
        echo'
            <div class="container">
            <div class="table-responsive-sm">
                <table class="table table-bordered border border-dark border-2">
                    <thead class="h5 table-success "> 
                        <tr>
                            <th scope="col">Email</th>
                            <th scope="col">&#35;</th>
                            <th scope="col">Message</th>
                            <th scope="col">date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="table-secondary" scope="row">
                            <td class="col-4"> ' . $report['email'] . '</td>
                            <td class="col-1"> ' . $report['ex'] . '</td>
                            <td class="col"> ' . $report['text'] . '</td>
                            <td class="col-2 text-danger table-danger"> ' . $report['date'] . '</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            </div>

        ';
    }

        mysqli_close($dbc);
?>