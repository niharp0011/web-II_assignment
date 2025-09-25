<?php

include './dbConnection.php';

        $id = 2;
        $email = "Nihar";
        $Password = "Nihar@123";

    
        $sql = "INSERT INTO `userlist` ( `id`,`email`, `password`, `currentDate`) VALUES ('$id', '$email', '$Password', current_timestamp())";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "The record has been inserted Successfully! <br /> ";
        } else {
            echo "The record was not inserted because of the erro ----> " . mysqli_error($conn);
        }

