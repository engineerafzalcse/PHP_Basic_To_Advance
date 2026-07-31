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

echo "4. Nested if (if-এর ভিতরে আবার if।)</br>";


$age = 25;
$citizen = true;

if($age >=18){

    if($citizen){

        echo "Eligible</br>";

    }

}//end

$username = "admin";
$password = "123456";

if($username=="admin"){

    if($password=="123456"){

        echo "Login Success</br>";

    }else{

        echo "Wrong Password</br>";

    }

}else{

    echo "User Not Found</br>";

}



echo "</br>End ------------ End</br></br>";
?>