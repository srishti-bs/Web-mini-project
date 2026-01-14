<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Checkout - QuickMed Pharmacy</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Checkout</h1>
    <nav>
      <a href="index.php">Home</a>
      <a href="cart.php">Cart</a>
    </nav>
  </header>

  <main>
    <form action="place_order.php" method="POST" class="checkout-form">
      <label>Full Name:</label><br>
      <input type="text" name="fullname" required><br><br>

      <label>Phone:</label><br>
      <input type="text" name="phone" required><br><br>

      <label>Address:</label><br>
      <textarea name="address" rows="3" required></textarea><br><br>

      <label>Payment Method:</label><br>
      <select name="payment" required>
        <option value="Cash on Delivery">Cash on Delivery</option>
        <option value="UPI">UPI</option>
        <option value="Card">Card</option>
      </select><br><br>

      <label>Order Details:</label><br>
      <textarea name="items" placeholder="e.g. Paracetamol x2, Cough Syrup x1" required></textarea><br><br>

      <label>Total Price (₹):</label><br>
      <input type="number" name="total" required><br><br>

      <button type="submit">Place Order</button>
    </form>
  </main>
</body>
</html>
