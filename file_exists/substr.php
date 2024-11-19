<?php 
$string = "Php is fun";
// string index starts from 0,ends with -1
echo substr($string, 0, 3). "\n";
// Using a negative start position
$string1 = "Php is fun";
$length = strlen($string1);
echo substr($string1, -3, $length). "\n";
// Omitting the length parameter
$string2 = "Php is fun";
echo substr($string2, 5). "\n";

// Using substr in a loop
$string3 = "Php is fun";
$length3 = strlen($string3);
for( $i = 0; $i < $length3; $i+=3 ){
    echo substr($string, $i, 3) . "\n";
}