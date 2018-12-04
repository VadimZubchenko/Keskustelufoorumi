<?php

    session_start();

    $servername = "localhost";
    $username = "vadimzu";
    $password = "Nadym1971";
    $dbname = "keskustelupalsta";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $name = $_POST['username'];
    $pass = $_POST['password'];

    //$s = " select * from users where username = '$username' && password = '$pass'";
    $s = "SELECT * FROM users where username = '" . $name . "' AND password = '" . $pass . "'";

    $result = mysqli_query($conn, $s);

    $num = mysqli_num_rows($result);

    if ($num == 1){
        header('location:forum.php'); // pitäis vissii olla php sivu
    }else{
        header('location:index.php');// pitäis vissii olla php sivu

    }


?>