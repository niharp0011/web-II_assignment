    <!-- // 6. Create an HTML form with fields name, email, and age. Handle the form in PHP and display the submitted values. -->

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>139_Nihar</title>
    </head>

    <body>

        <form method="post" action="./Q6.php">
            Name: <input type="text" name="name" required><br><br>
            Email: <input type="email" name="email" required><br><br>
            Age: <input type="number" name="age" required><br><br>
            <input type="submit" value="Submit">
        </form>


    </body>

    </html>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = ($_POST['name']);
        $email = ($_POST['email']);
        $age = ($_POST['age']);

        echo "<h2>Submitted Values:</h2>";
        echo "Name: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Age: " . $age . "<br>";
        echo "139_Nihar";
    }
?>