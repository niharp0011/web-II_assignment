<?php

include './dbConnection.php';

$sql = "SELECT * FROM `userlist`";

$result = mysqli_query($conn, $sql);

$data = [];

while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

header('Content-Type: application/json');
echo json_encode($data);

?>