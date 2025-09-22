<!-- 14. Write a program using a while loop to print the first 10 even numbers. -->

<?php
$count = 0;
$num = 2;

echo "The first 10 even numbers are:<br>";
while ($count < 10) {
    echo $num . " ";
    $num += 2;
    $count++;
}
?>