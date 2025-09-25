<?php
session_start();
include("db_connect.php");

// Get user input
$username = $_POST['username'];
$password = $_POST['password'];

// ❌ Removed md5() for now (plain text check)
// $password = md5($password);

// Query
$sql = "SELECT * FROM userlist WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql) or die("Query failed: " . mysqli_error($conn));

// Check if user exists
if ($result && mysqli_num_rows($result) > 0) {
    $_SESSION['username'] = $username;
    header("Location: welcome.php");
    exit();
} else {
    echo "Invalid Username or Password!";
}

mysqli_close($conn);
?>
