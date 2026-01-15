<?php
session_start();
require 'db_config.php';
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $stmt = $conn->prepare("SELECT * FROM admin_users WHERE username=? AND password=?");
  $stmt->bind_param("ss", $username, $password);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
    $_SESSION['admin'] = $username;
    header("Location: admin_orders.php");
    exit();
  } else {
    $message = "Invalid credentials!";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <main>
    <h1>Admin Login</h1>
    <?php if ($message) echo "<p style='color:red;'>$message</p>"; ?>
    <form method="POST">
      <label>Username:</label><br>
      <input type="text" name="username" required><br><br>

      <label>Password:</label><br>
      <input type="password" name="password" required><br><br>

      <button type="submit">Login</button>
    </form>
  </main>
</body>
</html>
