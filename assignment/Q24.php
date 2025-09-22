<!-- 24. Write a PHP program that demonstrates:
    a. strlen() → to count string length
    b. strpos() → to find position of a substring
    c. substr() → to extract part of string
    d. strrev() → to reverse a string -->


<?php
$str = "PHP Programming";

echo "Original String: $str <br><br>";
echo "Length of string (strlen): " . strlen($str) . "<br>";

$pos = strpos($str, "Programming");
echo "Position of 'Programming' (strpos): " . $pos . "<br>";

$part = substr($str, 4, 11); 
echo "Substring (substr): " . $part . "<br>";

echo "Reversed String (strrev): " . strrev($str) . "<br>";
?>
