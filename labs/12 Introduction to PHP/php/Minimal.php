
<?php



$names = array("Arja", "Leo", "Aleksi", "Aino",
 "Sari", "Teemu", "Heikki", "Inga", "Maltti");

$arrlenght = count($names);

for ($i=1; $i<$arrlenght; $i++){
    echo $names[$i];
    echo "<br>";

}

$a[] = "Anna";
$a[] = "Arja";
$a[] = "Leo";
$a[] = "Aleksi";
$a[] = "Aino";
$a[] = "Sari";
$a[] = "Teemu";
$a[] = "Heikki";
$a[] = "Inga";
$a[] = "Maltti";
$a[] = "Kirsi";
$a[] = "Laila";
$a[] = "Nina";
$a[] = "Orvokki";
$a[] = "Pekka";
$a[] = "Amanda";
$a[] = "Raimo";
$a[] = "Sirpa";
$a[] = "Liisa";
$a[] = "Erkki";
$a[] = "Aimo";
$a[] = "Risto";
$a[] = "Markku";
$a[] = "Peppi";
$a[] = "Visa";
$a[] = "Elisa";
$a[] = "Eila";
$a[] = "Ellen";
$a[] = "Valtti";
$a[] = "Vihtori";

foreach ($a as $name) {
    echo $name;
    echo "<br>";
}
    function area($radius, $pie) {
        $circleArea = pow($radius,2)*$pie;
        return $circleArea;
    }
    echo "The area of Circle is = ".area(5,3.1416);


?>