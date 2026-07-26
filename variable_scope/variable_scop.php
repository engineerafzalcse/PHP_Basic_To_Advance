<?php

echo "<h3>PHP Variable Scope (local, global, static, Parameter Scope)</h3>";


echo "<h3>Local Variable Scope</h3>";
function getAddress() { // function declaration

// function
// function name
// function header
// function body

    $x = 5; // Local variable Scope
    echo "Inside function: x = $x<br>";
}

getAddress(); // Call the function



echo "<h3>Global Variable Scope</h3>";
// Global variable/scope
$person_name = "John Doe"; // Global variable
$person_fb = "https://www.facebook.com/johndoe"; // Global variable

function displayPersonInfo() {
    global $person_name, $person_fb; // Accessing global variables
    echo "Name: $person_name<br>";
    echo "Facebook: $person_fb<br>";
}

displayPersonInfo(); // Call the function


echo "<h3>Static Variable Scope</h3>";
function displayCount() {
    static $count = 0; // Static variable
    $count++;
    echo "Function called $count times<br>";
}

displayCount();
displayCount();
displayCount();

echo "<h3>Parameter Scope</h3>";
// function displayInfo($name, $fb) {
//     echo "Name: $name<br>";
//     echo "Facebook: $fb<br>";
// }

// displayInfo("Jane Doe", "https://www.facebook.com/janedoe");

?>