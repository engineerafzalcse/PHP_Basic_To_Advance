<?php

echo "<h4>In PHP, operators are symbols used to perform operations on variables and values.</h4>";
echo "<h5>String Operators.</h5>";


$x = 5;
$y = 10;
echo "1. Concatenation : ( . )</br>";
echo "2. Concatenation assignment ( .= )</br>";

echo "</br>";


echo "Concatenation : ".$x+$y."</br>";

$message = "Hello";

$message .= ", ";
$message .= "Welcome";
$message .= " to";
$message .= " PHP!";
echo "Concatenation assignment : ".$message."</br>";






?>