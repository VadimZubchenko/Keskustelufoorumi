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

    $name = $_POST['user'];
    $pass = $_POST['password'];

    $s = " select * from users where name = '$username'";

    $result = mysqli_query($conn, $s);

    $num = mysqli_num_rows($result);

    if ($num == 1){
        echo "Username is taken";
    }else{
        $reg = "insert into users(username, password) values ('$name' , '$pass')";
        mysqli_query($conn, $reg);
        echo "Registration successful";
    }
?>