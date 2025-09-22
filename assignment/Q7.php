<!-- // 7. Create a registration form that checks:
    a. Required fields not empty
    b. Email format is valid
    c. Password length ≥ 6 -->




<?php
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST['email'])) {
        $error = "Email is required.";
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format.";
    }

    if (empty($_POST['Password'])) {
        $error = "Password is required.";
    } elseif (strlen($_POST['Password']) < 6) {
        $error = "Password must be at least 6 characters.";
    }

    if(empty($error)){
        $error = "<span style='color:green;'>Registration successful!</span>";
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
    <form method="post" action="./Q7.php">
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" value="" required>
            
        </div>
        <br>
        <div>
            <label for="Password">Password:</label>
            <input type="Password" name="Password" required>
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