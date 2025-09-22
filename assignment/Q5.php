<!-- 5. Write a PHP program that demonstrates:
    a. Arithmetic operators (+, -, *, /, %)
    b. Comparison operators (==, !=, <, >, <=, >=)
    c. Logical operators (&&, ||, !)
    d. Assignment operators (+=, -=, *=) -->


<?php

    $a = 15;
    $b = 5;
    echo "Given numbers: a = $a, b = $b<br><br>";

    echo "Arithmetic Operators: <br>";
    echo "Addition: " . ($a + $b) . "<br>";
    echo "Subtraction: " . ($a - $b) . "<br>";
    echo "Multiplication: " . ($a * $b) . "<br>";
    echo "Division: " . ($a / $b) . "<br>";
    echo "Modulus: " . ($a % $b) . "<br>";
    
    echo "<br>Comparison Operators: <br>";
    echo "Equal: " . (($a == $b) ? "true" : "false") . "<br>";
    echo "Not Equal: " . (($a != $b) ? "true" : "false") . "<br>";
    echo "Greater than: " . (($a > $b) ? "true" : "false") . "<br>";
    echo "Less than: " . (($a < $b) ? "true" : "false") . "<br>";
    echo "Greater than or equal to: " . (($a >= $b) ? "true" : "false") . "<br>";
    echo "Less than or equal to: " . (($a <= $b) ? "true" : "false") . "<br>";
    
    echo "<br>Logical Operators: <br>";
    echo "And: " . (($a && $b) ? "true" : "false") . "<br>";
    echo "Or: " . (($a || $b) ? "true" : "false") . "<br>";
    echo "Not: " . (!$a ? "true" : "false") . "<br>";
    
    echo "<br>Assignment Operators: <br>";
    $a += $b;
    echo "After += : " . $a . "<br>";
    $a -= $b;
    echo "After -= : " . $a . "<br>";
    $a *= $b;
    echo "After *= : " . $a . "<br>";
?>