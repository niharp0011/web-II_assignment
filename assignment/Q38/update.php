<?php 

    include './dbConnection.php';

    $id = 2;
    $email = "Updated@gmail.com";


    $sql = "UPDATE `userlist` SET `email` = '$email' WHERE `userlist`.`id` = $id;";
    $result = mysqli_query($conn, $sql);

    if($result){
        $res = mysqli_affected_rows($conn);
        echo "Email update Successfully";
    }else{
        echo "Update failed: " . mysqli_error($conn);
    }

?>  