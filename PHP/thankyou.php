<?php
$name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : 'Customer';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Thank You</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <main>
    <h1>✅ Thank You, <?php echo $name; ?>!</h1>
    <p>Your order has been successfully placed.</p>
    <a href="index.php" class="btn">Return to Home</a>
  </main>
</body>
</html>
