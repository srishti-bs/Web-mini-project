<?php
require 'db_config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $fullname = $_POST['fullname'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $payment = $_POST['payment'];
  $items = $_POST['items'];
  $total = $_POST['total'];

  $stmt = $conn->prepare("INSERT INTO orders (fullname, phone, address, payment, items, total) VALUES (?, ?, ?, ?, ?, ?)");
  $stmt->bind_param("sssssd", $fullname, $phone, $address, $payment, $items, $total);

  if ($stmt->execute()) {
    header("Location: thankyou.php?name=" . urlencode($fullname));
  } else {
    echo "Error: " . $conn->error;
  }

  $stmt->close();
  $conn->close();
}
?>
