<?php

echo "<h3>PHP Arrays (Professional Complete Guide)</h3>";
echo "<h4>Array হলো এমন একটি Data Structure যা একাধিক Value একটি Variable-এর মধ্যে সংরক্ষণ করে।</h4>";


echo "<h4>Array Types : PHP-তে প্রধানত ৩ ধরনের Array রয়েছে। ( Indexed Array, Associative Array, Multidimensional Array )</h4>";
echo "<h4>1 : Array Introduction</h4>";
echo "<h4>2 : Indexed Array</h4>";
echo "<h4>3 : Associative Array</h4>";
echo "<h4>4 : Multidimensional Array</h4>";
echo "<h4>5 : Array Memory</h4>";
echo "<h4>6 : Array Loop</h4>";
echo "<h4>7 : Array Functions (80+)</h4>";
echo "<h4>8 : Array Sorting</h4>";
echo "<h4>9 : Searching</h4>";
echo "<h4>10: CRUD</h4>";
echo "<h4>11: Array & Function</h4>";
echo "<h4>12: Array Destructuring</h4>";
echo "<h4>13: Spread Operator</h4>";
echo "<h4>14: References</h4>";



// Function Declaration / Definition

echo "<h5>Array Declaration Method 1 </h5>";

$fruits = array( // array() function is used to create an array in PHP. It is a built-in function that allows you to define an array and its elements.
    "Apple",
    "Orange",
    "Banana"
);

echo "This is array value : " . $fruits[0] . "<br>"; // Output: This is array value : Apple

echo "<h5>Array Declaration Method 2 (Modern-Modern PHP-এ এটিই ব্যবহার করবেন।) </h5>";
echo "<h5>Chapter 2 : Indexed Array - সবচেয়ে সহজ Array। ( Index শুরু হয় 0 থেকে or (Index is the Memory Location) )</h5>";

$fruits = [
    "Apple",
    "Orange",
    "Banana"
];
$update = $fruits[0] = "Mango"; // Update Array Value
echo "This is array value : " . $fruits[0] . "<br>"; // Output: This is array value : Mango
unset($fruits[0]); // Delete Array Value
$fruits = array_values($fruits);
echo "array value delete : " . $fruits[0] . "<br>"; // Delete Array Value
echo count($fruits); // Count Array Value


echo "</br>";

echo "<h5>Array Loop</h5>";

for($i=0; $i<count($fruits); $i++){

    echo $fruits[$i]."<br>";

}// Output: Mango, Orange, Banana


echo "<h5>Array foreach</h5>";
foreach($fruits as $fruit){

    echo $fruit."<br>";

}// Output: Mango, Orange, Banana

echo "<h5>Chapter 3 : Associative Array - এখানে Number Index নেই। ( নিজের Key থাকে। )</h5>";

$user = [

    "name"=>"Afzal",

    "age"=>25,

    "city"=>"Dhaka"

];
echo $user["city"]."<br>"; // Output: Dhaka
$user["city"] = "Gazipur"; // Update Array Value
echo $user["city"]."<br>"; // Output: Gazipur

foreach($user as $key=>$value){

    echo $key." : ".$value."<br>";

}

echo "<h5>Chapter 4 : Multidimensional Array : Array-এর ভিতরে Array।</h5>";
$students = [

    [

        "name"=>"Rahim",

        "age"=>20

    ],

    [

        "name"=>"Karim",

        "age"=>21

    ]

];

foreach($students as $student){

    echo $student["name"]."<br>";

}

echo "<h4>📘 PHP Array Functions Master Class</h4>";
echo "<h5>Module 1 – Basic Array Functions</h5>";
echo "✅ count(), ✅ sizeof(), ✅ array_push(), ✅ array_pop(), ✅ array_shift(), ✅ array_unshift(). <br>";
echo "<h5>Module 2 – Merge & Split</h5>";
echo "✅ array_merge(), ✅ array_merge_recursive(), ✅ array_combine(), ✅ array_chunk(), ✅ array_slice(), ✅ array_splice(). <br>";
echo "<h5>Module 3 – Search Functions</h5>";
echo "✅ in_array(), ✅ array_search(), ✅ array_keys(), ✅ array_values(). <br>";
echo "<h5>Module 4 – Filter & Transform</h5>";
echo "✅ array_filter(), ✅ array_map(), ✅ array_walk(), ✅ array_reduce(). <br>";
echo "<h5>Module 5 – Sorting</h5>";
echo "✅ sort(), ✅ rsort(), ✅ asort(), ✅ arsort(), ✅ ksort(), ✅ krsort(), ✅ usort(). <br>";
echo "<h5>Module 6 – Advanced</h5>";
echo "✅ Spread Operator (...), ✅ Array Destructuring, ✅ References, ✅ Performance, ✅ Laravel Collections Comparison. <br>";


echo "</br>";
echo "</br>";


?>