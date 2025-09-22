<!-- 17. Write a PHP program to define a function addNumbers($a, $b) that returns the sum of two numbers. -->

<?php

function addNumbers($a, $b) {
    return $a + $b;
}

$result = addNumbers(3, 7);
echo "The sum of 3 and 7 is : " . $result;

?>