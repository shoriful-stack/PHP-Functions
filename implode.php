<?php 
$fruits = ["Apple", "Banana", "Grapes"];
$fruitsIntoSting = implode(" - ", $fruits);
echo  $fruitsIntoSting. "\n";

// usage in associative array
$person = [
    "first_name" => "John",
    "last_name" => "Doe",
    "age" => 30
];
$personInString = implode(",", $person);
echo $personInString. "\n";

// usage in empty separator
$greet = ["h", "e", "l", "l", "o"];
$greetInString = implode("", $greet);
echo $greetInString;