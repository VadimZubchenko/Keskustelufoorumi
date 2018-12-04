<?php
/**
 * Created by PhpStorm.
 * User: vadimzu
 * Date: 26/11/2018
 * Time: 17.50
 */
include("Model.php");
include("Controller.php");

$controller = new Controller();
if (isset($_GET["action"])) {
    $action = $_GET["action"];
} else {
    $action = "list_it";
}
$controller->$action();

?>