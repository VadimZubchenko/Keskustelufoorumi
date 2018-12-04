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
echo "Connected successfully<br><br>";

function selectUserData($table, $where) {
    global $conn;

    $sql = "SELECT * FROM " . $table;
    if (strlen($where) > 0) {
        $sql = $sql . " WHERE " . $where;
    }

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "id: [" . $row["id"]. "] - Name: [" . $row["username"]. "] - Password: [" . $row["password"]. "] - Date joined: [" . $row["date_joined"]. "]<br>";
        }
    } else {
        echo "0 results";
    }
    echo "<br>";
}

function selectData($table, $where) {
    global $conn;

    $sql = "SELECT * FROM " . $table;
    if (strlen($where) > 0) {
        $sql = $sql . " WHERE " . $where;
    }

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            foreach ($row as $k=>$v) {
                echo $k . ": ";
                echo "[" . $v . "] ";
            }
            echo "<br>";
        }
    } else {
        echo "0 results";
    }
    echo "<br>";
}

function selectBottomMessages(&$not) {
    global $conn;

    if (count($not) == 0) {
        $sql = "SELECT * FROM messages ORDER BY id DESC LIMIT 10";
    } else {
        $sql = "SELECT * FROM messages WHERE id NOT IN(" . implode(",", $not) . ") ORDER BY id DESC LIMIT 10";
    }
    echo $sql . "<br>";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            foreach ($row as $k=>$v) {
                echo $k . ": ";
                echo "[" . $v . "] ";
                //Add id to NOT IN list
                if ($k == "id") {
                    array_push($not, $v);
                }
            }
            echo "<br>";
        }
    } else {
        echo "0 results";
    }
    echo "<br>";
}

function insertMessage($username, $message) {
    global $conn;

    $table = "messages";

    echo $username . "<br>";
    echo $message . "<br>";

    $sql = "INSERT INTO " . $table . " (username, password)
    VALUES('" . $username . "', '" . $message . "')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    echo "<br>";
}

/*
function insertUser($name, $password) {
    global $conn;

    $table = "users";

    echo $name . "<br>";
    echo $password . "<br>";

    $sql = "INSERT INTO " . $table . " (username, password)
    VALUES('" . $name . "', '" . $password . "')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    echo "<br>";
}

function deleteUser($username) {
    global $conn;

    $table = "users";

    $sql = "DELETE FROM " . $table . " WHERE username = " . $username;

    if ($conn->query($sql) === TRUE) {
        echo "Record " . $username . " deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    echo "<br>";
}
*/

//SELECT MESSAGES TEST
$not = array();

echo "Select bottom 10 messages:<br>";
selectBottomMessages($not);

echo "Select next 10 messages:<br>";
selectBottomMessages($not);

echo "Select next 10 messages:<br>";
selectBottomMessages($not);

//SELECT BOTTOM 10



//SELECT NEXT BOTTOM 10

//ETC.


/*
//SELECT USER TEST
echo "Select all users:<br>";
selectUserData("users", "");

//INSERT TEST
echo "Insert eki<br>";
insertUser("eki", "veki");
selectUserData("messages", "");

//DELETE TEST
echo "Delete eki<br>";
deleteUser("eki");
selectData("username", "");

//SELECT USER TEST
echo "Select hannu:<br>";
selectUserData("users", "username = 'hannu'");
*/


$conn->close();

?>