<!-- 34. Write a PHP program to start a session, display it, and destroy the session. -->

<?php 
    session_start();
    $_SESSION["username"] = "JohnDoe";
    echo "Session started. Username is " . $_SESSION["username"] . ".<br>";

?>