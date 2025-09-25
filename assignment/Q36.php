<!-- 36. Write a PHP program to check whether a string starts with “Hello” using a regular expression. -->
 
<?php
$str = "Hello, welcome to the world of PHP.";
if (preg_match("/^Hello/", $str)) {
    echo "The string starts with 'Hello'.";
} else {
    echo "The string does not start with 'Hello'.";
}   
?>