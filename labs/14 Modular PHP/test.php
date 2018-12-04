<?php
/**
 * Created by PhpStorm.
 * User: vadimzu
 * Date: 25/11/2018
 * Time: 10.00
 */

function reverse_lines($filename) {
    $text = file_get_contents($filename);
    $lines = explode("\n", $text); # split in lines
    $lines = array_reverse($lines);
    $text = implode("\n", $lines); # connect lines to a single string
    file_put_contents($filename, $text);
}
print file_get_contents("myfile.txt");
reverse_lines("myfile.txt");
print file_get_contents("myfile.txt");
?>