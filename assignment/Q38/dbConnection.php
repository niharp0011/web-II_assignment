<!-- 37. Write a PHP program to establish a connection with a MySQL database. -->

<?php

$servername = "localhost:3307";
$username = "root";
$password = "";
$database = "assignment";


$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
} 

?>