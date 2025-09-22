<!-- 21. Write a PHP program to create a string and display its first, middle, and last character. -->

<?php

$str = "Programming";

$length = strlen($str);
$first = $str[0];
$middle = $str[(int)($length / 2)];
$last = $str[$length - 1];

echo "String: $str <br>";
echo "First character: $first <br>";
echo "Middle character: $middle <br>";
echo "Last character: $last <br>";

?>
