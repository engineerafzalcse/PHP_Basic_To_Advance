<?php

$number = -50;

echo ($number > 0) ? "Positive" : "Negative";
echo "</br>";

echo "<h5>Multiple Conditions (Nested Ternary)</h5>";



$marks = 85;

$result = ($marks >= 80) ? "A+" : (($marks >= 60) ? "A" : (($marks >= 33) ? "Pass" : "Fail"));

echo "Your Result is : ".$result."</br>";


echo "<h5>Comparing Three Values (Nested)</h5>";


$a = 10;
$b = 20;
$c = 30;

$largest = ($a > $b)
                ? (($a > $c) ? $a : $c)
                : (($b > $c) ? $b : $c);

echo $largest;

?>