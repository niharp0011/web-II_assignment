<!-- 18. Write a PHP program to demonstrate call by value where the original variable is not changed. -->

<?php

function callByValue($num) {
    $num = $num + 10; 
    echo "Value inside function: $num <br>";
}

$original = 50;

echo "Original value before function call: $original <br>";
callByValue($original);
echo "Original value after function call: $original <br>";

?>
