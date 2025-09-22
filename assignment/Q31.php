<!-- 31. Write a PHP program with a form that uses a hidden field to store the user ID and display it after form submission. -->

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userId = $_POST['user_id'];
    $username = $_POST['username'];

    echo "Form Submitted!<br>";
    echo "User ID (hidden): " . $userId . "<br>";
    echo "Username: " . $username . "<br>";
} else {
?>
    <form method="post" action="">
        <label>Enter Username: </label>
        <input type="text" name="username" required><br><br>
        
        <input type="hidden" name="user_id" value="101">

        <input type="submit" value="Submit">
    </form>
<?php
}
?>
