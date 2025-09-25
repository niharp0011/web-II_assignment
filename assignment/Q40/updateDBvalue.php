<?php
include 'DBconnect.php';
$id = $_GET['id'] ?? '';
if (empty($id)) { die("ID missing"); }

$id = (int)$id;
$result = mysqli_query($conn, "SELECT * FROM todo WHERE id=$id");
$row = mysqli_fetch_assoc($result);
if (!$row) { die("No todo found."); }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Edit Todo</title>
</head>
<body>
<h2>Edit Todo #<?php echo $row['id']; ?></h2>
<form method="POST">
  <input type="text" name="todo" value="<?php echo htmlspecialchars($row['TODO']); ?>">
  <input type="submit" value="Update">
</form>
<a href="index.php">Back</a>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $todo = trim($_POST['todo']);
    if (empty($todo)) {
        echo "Todo required";
    } else {
        $todo = mysqli_real_escape_string($conn, $todo);
        $sql = "UPDATE todo SET TODO='$todo' WHERE id=$id";
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
