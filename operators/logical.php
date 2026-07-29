<?php

echo "<h4>In PHP, operators are symbols used to perform operations on variables and values.</h4>";
echo "<h5>Logical Operators: Used to combine conditions.</h5>";

echo "1. AND : ( && )</br>";
echo "2. NOT ( ! )</br>";
// echo "3. AND : ( and )</br>";
echo "4. OR : ( or )</br>";
echo "5. OR : ( || )</br>";
echo "6. Exclusive OR : ( xor )</br>";
echo "</br>";



$x = 5;
$y = 10;
echo "x = ".$x." and "."y = ".$y."</br>";
echo "</br>";
if ($x < 10 && $y > 5) {
    echo "low : $x < 10 && $y > 5</br>";
    echo "True</br>";
    }

if ($x != $y) {
    echo "low : $x != $y </br>";
    echo "True</br>";
}

if ($x || $y) {
    echo "low : $x || $y </br>";
    echo "True</br>";
}










?>