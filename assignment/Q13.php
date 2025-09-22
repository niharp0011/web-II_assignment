<!-- 13. Write a PHP program that takes a number (1–7) and prints the day of the week using
switch. -->

<?php 

    $day = "";
    $error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $dayNum = $_POST['dayNum'];

switch ($dayNum) {
    case 1:
        $day = "Sunday";
        break;
    case 2:
        $day = "Monday";
        break;
    case 3:
        $day = "Tuesday";
        break;
    case 4:
        $day = "Wednesday";
        break;
    case 5:
        $day = "Thursday";
        break;
    case 6:
        $day = "Friday";
        break;
    case 7:
        $day = "Saturday";
        break;
    default:
        $error = "Invalid number! Please enter a number between 1 and 7.";
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
        <label for="dayNum">Enter a number (1-7):</label>
        <input type="number" name="dayNum" required>
        <input type="submit" value="Submit">
    </form>
    <br>
    <?php 
        if (!empty($day)) {
            echo "Day: " . $day;
        } else {
            echo $error;
        }
    ?>
</body>
</html>