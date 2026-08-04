<?php
echo "<h3>PHP Loop (Complete Guide)</h3>";

echo "<h4>Loop হলো এমন একটি Control Structure যা একই কাজ বারবার (Repeatedly) করতে ব্যবহার করা হয়, যতক্ষণ না নির্দিষ্ট Condition False হয়।</h4>";
echo "<h4>PHP-তে কত ধরনের Loop আছে?</h4>";

echo "<h4>PHP-তে 4 ধরনের Loop আছে।</h4>";
echo "<h5>1. for Loop</h5>";
echo "<h5>2. while Loop</h5>";
echo "<h5>3. do...while Loop</h5>";
echo "<h5>4. foreach Loop</h5>";
echo "<h5>এছাড়াও : break, continue, nested loop এগুলিও Loop-এর গুরুত্বপূর্ণ অংশ।</h5>";
echo "</br>";
echo "<h4>Loop কিভাবে কাজ করে? : প্রতিটি Loop মূলত ৩টি বিষয়ের উপর কাজ করে।</h4>";
echo "<h5>১. Initialization</h5>";
echo "<h5>২. Condition</h5>";
echo "<h5>৩. Increment / Decrement</h5>";



echo "<h4>2. while Loop : Condition আগে Check করে।</h4>";

$i = 1;
while($i <= 5){
    echo $i."<br>";
    $i++;
}

$i = 10;
while($i >= 1){
    echo $i."<br>";
    $i--;
}

echo "1 থেকে 5 পর্যন্ত Even Number : </br>";

$i = 2;
while($i <= 10){
    if($i%2==0){
        echo $i."<br>";
    }
    $i++;
}

echo "</br>";
echo "1 থেকে 10 পর্যন্ত Odd Number : </br>";
$i = 1;
while($i <= 10){
    if($i%2!=0){
        echo $i."<br>";
    }
    $i++;
}

echo "</br>";
echo "<h5>Multiplication Table : </h5>";
$number = 5;
$i = 1;
while($i <= 10){
    echo "$number x $i = ".($number*$i)."<br>";
    $i++;
}

echo "</br>";
echo "<h5>Laravel-এ Loop কোথায় ব্যবহার হয়?</h5>";
echo "✅ Users List</br>";
echo "✅ Product List</br>";
echo "✅ Orders</br>";
echo "✅ Invoice Items</br>";
echo "✅ API Response</br>";
echo "✅ Database Records</br>";
echo "✅ Eloquent Collection</br>";
echo "✅ Blade Templates (@foreach, @for, @while)</br>";


?>