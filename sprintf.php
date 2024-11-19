<?php 
// The sprintf() function in PHP is used to format a string according to specified format codes. It returns the formatted string without printing it. This function is very useful for creating formatted output, especially when dealing with numbers, strings, or dates.

// Here are some examples of how to use sprintf() in PHP:

$name = "Helal";
$age = 25;
$formattedString = sprintf("%s vai is %d years old", $name, $age);
echo $formattedString. "\n";

// Formatting floating point numbers
$price = 19.2567;
$formattedString1 = sprintf("Komolar daam %.2f", $price);
echo $formattedString1. "\n";
$number = 42;
$formattedString2 = sprintf("komolar price code %04d", $number);
echo $formattedString2. "\n";