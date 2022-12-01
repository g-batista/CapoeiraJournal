<?php

require_once "authorize.php";
require_once "system.php";
$title = "User Report";
require_once "header.php";

    echo'
    <div class="container d-flex justify-content-center">
    <h4 class="alert alert-danger col-md-4 text-center mt-3">
        <a href="admin.php" class="text-dark">
        &#10132; Admin Path
        </a>
    </h4>
    </div>
    ';

    //selec all from data base
    $data = mysqli_query($dbc,"SELECT * FROM ux ")
        or die('not eable to select data');

    //looping on the query
    while ($report = mysqli_fetch_assoc($data)){

         
        echo'
            <div class="container ">
                <table class="table table-bordered table-responsive-sm">
                    <thead class="thead-dark h5"> 
                        <tr>
                            <th scope="col">Email</th>
                            <th scope="col"> &#35;</th>
                            <th scope="col">Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="table-secondary" scope="row">
                            <td class="col-md-4"> ' . $report['email'] . '</td>
                            <td class="col-md-0"> ' . $report['ex'] . '</td>
                            <td class="col"> ' . $report['text'] . '</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        ';
    }

        mysqli_close($dbc);
?>