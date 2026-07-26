<?php

    // php print type system
    echo "<h1>PHP Print Type System</h1>";

    echo "<h3 class='text-primary'>1. echo = print a string or variable to the output</h3>";
    $name = "Md. Afzal Hossen"; // This is a String variable
    echo $name."<br>";
    echo "My Name is " . $name;

    /*
    1. echo = print a string or variable to the output
        $name = "Afzal";
        echo $name;
        echo "My Name is " . $name;
    */
    //end



    echo "<h3 class='text-primary'>2. print = echo-এর মতোই কাজ করে, তবে এটি একটি মাত্র argument গ্রহণ করে এবং 1 return করে।</h3>";
    $name = "Md. Afzal Hossen"; // This is a String variable
    print $name."<br>";
    print "My Name is " . $name;


    /*
    2. print = echo-এর মতোই কাজ করে, তবে এটি একটি মাত্র argument গ্রহণ করে এবং 1 return করে।
        $name = "Afzal";
        print $name;
        print "Welcome " . $name;

    */
    //end




    echo "<h3 class='text-primary'>3. printf = নির্দিষ্ট Format-এ Output দেখায়।</h3>";
    $name = "Md. Afzal Hossen"; // This is a String variable
    $age = 25; // This is an Integer variable
    printf("My name is %s and Age is %d", $name, $age);


    /*
    3. printf = নির্দিষ্ট Format-এ Output দেখায়।
        $name = "Afzal";
        $age = 28;
        printf("My name is %s and Age is %d", $name, $age);
    */
    //end


    echo "<h3 class='text-primary'>4. sprintf() = printf-এর মতোই কাজ করে, তবে এটি Output দেখায় না, বরং একটি String Return করে।</h3>";
    $name = "Md. Afzal Hossen"; // This is a String variable
    $age = 25; // This is an Integer variable
    $output = sprintf("My name is %s and Age is %d", $name, $age);
    echo $output;


    /*
    4. sprintf() = printf-এর মতোই কাজ করে, তবে এটি Output দেখায় না, বরং একটি String Return করে।
        $name = "Afzal";
        $age = 28;
        $output = sprintf("My name is %s and Age is %d", $name, $age);
        echo $output;
    */
    //end





    echo "<h3 class='text-primary'>5. print_r = কাজ: Array এবং Object সুন্দরভাবে দেখায়।</h3>";
    $fruits = ["Mango", "Banana", "Apple"];
    print_r($fruits);


    /*
    5. print_r = কাজ: Array এবং Object সুন্দরভাবে দেখায়।

        $fruits = ["Apple", "Banana", "Orange"];
        print_r($fruits);


    */ 
    //end



    
    echo "<h3 class='text-primary'>6. var_dump = কাজ: Variable-এর Value + Data Type + Length দেখায়।</h3>";
    $name = "Md. Afzal Hossen"; // This is a String variable
    $age = 25; // This is an Integer variable
    var_dump($name."<br>");
    var_dump($age."<br>");

    $fruits = ["Mango", "Banana", "Apple"];
    var_dump($fruits);


    /*
    6. var_dump = কাজ: Variable-এর Value + Data Type + Length দেখায়।
        $name = "Afzal";
        $age = 28;
        var_dump($name);
        var_dump($age);

        $fruits = ["Apple", "Banana"];
        var_dump($fruits);
    */
    //end



    echo "<h3 class='text-primary'>7. var_export = এমনভাবে Output দেয়, যা আবার PHP Code হিসেবে ব্যবহার করা যায়।</h3>";
    $name = "Md. Afzal Hossen"; // This is a String variable
    $age = 25; // This is an Integer variable
    var_export($name."<br>");
    var_export($age."<br>");

    $fruits = ["Mango", "Banana", "Apple"];
    var_export($fruits);


    /*
    7.var_export = এমনভাবে Output দেয়, যা আবার PHP Code হিসেবে ব্যবহার করা যায়।
        $name = "Afzal";
        $age = 28;
        var_export($name);
        var_export($age);

        $fruits = ["Apple", "Banana"];
        var_export($fruits);
    */
    //end



    echo "<h3 class='text-primary'>8. debug_zval_dump = কাজ: Variable-এর Reference Count + Value + Data Type দেখায়।</h3>";
    $name = "Md. Afzal Hossen"; // This is a String variable
    $age = 25; // This is an Integer variable
    debug_zval_dump($name."<br>");
    debug_zval_dump($age."<br>");

    $fruits = ["Mango", "Banana", "Apple"];
    debug_zval_dump($fruits);



    /*
    8. debug_zval_dump = কাজ: Variable-এর Reference Count + Value + Data Type দেখায়।
        $name = "Afzal";
        $age = 28;
        debug_zval_dump($name);
        debug_zval_dump($age);

        $fruits = ["Apple", "Banana"];
        debug_zval_dump($fruits);
    */
    //end



    echo "<h3 class='text-primary'>9. dd() = Laravel-এর Helper Function, যা Variable-এর Value + Data Type + Length দেখায় এবং Execution বন্ধ করে দেয়।</h3>";
    $name = "Md. Afzal Hossen"; // This is a String variable
    $age = 25; // This is an Integer variable
    // dd($name."<br>");
    // dd($age."<br>");

    // $fruits = ["Mango", "Banana", "Apple"];
    // dd($fruits);


    /*
    9. dd() = Laravel-এর Helper Function, যা Variable-এর Value + Data Type + Length দেখায় এবং Execution বন্ধ করে দেয়।
        $name = "Afzal";
        $age = 28;
        dd($name);
        dd($age);

        $fruits = ["Apple", "Banana"];
        dd($fruits);
    
    */
    //end



    echo "<h3 class='text-primary'>10. ddd() = Laravel-এর Helper Function, যা Variable-এর Value + Data Type + Length দেখায় এবং Execution বন্ধ করে দেয়। এটি dd() এর মতোই কাজ করে, তবে এটি আরও বিস্তারিত তথ্য দেখায়।</h3>";   
    $name = "Md. Afzal Hossen"; // This is a String variable
    $age = 25; // This is an Integer variable
    // ddd($name."<br>");
    // ddd($age."<br>");

    $fruits = ["Mango", "Banana", "Apple"];
    // ddd($fruits);


    /*
    10. ddd() = Laravel-এর Helper Function, যা Variable-এর Value + Data Type + Length দেখায় এবং Execution বন্ধ করে দেয়। এটি dd() এর মতোই কাজ করে, তবে এটি আরও বিস্তারিত তথ্য দেখায়।
        $name = "Afzal";
        $age = 28;
        ddd($name);
        ddd($age);

        $fruits = ["Apple", "Banana"];
        ddd($fruits);
    */
    //end


    echo "<h3 class='text-primary'>11. dump() = Laravel-এর Helper Function, যা Variable-এর Value + Data Type + Length দেখায় এবং Execution বন্ধ করে দেয়। এটি dd() এর মতোই কাজ করে, তবে এটি আরও বিস্তারিত তথ্য দেখায়।</h3>";
    $name = "Md. Afzal Hossen"; // This is a String variable
    $age = 25; // This is an Integer variable
    // dump($name."<br>");
    // dump($age."<br>");

    $fruits = ["Mango", "Banana", "Apple"];
    // dump($fruits);



    /*
    11. dump() = Laravel-এর Helper Function, যা Variable-এর Value + Data Type + Length দেখায় এবং Execution বন্ধ করে দেয়। এটি dd() এর মতোই কাজ করে, তবে এটি আরও বিস্তারিত তথ্য দেখায়।
        $name = "Afzal";
        $age = 28;
        dump($name);
        dump($age);

        $fruits = ["Apple", "Banana"];
        dump($fruits);
    */
    //end


    echo "<h3 class='text-primary'>12. die() = কাজ: Execution বন্ধ করে দেয় এবং একটি Message দেখায়।</h3>";
    // echo "Start<br>";
    // die();
    // echo "End<br>";


    /*
    12. die() = কাজ: Execution বন্ধ করে দেয় এবং একটি Message দেখায়।
        echo "Start";
        die();
        echo "End";
    */
    //end



    echo "<h3 class='text-primary'>13. exit() = die() এর মতোই কাজ করে, তবে এটি একটি Message দেখায় না।</h3>";
    // echo "Start<br>";
    // exit();
    // echo "End<br>";


    /*
    13. exit() = die() এর মতোই কাজ করে, তবে এটি একটি Message দেখায় না।
        echo "Start";
        exit();
        echo "End";
    */
    //end




    echo "<h3 class='text-primary'>14. json_encode() = কাজ: Array বা Object কে JSON Format এ Convert করে।</h3>";
    $fruits = ["Mango", "Banana", "Apple"];
    echo json_encode($fruits); // Output: ["Mango","Banana","Apple"]

    /*
    14. json_encode() = কাজ: Array বা Object কে JSON Format এ Convert করে।
        $fruits = ["Apple", "Banana", "Orange"];
        echo json_encode($fruits); 
    */
    //end



    echo "<h3 class='text-primary'>15. json_decode() = কাজ: JSON Format কে Array বা Object এ Convert করে।</h3>";
    $json = '{"name":"Afzal","age":28}';
    $data = json_decode($json, true);
    print_r($data); // Output: Array ( [name] => Afzal [age] => 28 )

    /*
    15. json_decode() = কাজ: JSON Format কে Array বা Object এ Convert করে।
        $json = '{"name":"Afzal","age":28}';
        $data = json_decode($json, true);
        print_r($data);
    */
    //end



    // 6. gettype = return the type of a variable as a string
    // 7. settype = set the type of a variable
    // 8. is_string = check if a variable is a string
    // 9. is_int = check if a variable is an integer
    // 10. is_float = check if a variable is a float
    // 11. is_bool = check if a variable is a boolean
?>