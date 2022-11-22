<?php

require_once "authorize.php";
require_once "system.php";
$title = "User Report";
require_once "header.php";

    echo'<h4 class="container alert alert-warning col-4 text-center mt-3"><a class="text-dark" href="admin.php">Admin Path</a></h4>';

    //selec all from data base
    $data = mysqli_query($dbc,"SELECT * FROM ux ")
        or die('not eable to select data');

    //looping on the query
    while ($report = mysqli_fetch_assoc($data)){

       
        echo'
            <div class="container d-flex justify-content-center">
                <table class="my-3 table-warning table-bordered border border-danger">
                    <tr class="table-dark">
                        <th class="text-dark" scope="row">email: </th>
                        <td class="text-info"> ' . $report['email'] . '</td>
                    </tr>
                    <tr>
                        <th class="text-dark" scope="row">Experience: </th>
                        <td class="text-info"> ' . $report['ex'] . '</td>
                    </tr>
                    <tr class="table-dark">
                        <th class="text-dark" scope="row">Message: </th>
                        <td class="text-info"> ' . $report['text'] . '</td>
                    </tr></br>
                </table>
            </div>';
    }

        mysqli_close($dbc);
?>