<?php

echo "<h3>PHP Function (Complete Bangla Guide)</h3>";
echo "<h4>Function হলো একটি পুনঃব্যবহারযোগ্য (Reusable) কোডের ব্লক, যা একটি নির্দিষ্ট কাজ (Task) সম্পন্ন করার জন্য একবার লিখে প্রয়োজনে যতবার ইচ্ছা ব্যবহার করা যায়।</h4>";


echo "<h4>PHP-তে Function কিভাবে কাজ করে?</h4>";
echo "<h4>১. Function Declaration / Definition</h4>";
echo "<h4>২. Function Call / Invoke</h4>";
echo "<h4>৩. Function Parameters / Arguments</h4>";
echo "<h4>৪. Function Return Value</h4>";
echo "<h4>৫. Variable Scope</h4>";
echo "<h4>৬. Function Recursion</h4>";
echo "<h4>৭. Anonymous Function / Closure</h4>";
echo "<h4>৮. Arrow Function</h4>";
echo "<h4>৯. Built-in Function</h4>";
echo "<h4>১০. User-defined Function</h4>";
echo "<h4>১১. Variable Function</h4>";
echo "<h4>১২. Function Overloading</h4>";
echo "<h4>১৩. Function Overriding</h4>";
echo "<h4>১৪. Function Composition</h4>";
echo "<h4>১৫. Function Currying</h4>";
echo "<h4>১৬. Function Memoization</h4>";
echo "<h4>১৭. Function Chaining</h4>";
echo "<h4>১৮. Function Decorators</h4>";


// Function Declaration / Definition
echo "<h5>১. Function Declaration / Definition</h5>";
function showName(){

    echo "Afzal</br>";

}

showName(); // Function Call






echo "<h5>৩. Function Parameters / Arguments ( Parameter মানে Input। )</h5>";

function greet($name){

    echo "Hello ".$name;

}

greet("Afzal");










echo "<h5># Multiple Parameters</h5>";

function add($a,$b){

    echo $a+$b;

}

add(5,10);








echo "<h5># Return Version</h5>";

function multiply($a,$b){

    return $a*$b;

}

$result = multiply(5,10);
echo $result;



echo "<h5># Default Parameter</h5>";

function greetUser($name="Guest"){

    echo "Hello ".$name."</br>";

}

greetUser(); // Uses default parameter
greetUser("Afzal"); // Overrides default parameter






echo "<h5># Type Declaration (PHP 7+)</h5>";
function addNumbers(int $a, int $b) {

    return $a + $b;

}

$result = addNumbers(5, 10);
echo $result;

echo "<h5># Return Type</h5>";

function addTwoNumbers(int $a,int $b):int{ // Return type declaration

    return $a+$b; // Return type is int

}


function name():string{ // Return type declaration

    return "Afzal"; // Return type is string

}


function active():bool{ // Return type declaration

    return true; // Return type is bool

}

function listUsers():array{ // Return type declaration

    return ["A","B"]; // Return type is array

}

echo "<h5># Variable Scope (local, global, static, Parameter Scope)</h5>";
echo "<h5># local Variable Scope ( শুধু Function-এর ভিতরে থাকবে। )</h5>";

function localVariable(){ // Function-এর ভিতরে local variable

    $a=10; // Local variable
    echo "Local Variable Scope: ".$a."</br>"; // Local variable can be accessed only inside the function

}

localVariable();



echo "<h5># Global Variable Scope ( সব জায়গা থেকে Access করা যায় (তবে Function-এর ভিতরে সরাসরি নয় )</h5>";

$name="Afzal";

function test(){ // Function-এর ভিতরে global variable access করতে হলে global keyword ব্যবহার করতে হবে

    global $name; // Global variable can be accessed inside the function using global keyword

    echo "Global Variable Scope: ".$name."</br>"; // Global variable can be accessed inside the function using global keyword

}

test();


echo "<h5># Static Variable Scope ( শুধু Function-এর ভিতরে থাকবে এবং Function-এর ভিতরে মান রিসেট হবে না )</h5>";

function staticVariable(){ // Function-এর ভিতরে static variable

    static $a=10; // Static variable
    echo "Static Variable Scope: ".$a."</br>"; // Static variable can be accessed only inside the function
    $a++; // Increment the static variable

}

staticVariable();
staticVariable();
staticVariable();


echo "<h5># Anonymous Function </h5>"; // Anonymous function is a function without a name

$hello=function(){

    echo "Hello</br>";

};

$hello();

echo "<h5># Arrow Function (PHP 7.4+) </h5>"; // Arrow function is a shorter syntax for anonymous function

$sum=fn($a,$b)=>$a+$b;

echo $sum(10,20)."";


