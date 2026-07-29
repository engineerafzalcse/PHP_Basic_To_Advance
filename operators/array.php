<?php

echo "<h4>In PHP, operators are symbols used to perform operations on variables and values.</h4>";
echo "<h5>Array Operators : Conditional (Ternary) Operator</h5>";



echo "1. Union : ( + )</br>";
echo "2. Equal ( == )</br>";
echo "3. Identical ( === )</br>";
echo "4. Not equal ( != )</br>";
echo "4. Not identical ( !== )</br>";

echo "</br>";

echo "1. Union : ( + )</br>";

$array1 = [
    "a" => "Apple",
    "b" => "Banana"
    ];
    
$array2 = [
    "b" => "Ball",
    "c" => "Cat"
    ];
    
$result = $array1 + $array2;

print_r($result);
echo "</br>";
        
        
        
echo "2. Equal ( == ) ✅ Same keys, ✅ Same values</br>";

$a = [
    "name"=>"Afzal",
    "age"=>25
    ];
    
$b = [
    "age"=>25,
    "name"=>"Afzal"
    ];
    
var_dump($a == $b);

echo "</br>";
echo "3. Equal ( === ) ✅ Same keys, ✅ Same values, ✅ Same Order, ✅ Same data types</br>";
$a = [
    "name"=>"Afzal",
    "age"=>25
    ];
    
$b = [
    "name"=>"Afzal",
    "age"=>25
    ];
    
var_dump($a === $b);
echo "</br>";
echo "4. Not Equal (!=) ✅ Returns true if arrays are different.</br>";

$a = [
    "name"=>"Afzal"
];

$b = [
    "name"=>"Rahim"
];

var_dump($a != $b);
echo "</br>";
echo "5. Not Identical (!==) . Returns true when. ✅ value differs, ✅ order differs, ✅ type differs</br>";
$a = [
    "name"=>"Afzal",
    "age"=>25
];

$b = [
    "age"=>25,
    "name"=>"Afzal"
];

var_dump($a !== $b);
echo "</br>";
echo "</br>";
echo "==== Equality vs Identity ====";

$a = [
    "x"=>1,
    "y"=>2
];

$b = [
    "y"=>2,
    "x"=>1
];

echo "</br>";
var_dump($a == $b);
echo "</br>";
var_dump($a === $b);





echo "</br></br>(1). Explanation : ==== Start =====</br>";
echo "==</br>";
echo "Checks</br>";
echo "✔ Keys</br>";
echo "✔ Values</br>";
echo "Ignores order</br>";
echo "================</br>";
echo "===</br>";
echo "Checks</br>";
echo "✔ Keys</br>";
echo "✔ Values</br>";
echo "✔ Order</br>";
echo "✔ Type</br>";
echo "</br>End ============= End</br>";
echo "</br>";





echo "(2). Numeric Key Example : ==== Start =====</br>";
echo "</br>";
$a = [10,20];
$b = [30,40];

print_r($a + $b);
echo "</br>";
echo "</br>End ============= End</br>";
echo "</br>";






echo "(3). String Key Example : ==== Start =====</br>";
echo "</br>";
$a = [
    "name"=>"Afzal"
];

$b = [
    "age"=>25
];

print_r($a + $b);
echo "</br>";
echo "</br>End ============= End</br>";
echo "</br>";






echo "(4). Real-life Example : ==== Start =====</br>";
echo "</br>";

$defaultSettings = [
    "theme" => "light",
    "language" => "English"
];

$userSettings = [
    "language" => "Bangla",
    "font" => "Noto Sans"
];

$settings = $defaultSettings + $userSettings;

print_r($settings);
echo "</br>";
echo "</br>End ============= End</br>";
echo "</br>";
echo "</br>";
echo "</br>";


?>