<?php

echo "<h4>Basic Math Functions (abs(), max(), min(), pow(), sqrt(), hypot()</h4>";

$max_number = [1,2,3,4,5,6,7,8,9];

echo "This is Max Number : ".max($max_number)."</br>";
echo "This is min Number : ".min($max_number)."</br>";


$negative_number = -15365.254;


echo "This is Absolute Value : ".abs($negative_number); // abs is view Absolute Value

// Rounding Functions
echo "<h5>Rounding Functions : (round(), ceil(), floor())</h5>";
echo "Round Number is : ".round($negative_number)."</br>"; // Round করবে
echo "উপরের পূর্ণসংখ্যা ".$negative_number." : ".ceil($negative_number)."</br>"; // উপরের পূর্ণসংখ্যা
echo "নিচের পূর্ণসংখ্যা ".$negative_number." : ".floor($negative_number)."</br>"; // নিচের পূর্ণসংখ্যা

// Random Functions
echo "<h5>Random Functions : (rand(), mt_rand(), random_int())</h5>";

$pass_min = 2000;
$pass_max = 9000;

echo "Random Password is : ".rand($pass_min, $pass_max)."</br>"; //Random Number
echo "Faster Random Number : ". mt_rand(1,100)."</br>"; //Faster Random Number
echo "Secure Random Number : ".random_int(1,100)."</br>"; //Secure Random Number



echo "This is Square Root 64 : ".sqrt(64)."</br>"; // Square Root
echo "this is power number (2,3) : ".pow(2,3)."</br>";



?>