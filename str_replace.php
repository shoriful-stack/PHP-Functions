<?php 
// usage of str_replace
$originalString = "My Name is Sazid";
$search = "Sazid";
$replaceWith = "Shorif";
$modifyString = str_replace($search, $replaceWith, $originalString);
echo $modifyString."\n";

// usage of str_replace(benefits: case insensitive)
$originalString1 = "I am Shoriful";
$search1 = "shoriful";
$replaceWith1 = "Sazid";

$modifyString1 = str_ireplace($search1, $replaceWith1, $originalString1);
echo $modifyString1;
