<!-- 11. Write a program to print numbers from 1 to 20 using:
    a. while loop
    b. for loop
    c. do...while loop -->

<?php 

    echo "Using while loop:<br>";
    $i = 1;
    while ($i <= 20) {
        echo $i . " ";
        $i++;
    }

    echo "<br><br>Using for loop:<br>";
    for ($j = 1; $j <= 20; $j++) {
        echo $j . " ";
    }

    echo "<br><br>Using do...while loop:<br>";
    $k = 1;
    do {
        echo $k . " ";
        $k++;
    } while ($k <= 20);

?>