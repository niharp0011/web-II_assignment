<!-- 28. Write a PHP program to display the first and last elements of an array. -->

<?php

$numbers = array(10, 20, 30, 40, 50);

$first = reset($numbers);
$last = end($numbers);

echo "First element: " . $first . "<br>";
echo "Last element: " . $last . "<br>";

?>
