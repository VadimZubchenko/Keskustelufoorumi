<?php

    $servername = "localhost";
    $username = "root";
    $password = "Korhonen10";
    $dbname = "keskustelupalsta";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);



    if (isset($_POST['insert'])) {
        $message = PDO($_POST['text']);


    } else if (isset($POST['select'])) {

    }



?>