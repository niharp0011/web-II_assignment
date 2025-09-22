<!-- 35. Write a PHP program to check if a given string contains only alphabets using a regular expression. -->

<?php
$str = "HelloWorld";

if (preg_match("/^[a-zA-Z]+$/", $str)) {
    echo "The string '$str' contains only alphabets.";
} else {
    echo "The string '$str' contains characters other than alphabets.";
}
?>
