<?php

include("diceclasses.inc.php");

$faces = $_GET["faces"];
$throws = $_GET["throws"];
$bias = $_GET["bias"];
$material = $_GET["material"];

$PhysicalDice = new PhysicalDice($material);
$PhysicalDice->info();

# load array for results
$results = array();

// make dice
$dice = new Dice($faces, $bias);
for ($i = 1; $i<=$throws; $i++) {
    $res = $dice->cast(); # this is where we're taking result of function cast();
    $results[] = array('id' => strval($i), 'res' => strval($res));
}
# load array for freqs;
$freqs = array();
for ($i = 1; $i<=$faces; $i++) {
    $freqs[] = array ('eyes' => strval($i), 'frequency' => strval($dice->getFreq($i)));
}

echo json_encode(array('faces'=>$faces,'results'=>$results,'frequencies'=>$freqs,
    'average' => strval($dice->average()), 'material' =>$PhysicalDice->info($material)));



?>