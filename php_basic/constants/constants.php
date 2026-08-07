<?php

echo "<h4>In PHP, constants are fixed values that cannot be changed once they are defined. ( define(), const )</h4>";

define("message", "Welcome to PHP Learn!");
echo "Defining Constants : ".message."</br>";

echo "<h4>Using const (recommended inside classes and also at the global scope).</h4>";

const PI = 3.14159;
echo "PI Values is : ".PI."</br>";




?>