<!-- 32. Write a PHP program to set a cookie for storing the username and display the cookie value on another page. -->

<?php 

    setcookie("user", "John Doe", time() + 86400, "/");
    echo "Cookie 'user' has been set!";

?>
