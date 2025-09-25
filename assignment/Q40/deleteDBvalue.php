<?php

include 'DBconnect.php';

$id = $_GET['id'] ?? '';
if (empty($id)) { die("ID missing"); }

$id  = (int)$id;
$sql = "DELETE FROM todo WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
    exit;
} else {
    echo "Delete failed: " . mysqli_error($conn);
}
?>
