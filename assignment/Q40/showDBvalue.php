<?php
include './DBconnect.php';

$sql = "SELECT * FROM todo";
$result = mysqli_query($conn, $sql);

echo "<table><tr><th>ID</th><th>Todo</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>{$row['id']}</td><td>{$row['TODO']}</td></tr>";
}
echo "</table>";
?>
