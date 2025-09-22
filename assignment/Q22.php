<!-- 22. Write a PHP program to search for the word “PHP” in a given string and replace it with “Web Programming”. -->

<?php

$str = "I love PHP because PHP is powerful.";

$replaced = str_replace("PHP", "Web Programming", $str);

echo "Original String: $str <br>";
echo "Modified String: $replaced <br>";
?>
