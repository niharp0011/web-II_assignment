<!-- 23. Write a PHP program to format a string using strtoupper(), strtolower(), ucfirst(), and ucwords(). -->

<?php
// Original string
$str = "welcome to php programming";

// Apply different string formatting functions
echo "Original String: $str <br>";
echo "Uppercase: " . strtoupper($str) . "<br>";
echo "Lowercase: " . strtolower($str) . "<br>";
echo "First letter capitalized: " . ucfirst($str) . "<br>";
echo "Each word capitalized: " . ucwords($str) . "<br>";
?>
