<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header("Location: login.php");
  exit();
}
require 'db_config.php';
$result = $conn->query("SELECT * FROM orders ORDER BY created_at DESC");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Orders - Admin</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>All Orders</h1>
  <table border="1" cellpadding="8">
    <tr><th>ID</th><th>Name</th><th>Phone</th><th>Items</th><th>Total</th><th>Date</th></tr>
    <?php while($row = $result->fetch_assoc()): ?>
      <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo htmlspecialchars($row['fullname']); ?></td>
        <td><?php echo htmlspecialchars($row['phone']); ?></td>
        <td><?php echo htmlspecialchars($row['items']); ?></td>
        <td>₹<?php echo $row['total']; ?></td>
        <td><?php echo $row['created_at']; ?></td>
      </tr>
    <?php endwhile; ?>
  </table>
</body>
</html>
