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



echo "<h4>📘 PHP Array Functions Master Class</h4>";
echo "<h5>Module 1 – Basic Array Functions</h5>";
echo "✅ count(), ✅ sizeof(), ✅ array_push(), ✅ array_pop(), ✅ array_shift(), ✅ array_unshift(). <br>";



echo "count()  কী কাজ করে? ( একটি Array-এর মধ্যে মোট কয়টি element আছে তা বের করে। )</br>";
$fruits = ["Apple", "Orange", "Banana"]; // Indexed Array
$total = count($fruits); // Count Array Value
echo "Total Fruits : " . $total . "<br></br>"; // Output: Total Fruits : 3



echo "count() দিয়ে Loop</br></br>";
for($i=0; $i<$total; $i++){ // Loop through the array using count() to determine the number of iterations
    echo "Fruit : " . $fruits[$i] . "<br>"; // Output: Fruit : Apple, Fruit : Orange, Fruit : Banana                                                                                    
}


echo "<h3>2. sizeof() : sizeof() মূলত count()-এর একটি alias। ( count() and sizeof() দুটিই Array-এর element count করার জন্য ব্যবহার করা যায়। )</h3>";
echo "=> তাহলে কোনটি ব্যবহার করবেন?  আমি recommend করব count() কারণ এটি PHP code-এ বেশি প্রচলিত এবং দেখলেই বোঝা যায় যে আপনি element count করছেন। </br>";




echo "<h3>3. array_push() : এটি Array-এর শেষে এক বা একাধিক নতুন element যোগ করে।</h3>";

$fruit = ["Apple", "Mango"]; // Indexed Array

array_push($fruit, "Banana"); // Add a new element "Banana" to the end of the $fruit array

print_r($fruit); // Output: Array ( [0] => Apple [1] => Mango [2] => Banana )
echo "</br></br>একসাথে একাধিক Item যোগ </br>";

$fruits = ["Apple"];

array_push( // Add multiple new elements to the end of the $fruits array
    $fruits,
    "Mango",
    "Banana",
    "Orange"
);

print_r($fruits); // Output: Array ( [0] => Apple [1] => Mango [2] => Banana [3] => Orange )

echo "<h3>গুরুত্বপূরণ: [] বনাম array_push() : অনেক সময় আপনি দেখবেন: </h3>";
echo "=> তবে, [],  এটি array_push() এর চেয়ে দ্রুত। কারণ array_push() একটি function call এবং এটি কিছু overhead তৈরি করে। তাই যদি আপনি শুধুমাত্র একটি element যোগ করতে চান, তবে [] ব্যবহার করা उचित। </br>";

// $fruits[] = "Banana"; // This is a shorthand way to add a new element to the end of the $fruits array. It is faster than using array_push() because it does not involve a function call and has less overhead.
// array_push($fruits, "Banana", "Orange", "Mango"); // This is a more explicit way to add multiple new elements to the end of the $fruits array. It is slower than using [] because it involves a function call and has more overhead.

echo "<h3>4. array_pop() : এটি Array-এর শেষ element Remove করে।</h3>";

$fruits = [
    "Apple",
    "Mango",
    "Banana"
];

array_pop($fruits); // Remove the last element "Banana" from the $fruits array

print_r($fruits); // Output: Array ( [0] => Apple [1] => Mango )
echo "<h4>array_pop() কী Return করে?</h4>";
echo "এটি যে element Remove করে, সেটিই return করে।</br>";
echo "<h4>5. array_shift() : array_shift() Array-এর প্রথম element Remove করে।</h4>";
$fruits = [
    "Apple",
    "Mango",
    "Banana"
];

array_shift($fruits);

print_r($fruits); // Output: Array ( [0] => Mango [1] => Banana )
echo "<h4>6. array_unshift() : এটি Array-এর শুরুতে এক বা একাধিক নতুন element যোগ করে।</h4>";
$fruits = ["Banana"];

array_unshift(
    $fruits,
    "Apple",
    "Mango",
    "Orange"
);

print_r($fruits);

echo "<h4>একটি Complete Example</h4>";

$products = [
    "Keyboard",
    "Mouse",
    "Monitor"
];

echo "Total: " . count($products) . "<br>";

array_push($products, "Webcam");

echo "After Push:<br>";
print_r($products);

echo "<br>";

$lastProduct = array_pop($products);

echo "Removed Last: " . $lastProduct . "<br>";

$firstProduct = array_shift($products);

echo "Removed First: " . $firstProduct . "<br>";

array_unshift($products, "Laptop");

echo "Final Products:<br>";
print_r($products);


echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
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