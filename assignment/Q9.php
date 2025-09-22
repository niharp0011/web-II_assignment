<!-- 9. Build a complete Contact Form with name, email, subject, message. On submission,
display all values with validation. -->

 <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>139_Nihar</title>
    </head>

    <body>

        <form method="post" action="./Q9.php">
            Name: <input type="text" name="name" required><br><br>
            Email: <input type="email" name="email" required><br><br>
            subject: <input type="txt" name="subject" required><br><br>
            message: <textarea name="message" required></textarea><br><br>
            <input type="submit" value="Submit">
        </form>

    </body>

    </html>

<?php
    $error = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        
        if (empty($name)) {
            $error = "- Name is required.<br>";
        } elseif (strlen($name) < 3) {
            $error .= "- Name must be at least 3 characters.<br>";
        }

        if (empty($email)) {
            $error .= "- Email is required.<br>";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error .= "- Invalid email format.<br>";
        }
        
        if (empty($subject)) {
            $error .= "- Subject is required.<br>";
        } elseif (strlen($subject) < 3) {
            $error .= "- Invalid Subject, Add Proper Subject.<br>";
        }

        if (empty($message)) {
            $error .= "- Message is required.<br>";
        } elseif (strlen($message) < 10) {
            $error .= "- Message must be at least 10 characters.<br>";
        }

        if (empty($error)) {
            echo "<h2>Submitted Values:</h2>";
            echo "Name: " . $name . "<br>";
            echo "Email: " . $email  . "<br>";
            echo "Subject: " . $subject . "<br>";
            echo "Message: " . $message . "<br>";
        } else {
            echo "<span style='color:red;'>$error</span>";
        }
    }
?>