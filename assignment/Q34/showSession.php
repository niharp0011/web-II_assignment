<?php 

    session_start();
    if(isset($_SESSION["username"])) {
        echo "Username is " . $_SESSION["username"];
    } else {
        echo "No session found.";
    }

?>