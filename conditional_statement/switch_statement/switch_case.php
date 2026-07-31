<?php

// php print type system
echo "<h3>PHP Switch Statement (Complete Guide)</h3>";

echo "<h4>যেহেতু আপনি PHP Backend ও Laravel গভীরভাবে শিখছেন, তাই switch Statement খুবই গুরুত্বপূর্ণ। বিশেষ করে Role Management, Status Management, Order Status, Payment Status, ERP System-এ switch অনেক ব্যবহার হয়।</h4>";

echo "<h4>Example 1</h4>";


$day = "Friday";

switch ($day) {

    case "Saturday":
        echo "Holiday</br>";
        break;

    case "Friday":
        echo "Weekend</br>";
        break;

    default:
        echo "Working Day</br>";
}//end



echo "<h4>Example 2</h4>";

$number = 4;

switch($number){

    case 1:
        echo "One";
        break;

    case 2:
        echo "Two";
        break;

    case 3:
        echo "Three";
        break;

    default:
        echo "Unknown";
}



echo "<h4>Default দি কোনো Case Match না করে</h4>";
$color = "Blue";

switch($color){

    case "Red":
        echo "Red";
        break;

    case "Green":
        echo "Green";
        break;

    default:
        echo "Unknown Color";
}

echo "<h4>Multiple Case একই Code অনেক Case-এর জন্য</h4>";

$day = "Saturday";

switch($day){

    case "Friday":
    case "Saturday":
        echo "Weekend";
        break;

    default:
        echo "Working Day";
}



echo "<h4>Grade System</h4>";

$grade = "A";

switch($grade){

    case "A":
        echo "Excellent";
        break;

    case "B":
        echo "Good";
        break;

    case "C":
        echo "Average";
        break;

    case "D":
        echo "Poor";
        break;

    default:
        echo "Fail";
}//end



echo "<h4>ERP Example</h4>";
$role = "Admin";

switch($role){

    case "Admin":
        echo "Full Access";
        break;

    case "Manager":
        echo "Manage Employees";
        break;

    case "Employee":
        echo "Employee Dashboard";
        break;

    default:
        echo "Access Denied";
}

echo "<h4>বাস্তব Laravel/ERP-এ কোথায় ব্যবহার হয়?</h4>";
echo "✅ User Role (Admin, Manager, Employee)</br>";
echo "✅ Order Status (Pending, Processing, Shipped, Delivered)</br>";
echo "✅ Payment Status (Paid, Unpaid, Refunded)</br>";
echo "✅ Leave Status (Pending, Approved, Rejected)</br>";
echo "✅ Invoice Status (Draft, Sent, Paid, Overdue)</br>";
echo "✅ Ticket Priority (Low, Medium, High)</br>";

echo "</br>End ------------ End</br></br>";




?>