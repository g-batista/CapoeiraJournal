<?php

require_once "authorize.php";
require_once "system.php";
$title = "User Report";
require_once "header.php";

    echo'<h4 style="text-align:center; color: FFEB3B"><a href="admin.php">Admin Path</a></h4>';

    //selec all from data base
    $data = mysqli_query($dbc,"SELECT * FROM ux ")
        or die('not eable to select data');

    //looping on the query
    while ($report = mysqli_fetch_assoc($data)){

       
        echo'<div>';
        echo '<table id="table">';
        echo '<tr><td class="label">email:</td><td>' . $report['email'] . '</td></tr>';
        echo '<tr><td class="label">Experience:</td><td>' . $report['ex'] . '</td></tr>';
        echo '<tr><td class="label">Text:</td><td>' . $report['text'] . '</td></tr></br>';
        echo '</table>';
    
        echo'</div>';
    }

        mysqli_close($dbc);


        
        




?>