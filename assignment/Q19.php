<!-- 19. Write a PHP program to demonstrate call by reference where the original variable value gets updated. -->

<?php
function callByValue(&$num) {
    $num = $num + 10; 
    echo "Value inside function: $num <br>";
}

$original = 50;
echo "Original value before function call: $original <br>";
callByValue($original);
echo "Original value after function call: $original <br>";

?>