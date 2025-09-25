<?php 

include './dbConnection.php';

    $id = 2;
    $sql = "DELETE FROM `userlist` WHERE `userlist`.`id` =  $id";

    $result = mysqli_query($conn, $sql);

    if($result){
        $res = mysqli_affected_rows($conn);
        if($res > 0 ){
            echo "Data delete Successfully";
            
        }else {
            echo "Something was wrong, Please Enter valid Parameters";
        }
    }else{
        echo "delete failed: " . mysqli_error($conn);
    }
?>