echo "✅ Function Declaration</br>"; // function declaration is the process of defining a function in PHP. It includes the function name, parameters, and the code block that will be executed when the function is called.
echo "✅ Function Call</br>"; // function call is the process of invoking a function in PHP. It involves using the function name followed by parentheses, optionally passing arguments to the function.
echo "✅ Parameters</br>"; // parameters are variables that are passed to a function in PHP. They allow you to provide input values to the function, which can be used within the function's code block.
echo "✅ Arguments</br>"; // arguments are the actual values that are passed to a function in PHP. They correspond to the parameters defined in the function declaration and provide the input data for the function to operate on.
echo "✅ Return Value</br>"; // return value is the output produced by a function in PHP. It is the value that the function sends back to the caller after executing its code block, allowing the caller to use or store that value for further processing.
echo "✅ Default Parameters</br>"; // default parameters are parameters in a function that have a predefined value. If the caller does not provide a value for that parameter, the default value will be used instead.
echo "✅ Type Hint / Declaration</br>"; // Type hinting is a feature that allows you to specify the expected data type of a function's parameters and return value.
echo "✅ Return Type</br>"; // return type is a feature in PHP that allows you to specify the expected data type of the value that a function will return. It helps ensure that the function returns the correct type of data, improving code reliability and readability.
echo "✅ Local Scope</br>"; // local scope refers to the visibility and accessibility of variables within a specific function or block of code. Variables declared within a function are only accessible within that function and cannot be accessed from outside of it.
echo "✅ Global Scope</br>"; // global scope refers to the visibility and accessibility of variables that are declared outside of any function or block of code. These variables can be accessed from anywhere in the script, including inside functions, by using the global keyword.
echo "✅ Static Scope</br>"; // static scope refers to the visibility and accessibility of variables that are declared as static within a function. Static variables retain their value between function calls and are only accessible within the function they are declared in.
echo "✅ Parameter Scope</br>"; // parameter scope refers to the visibility and accessibility of variables that are passed as parameters to a function. These variables are only accessible within the function and cannot be accessed from outside of it.
echo "✅ Static Variable</br>"; // static variable is a variable that retains its value between function calls. It is declared using the static keyword and is only accessible within the function it is declared in.
echo "✅ Anonymous Function</br>"; // anonymous function is a function that does not have a name and can be assigned to a variable or passed as an argument to another function. It is often used for short, one-time operations or as a callback function.
echo "✅ Arrow Function</br>"; // arrow function is a shorthand syntax for defining anonymous functions in PHP. It uses the fn keyword and allows for a more concise way to write functions, especially when they consist of a single expression.
echo "✅ Built-in Function</br>"; // built-in function is a function that is provided by the PHP language itself. These functions are pre-defined and can be used directly in your code without the need for any additional implementation. Examples include functions like strlen(), array_merge(), and date().
echo "✅ User-defined Function</br>"; // user-defined function is a function that is created by the programmer to perform a specific task. It allows for code reusability and modularity, enabling developers to define their own functions with custom logic and functionality.
echo "✅ Recursive Function</br>"; // recursive function is a function that calls itself in order to solve a problem. It is often used for tasks that can be broken down into smaller, similar sub-tasks, such as calculating factorials or traversing tree structures. Recursive functions must have a base case to prevent infinite recursion.
echo "✅ Function Overloading</br>"; // function overloading is a feature that allows multiple functions to have the same name but with different parameter lists. It enables the programmer to define multiple versions of a function, each tailored to handle different types or numbers of arguments.
echo "✅ Function Overriding</br>"; // function overriding is a feature that allows a subclass to provide a specific implementation of a method that is already defined in its superclass. It enables polymorphism, allowing the subclass to modify or extend the behavior of the inherited method.
echo "✅ Function Composition</br>"; // function composition is a technique in programming where multiple functions
echo "✅ Function Composition</br>"; // function composition is a technique in programming where multiple functions are combined to create a new function. It allows for the creation of complex operations by chaining together simpler functions, promoting code reusability and modularity.
echo "✅ Function Currying</br>"; // function currying is a technique in functional programming
echo "✅ Function Currying</br>"; // function currying is a technique in functional programming where a function with multiple arguments is transformed into a sequence of functions, each taking a single argument. It allows for partial application of functions and can improve code readability and reusability.
echo "✅ Function Memoization</br>"; // function memoization is an optimization technique that involves caching the results of expensive function calls and returning the cached result when the same inputs occur again. It can significantly improve performance by avoiding redundant calculations.
echo "✅ Function Chaining</br>"; // function chaining is a programming technique where multiple methods are called on the same object in a single statement.
echo "✅ Function Chaining</br>"; // function chaining is a programming technique where multiple methods are called on the same object in a single statement. It allows for a more fluent and readable syntax, enabling developers to perform a series of operations on an object without needing to repeatedly reference it.
echo "✅ Function Decorators</br>"; // function decorators are a design pattern that allows for
echo "✅ Function Decorators</br>"; // function decorators are a design pattern that allows for the modification or enhancement of the behavior of functions or methods without changing their source code. They are often used to add additional functionality, such as logging, authentication, or validation, to existing functions in a clean and reusable manner.
echo "</br>";


?>