<!-- 15. Write a program using a for loop to calculate the factorial of a number. -->

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST['number'];
    if (!is_numeric($number) || $number < 0) {
        $result = "Please enter a valid non-negative integer.";
    } else {
        $factorial = 1;
        for ($i = 1; $i <= $number; $i++) {
            $factorial *= $i;
        }
        $result = "The factorial of " . $number . " is " . $factorial . ".";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nihar_139</title>
</head>
<body>
    <form method="post" action="">
        <label for="number">Enter a number:</label>
        <input type="number" name="number" required>
        <input type="submit" value="Calculate Factorial">
    </form>
    <br>
    <?php 
        if (isset($result)) {
            echo $result;
        }
    ?>
</body>
</html>