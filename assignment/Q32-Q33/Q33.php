<!-- 33. Write a PHP program to delete a cookie. -->

<?php 
    setcookie("user", "", time() - 3600, "/");
    echo "Cookie 'user' has been deleted!";
?>