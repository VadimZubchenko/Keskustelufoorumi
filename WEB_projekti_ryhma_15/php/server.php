<?php

    $servername = "localhost";
    $username = "vadimzu";
    $password = "Nadym1971";
    $dbname = "keskustelupalsta";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);



    if (isset($_POST['insert'])) {
        $message = PDO($_POST['text']);


    } else if (isset($POST['select'])) {

    }



?>