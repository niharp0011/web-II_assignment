<!-- 8. Create a form where email is a required field. Validate using PHP that the email is correct. -->

<?php
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST['email'])) {
        $error = "Email is required.";
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format.";
    }

    if(empty($error)){
        $error = "<span style='color:green;'>Valid email!</span>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>139_Nihar</title>
</head>
<body>
    <form method="post" action="./Q8.php">
        <div>
            <label for="txt">Email:</label>
            <input type="txt" name="email" value="" required>
            
        </div>
        <br>
            <input type="submit" name="submit" value="submit">
    </form>
    <br>
        <?php 
            echo "$error"
        ?>
</body>
</html>