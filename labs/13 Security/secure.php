<?php

/** onmouseover attributes that a mischievous user may abuse when posting text */


/**  notice \-sign before double quotes! fake method onmouseover="/f()/" */
$string = "'I'll \"walk\" the <b style='background: red' onmouseover=alert('Wufff!')>dog</b> now";


$d = strip_tags($string,'<b>');
$c = htmlspecialchars($d,ENT_QUOTES);
$b = html_entity_decode($c,ENT_XML1 | ENT_HTML401);

echo $b;



?>
