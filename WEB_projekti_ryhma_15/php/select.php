<?php

    $servername = "localhost";
    $username = "root";
    $password = "Korhonen10";
    $dbname = "keskustelupalsta";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = $_REQUEST["q"];

    $hint = [];

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $hint[] = $row;
        }
    } else {
        //echo "0 results";
    }

    echo json_encode($hint);

?>