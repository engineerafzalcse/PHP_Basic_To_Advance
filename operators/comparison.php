<?php

echo "<h4>In PHP, operators are symbols used to perform operations on variables and values.</h4>";
echo "<h5>Comparison Operators: Compare two values.</h5>";

echo "1. Equal : ( == )</br>";
echo "2. Identical (value and type) : ( === )</br>";
echo "3. Not equal : ( != or <> )</br>";
echo "4. Not identical : ( !== )</br>";
echo "5. Greater than : ( > )</br>";
echo "6. Less than : ( < )</br>";
echo "8. Less than or equal : ( <= )</br>";
echo "7. Greater than or equal : ( >= )</br></br>";

$a = 10;
$b = 3;
echo "Equal ( a == b ) : </br>";
var_dump($a==$b);
echo "</br>";

echo "Identical (value and type) ( a === b ) : </br>";
var_dump($a===$b);
echo "</br>";

echo "Not equal ( != or <> ) : </br>";
var_dump($a!=$b);
echo "</br>";

echo "Not identical ( != or <> ) : </br>";
var_dump($a!=$b);
echo "</br>";

echo "Greater than ( a > b ) : </br>";
var_dump($a>$b);
echo "</br>";

echo "Less than ( a < b ) : </br>";
var_dump($a<$b);
echo "</br>";

echo "Greater than or equal ( a >= b ) : </br>";
var_dump($a>=$b);
echo "</br>";

echo "Less than or equal ( a <= b ) : </br>";
var_dump($a<=$b);
echo "</br>";









?>