<?php
/**
 * Created by PhpStorm.
 * User: kamaj
 * Date: 26.11.2018
 * Time: 14:50
 */
$servername = "localhost";
$username = "superuser";
$password = "XXXXXX";

$startDate = $_GET["start"]; // prefix for placeName = "
$endDate = $_GET["end"];
//$startDate = "2018-05-30";
//$endDate = "2018-07-31";
// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

$db_selected =  $conn->select_db("wheretogo_db");
if (!$db_selected) {
    //echo 'Cant use : '.$db_selected.' error:'. mysqli()->error;
}
else
    /* echo "\nCan use database $db_selected"  */;

/*$sql = "DESCRIBE location";

if ($conn->query($sql) === TRUE) {
    echo "query run successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
} */
//and event_date.Date >= '$startDate' and event_date.Date <= '$endDate'

$sql = <kysely>;

if(!$result = $conn->query($sql)){
    die('There was an error running the query [' . $conn->error . ']');
}

// echo '<br/>Total results: ' . $result->num_rows;

//create an array
$placeArray = array();
while($row = $result->fetch_assoc()){
    /*echo '<br />'.$row['Location_place_name'] . '<br />';
    echo $row['Street_address'] . '<br />';
    echo $row['City'].'<br />';
    echo $row['Zip'].'<br />';
    echo $row['Country'].'<br />'; */
    $placeArray[] = $row;
}

$resultArray = array('numOfRows'=>strval($result->num_rows),'rows'=>$placeArray);


echo json_encode($resultArray);
?>