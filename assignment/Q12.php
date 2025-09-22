<!-- 12. Write a PHP program that checks marks of a student and prints grade:
    a. >=90 → A+
    b. >=75 → A
    c. >=60 → B -->

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $PHP = $_POST['PHP'];
    $MySQL = $_POST['MySQL'];
    $JavaScript = $_POST['JavaScript'];
    $HTML = $_POST['HTML'];

    if (!is_numeric($PHP) || !is_numeric($MySQL) || !is_numeric($JavaScript) || !is_numeric($HTML)) {
        echo "Please enter valid numeric marks for all subjects.";
        exit;
    }

    if ($PHP < 0 || $PHP > 100 || $MySQL < 0 || $MySQL > 100 || $JavaScript < 0 || $JavaScript > 100 || $HTML < 0 || $HTML > 100) {
        echo "Marks should be between 0 and 100.";
        exit;
    }

    if ($PHP < 33 || $MySQL < 33 || $JavaScript < 33 || $HTML < 33) {
        $result = "Fail<br>";
        
    } else {
        $result = "Pass<br>";
    }

    $marks = ($PHP + $MySQL + $JavaScript + $HTML) / 4;
    echo "Average Marks: " . $marks . "<br>";

    if ($marks >= 90) {
        $grade = "A+";
    } elseif ($marks >= 75) {
        $grade = "A";
    } elseif ($marks >= 60) {
        $grade = "B";
    } elseif ($marks >= 50) {
        $grade = "C";
    } else {
        $grade = "D";
    }

    echo "Marks: " . $marks . "<br>";
    echo "Grade: " . $grade . "<br>";
    echo "result:" . $result;
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
    <hr>
    <br>
    <form method="post" action="./Q12.php">
        <label for="PHP">PHP Marks:</label>
        <input type="text" name="PHP" required><br><br>
        <label for="MySQL">MySQL Marks:</label>
        <input type="text" name="MySQL" required><br><br>
        <label for="JavaScript">JavaScript Marks:</label>
        <input type="text" name="JavaScript" required><br><br>
        <label for="HTML">HTML Marks:</label>
        <input type="text" name="HTML" required><br><br>
        <input type="submit" value="Calculate Grade">
    </form>
    <br>

</body>

</html>