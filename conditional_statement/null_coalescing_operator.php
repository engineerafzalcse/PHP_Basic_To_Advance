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

echo "7. Null Coalescing Operator (??)</br>";


$username = $_GET['username'] ?? "Guest";

echo "</br>".$username."</br>";   // যদি $_GET['username'] না থাকে, তাহলে "Guest" দেখাবে।



// Empty() Condition
$name = "";
if(empty($name)){
    echo "Empty</br>";
}//end


echo "isset()";
if(isset($_POST['email'])){
    echo "Found</br>";
}

echo "✅ User Role (Admin, Manager, Employee)</br>";
echo "✅ Order Status (Pending, Processing, Shipped, Delivered)</br>";
echo "✅ Payment Status (Paid, Unpaid, Refunded)</br>";
echo "✅ Leave Status (Pending, Approved, Rejected)</br>";
echo "✅ Invoice Status (Draft, Sent, Paid, Overdue)</br>";
echo "✅ Ticket Priority (Low, Medium, High)</br>";

echo "</br>End ------------ End</br></br>";
?>
