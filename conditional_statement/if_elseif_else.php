<?php


echo "<h3>PHP Conditional Statements (Full Guide)</h3>";

echo "<h4>Types of Conditional Statements : </h4>";
echo "1. if</br>";
echo "2. if...else</br>";
echo "3. if...elseif...else</br>";
echo "4. Nested if</br>";
echo "5. Short Hand if</br>";
echo "6. Ternary Operator</br>";
echo "7. Null Coalescing Operator</br></br>";

echo "3. if...elseif...else Statement</br>";
// if(){

// }
// elseif(){

// }
// elseif(){

// }
// else{

// }

$marks = 75;

if($marks >=80){

    echo "A+</br>";

}
elseif($marks >=70){

    echo "A</br>";

}
elseif($marks >=60){

    echo "A-</br>";

}
elseif($marks >=50){

    echo "B</br>";

}
else{

    echo "Fail</br>";

}



$day = "Friday";

if($day=="Saturday"){

    echo "Holiday</br>";

}
elseif($day=="Friday<>"){

    echo "Weekend</br>";

}
else{

    echo "Working Day</br>";

}
echo "</br>End ------------ End</br></br>";
?>