<?php include 'DBconnect.php'; ?>


<!DOCTYPE html>
<html>
<head>
  <title>Add Todo</title>
</head>
<body>
<h2>Add Todo</h2>
<form method="POST">
  <input type="text" name="todo" placeholder="Enter todo">
  <input type="submit" value="Add">
</form>
<a href="index.php">Back</a>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $todo = trim($_POST['todo']);
    if (empty($todo)) {
        echo "Todo is required";
    } else {
        $todo = mysqli_real_escape_string($conn, $todo);
        $sql = "INSERT INTO todo (TODO) VALUES ('$todo')";
        if (mysqli_query($conn, $sql)) {
            header("Location: index.php");
            exit;
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}
?>
</body>
</html>
