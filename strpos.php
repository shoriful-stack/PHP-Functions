<?php 
// The strpos() function in PHP is used to find the position of the first occurrence of a substring within a string. It returns the index of the first occurrence of the substring or false if the substring is not found. The search is case-sensitive.

// Here are some examples of how to use strpos() in PHP:

// find words position
$string = "Hello World";
echo strpos($string,"World")."\n";
// find character position 
echo strpos($string,"o");