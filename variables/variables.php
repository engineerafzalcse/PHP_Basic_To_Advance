<?php

    $name = "Md. Afzal Hossen"; // This is a String variable
    $age = 25; // This is an Integer variable
    $salary = 50000.50; // This is a Float variable
    $isAdmin = true; // This is a Boolean variable
    $fruits = array("Mango", "Banana", "Apple"); // This is an Array variable
    $colors = ["Red", "Green", "Blue"]; // This is another way to declare an Array variable
    $string = "Hello, World!"; // This is a String variable

    echo "Name: " . $name . "<br>";
    printf("Name: %s<br>", $name); // printf() = একটি String-কে Format করে Output দেয়।
    echo "Age: " . $age . "<br>";  
    echo "Salary: " . $salary . "<br>";
    echo "Is Admin: " . ($isAdmin ? "Yes" : "No") . "<br>";
    echo "Fruits: " . implode(", ", $fruits) . "<br>"; // array elements are joined into a string using implode() function
    echo "Colors: " . implode(", ", $colors) . "<br>";  // implode() = একটি Array-কে জোড়া লাগিয়ে String বানায়।
    echo "String: " . explode(", ", $string)[0] . "<br>"; // array elements are split into an array using explode() function
    $array = explode(", ", $string); //  explode() = একটি String-কে ভেঙে Array বানায়।
    print_r($array); // Output: Array ( [0] => Hello [1] => World! )
    echo "<br>Check Variable Type Use gettype() Function<br><br>";    
    echo gettype($name) . "<br>"; // Output: string
    echo gettype($age) . "<br>"; // Output: integer
    echo gettype($salary) . "<br>"; // Output: double
    echo gettype($isAdmin) . "<br>"; // Output: boolean
    echo gettype($fruits) . "<br>"; // Output: array
    echo gettype($colors) . "<br>"; // Output: array

    echo "<br>Or use type-checking functions:<br><br>";    
    echo is_string($name) ? "Name is a string<br>" : "Name is not a string<br>";
    echo is_int($age) ? "Age is an integer<br>" : "Age is not an integer<br>";
    echo is_float($salary) ? "Salary is a float<br>" : "Salary is not a float<br>";
    echo is_bool($isAdmin) ? "Is Admin is a boolean<br>" : "Is Admin is not a boolean<br>";
    echo is_array($fruits) ? "Fruits is an array<br>" : "Fruits is not an array<br>";
    echo is_array($colors) ? "Colors is an array<br>" : "Colors is not an array<br>";


    // 6. gettype = return the type of a variable as a string
    // 7. settype = set the type of a variable
    // 8. is_string = check if a variable is a string
    // 9. is_int = check if a variable is an integer
    // 10. is_float = check if a variable is a float
    // 11. is_bool = check if a variable is a boolean
?>