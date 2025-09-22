<!-- 10. Write a program that checks if a number is positive, negative, or zero. -->

<?php
    
    $result = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST['number'];

        if (!is_numeric($number)) {
            $result = "Please enter a valid number.";
        } elseif ($number > 0) {
            $result = "The number is positive.";
        } elseif ($number < 0) {
            $result = "The number is negative.";
        } else {
            $result = "The number is zero.";
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
        <input type="text" name="number" required>
        <input type="submit" value="Check">
    </form>
    <br>
    <?php 
        echo $result;
    ?>
</body>
</html>