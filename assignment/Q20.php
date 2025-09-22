<!-- 20. Write a recursive function in PHP to print Fibonacci series up to 10 numbers. -->

<?php

function fibonacci($n) {
    if ($n == 0) {
        return 0;
    } elseif ($n == 1) {
        return 1;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

echo "Fibonacci series (10 numbers):<br>";
for ($i = 0; $i < 10; $i++) {
    echo fibonacci($i) . " ";
}
?>
