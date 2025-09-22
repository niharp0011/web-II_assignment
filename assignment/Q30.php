<!-- 30. Write a PHP program to store the marks of 5 subjects in an array and display them using a for loop. -->

<?php
$marks = array(85, 78, 92, 74, 88);

echo "Marks of 5 subjects:<br>";
for ($i = 0; $i < count($marks); $i++) {
    echo "Subject " . ($i + 1) . ": " . $marks[$i] . "<br>";
}
?>
