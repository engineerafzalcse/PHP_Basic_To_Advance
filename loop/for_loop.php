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


// Syntax :
// $result = match ($expression) {
//     value1 => result1,
//     value2 => result2,
//     value3 => result3,
//     default => defaultResult,
// };

echo "<h4>1. for Loop</h4>";
echo "<h5>1 থেকে 5</h5>";


for($i=1; $i<=5; $i++){

    echo $i."<br>";

}

echo "<h5>১০ থেকে ১</h5>";

for($i=10; $i>=1; $i--){

    echo $i."<br>";

}
echo "<h5>Even Number : </h5>";

for($i=1; $i<=10; $i++){

    if($i%2==0){
        echo $i."<br>";
    }

}

for($i=2; $i<=10; $i+=2){
    echo $i."</br>";
}

echo "</br>";
echo "<h5>Multiplication Table : </h5>";
$number = 5;

for($i=1; $i<=10; $i++){

    echo "$number x $i = ".($number*$i)."<br>";

}

echo "<h5>Sum : </h5>";
$sum = 0;
for($i=1; $i<=10; $i++){
    $sum += $i;
}
echo $sum;



echo "</br>";
echo "<h5>Factorial : </h5>";
$fact = 1;

for($i=1; $i<=5; $i++){

    $fact *= $i;

}

echo $fact;

echo "</br>";

?>