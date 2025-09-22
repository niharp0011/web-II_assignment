<!-- 3. Write a PHP program that uses string functions like strlen(), strrev(), strtoupper(), substr(). -->

<?php 

$str = "Hello, World!, Welcome to PHP programming.";

echo "Length of the string is: " . strlen($str) . "<br>";
echo "This is the reverce of the string: " . strrev($str) . "<br>";
echo "this is Uppercase of the string: " . strtoupper($str) . "<br>";
echo "This is the substring of the string: " . substr($str, 7, 13) . "<br>";


?>