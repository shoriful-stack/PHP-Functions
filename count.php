<?php 
// similar as `sizeof()` function
$fruits = ["apple", "banana", "orange", "grapes"];
echo count($fruits). "\n";
// Counting elements in a multidimensional array
$multiArray = [
    ["Apple", "Banana"],
    ["Cherry", "Date"],
    ["Elderberry"]
];
echo count($multiArray). "\n";

// count in string
$greet = "Hello! I am Shorif";
echo str_word_count($greet). "\n";

// string length
$greet1 = "Hello I am Sazid";
echo strlen($greet1). "\n";

// count values
// problem faced: i used echo to print this array, to print an array should call print_r function;
$array = ["apple", "banana", "apple", "orange", "banana", "apple"];
print_r(array_count_values($array));

