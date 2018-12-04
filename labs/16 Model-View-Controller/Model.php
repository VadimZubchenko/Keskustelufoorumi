<?php
/**
 * Created by PhpStorm.
 * User: vadimzu
 * Date: 26/11/2018
 * Time: 17.37
 */

class Model
{
    private $file = "messages.txt";


    public function messages() {
        if (file_exists($this->file)) {
            return file($this->file);
        } else {
            return array();
        }
    }

    public function add_message($message, $nickname) {

        if ($nickname == null) {
            $name = $_COOKIE['firstname'];
            $message = $name.": ". $message." ".date("H:i:s: ");
            file_put_contents($this->file, "{$message}\n", FILE_APPEND);
        }else {
            $message = $nickname. ": ". $message. " ". date("H:i:s: ") ;
            file_put_contents($this->file, "{$message}\n", FILE_APPEND);
            # set nickname very first time, then use it, till a new name
            setcookie("firstname", $nickname);
        }

    }



}
?>