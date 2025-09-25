<?php include 'DBconnect.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Todo List</title>
</head>
<body>
<h2>Todo List</h2>
<a href="addDBvalue.php" class="button">+ Add New Todo</a>
<br><br>

<table border="1" cellpadding="10">
  <tr>
    <th>ID</th>
    <th>Todo</th>
    <th>Action</th>
  </tr>
  <?php
  $result = mysqli_query($conn, "SELECT * FROM todo");
  ?>
  <?php while ($row = mysqli_fetch_array($result)): ?>
    <tr>
      <td><?= $row['id'] ?></td>
      <td><?= htmlspecialchars($row['TODO']) ?></td>
      <td >
        <a class="button" href="updateDBvalue.php?id=<?= $row['id'] ?>">Update</a>
        
        <a class="button delete" 
           href="deleteDBvalue.php?id=<?= $row['id'] ?>" 
           onclick="return confirm('Are you sure?')">Delete</a>
      </td>
    </tr>
  <?php endwhile; ?>
</table>


</body>
</html>
