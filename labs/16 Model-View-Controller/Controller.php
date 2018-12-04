<?php
/**
 * Created by PhpStorm.
 * User: vadimzu
 * Date: 26/11/2018
 * Time: 17.42
 */

class Controller
{
    private $model;

    public function __construct() {
        $this->model = new Model();
    }

    public function list_it() {
        $this->messages = $this->model->messages();
        include("View.php");
    }

    public function send() {
        $this->model->add_message($_POST["message"],$_POST["nickname"]);
        header("Location: Chat.php?action=list_it");
    }
}
?>