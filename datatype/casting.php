<?php

$price = 500.321;
$price_casting =  (int)$price;

echo "Double to Integer Casting : ".$price_casting."</br>";
var_dump($price_casting);
echo "</br>";
var_dump(is_int($price_casting));
echo "</br>";


$price1 = "542154.1254";
$price_string_to_int = (int)$price1;

echo "String To Integer Casting :".$price_string_to_int."</br>";

?>