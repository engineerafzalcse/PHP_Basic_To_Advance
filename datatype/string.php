<?php


$username = "Md. Afzal Hossen";

var_dump($username); // Output the variable type and value

echo "<br>String Length: " . strlen($username) . "<br>"; // Output the length of the string
echo "Uppercase: ". strtoupper($username) . "<br>"; // Convert to uppercase
echo "Lowercase: ". strtolower($username) . "<br>"; // Convert to lowercase
echo "First Character Uppercase: ". ucfirst($username) . "<br>"; // First character uppercase
echo "First Character of Each Word Uppercase: ". ucwords($username) . "<br>"; // First character of each word uppercase
echo "String Word Count: ". str_word_count($username) . "<br>"; // Count the number of words in the string
echo "String Reverse: ". strrev($username) . "<br>"; // Reverse the string
echo "String Position of 'Hossen': ". strpos($username, "Hossen") . "<br>"; // Find the position of a substring
echo "String Replace 'Afzal' with 'Rahman': ". str_replace("Afzal", "Rahman", $username) . "<br>"; // Replace a substring




?>