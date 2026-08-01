<?php

echo "<h3>PHP 8 Match Expression (Complete Guide)</h3>";

echo "<h4>দারুণ প্রশ্ন। PHP 8-এর match Expression হলো switch-এর আধুনিক (Modern), নিরাপদ (Safe) এবং আরও সংক্ষিপ্ত (Concise) বিকল্প। Laravel 9/10/11 এবং আধুনিক PHP Project-এ এটি অনেক ব্যবহৃত হয়।</h4>";
echo "<h4>match হলো PHP 8-এ যোগ হওয়া একটি Expression, যা একটি Value-এর সাথে একাধিক Case মিলিয়ে একটি Result Return করে। switch-এর মতো দেখালেও match অনেক বেশি নিরাপদ এবং কম কোডে একই কাজ করা যায়।</h4>";


// Syntax :
// $result = match ($expression) {
//     value1 => result1,
//     value2 => result2,
//     value3 => result3,
//     default => defaultResult,
// };

echo "<h4># Example 1 :</h4>";


$day = "Friday";

$message = match ($day) {

    "Saturday" => "Holiday",

    "Friday" => "Weekend",

    default => "Working Day"

};

echo $message;

echo "<h4># Example 2 :</h4>";

$number = 4;

$result = match($number){

    1 => "One",

    2 => "Two",

    3 => "Three",

    default => "Unknown"

};

echo "This Number is ($number) : ".$result."</br>";

echo "<h4># Multiple Values : একই Result অনেক Value-এর জন্য</h4>";

$day = "Saturday";

echo match($day){
    "Friday","Saturday" => "Weekend",
    default => "Working Day"
};//end


echo "<h4># Grade System</h4>";

$grade = "a";

echo match($grade){

    "A", "a" => "Excellent",
    "B", "b" => "Good",
    "C", "c" => "Average",
    "D", "d" => "Poor",
    default => "Fail"
};


// User Role Start
echo "<h4># User Role</h4>";
$role = "Employee";

$permission = match($role){
    "Admin" => "Full Access",
    "Manager" => "Manager Employess",
    "Employee" => "Employee Dashboard",
    default => "Access Denied"
};

echo "Welcome To ".$permission." Panel!</br>";



// Order Stauts Start
echo "<h4># Order Status</h4>";
$status = "Pending";
$message = match($status){
    "Pending" => "Waiting",
    "Processing" => "Preparing",
    "Shipped" => "Courier",
    "Delivered" => "Completed",
    default => "Unknown!"
};

echo "Your Order Status : ".$message."</br>";

// Payment Status Start
echo "<h4># Payment Status</h4>";

$status = "Paid";
echo match($status){
    "Paid" => "Payment Successful",
    "Unpaid" => "Payment Pending",
    "Cancelled" => "Payment Cancelled",
    default => "Unknown"
};


// Array-এর সাথে
echo "<h4># Array-এর সাথে</h4>";

$status = 2;

$data = [
    1 => "Pending",
    2 => "Approved",
    3 => "Rejected"
];

echo match($status){
    1 => $data[1],
    2 => $data[2],
    3 => $data[3],
    default => "Unknown"
};//end

// API Response

// return response()->json([

//     'message' => match($status){

//         200 => 'Success',

//         404 => 'Not Found',

//         500 => 'Server Error',

//         default => 'Unknown'

//     }

// ]);






echo "<h4># Strict Comparison : কারণ Switch == ব্যবহার করে (Loose Comparison)।</h4>";
echo "<h4># Strict Comparison : কারণ Match === ব্যবহার করে (Strict Comparison)।</h4>";
echo "<h4># কখন Match ব্যবহার করবেন? : ✅ Fixed Value Matching</h4>";

echo "✅ Role</br>";
echo "✅ Status</br>";
echo "✅ Month</br>";
echo "✅ Country</br>";
echo "✅ Payment</br>";
echo "✅ Order</br>";
echo "✅ Grade</br>";
echo "✅ Permission</br>";

echo "</br>End ------------ End</br></br>";

?>