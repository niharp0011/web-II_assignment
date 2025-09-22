<?php 

    if(isset($_COOKIE["user"])) {
        echo "Welcome " . $_COOKIE["user"];
    } else {
        echo "Cookie 'user' is not set!";
    }

?>