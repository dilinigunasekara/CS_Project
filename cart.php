<?php
session_start();
$logged_in = isset($_SESSION['user_id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Cart - Beauty Care</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php include 'navbar.php'; ?>

<section class="page-header">
  <div class="container">
    <h1>Your Shopping Cart</h1>
    <p>Review your selected products before checkout</p>
  </div>
</section>

<section class="page-content">
  <div class="container">
    <div class="cart-container">

      <!-- Shown when cart is empty (JS toggles this) -->
      <div id="empty-cart-message" style="text-align:center;padding:4rem;display:none;">
        <div style="font-size:4rem;margin-bottom:1rem;">🛒</div>
        <h2>Your cart is empty</h2>
        <p style="color:var(--text-light);margin-top:.5rem;">Add some products to get started!</p>
        <a href="products.php" class="btn btn-primary" style="margin-top:1.5rem;">Browse Products</a>
      </div>

      <!-- Shown when cart has items (JS fills the rows) -->
      <div id="cart-content">
        <div style="overflow-x:auto;">
          <table class="cart-table">
            <thead>
              <tr>
                <th style="text-align:left">Product</th>
                <th>Unit Price</th>
                <th>Quantity</th>
                <th>Subtotal</th>
                <th>Remove</th>
              </tr>
            </thead>
            <tbody id="cart-items">
              <!-- JavaScript fills this -->
            </tbody>
          </table>
        </div>

        <div class="cart-summary">
          <h2>Order Summary</h2>
          <p class="cart-total-text">Total: $<span id="cart-total">0.00</span></p>
          <div class="cart-actions">
            <a href="products.php" class="btn btn-secondary">Continue Shopping</a>
            <button class="btn btn-primary" id="clear-cart-btn">Clear Cart</button>
            <?php if ($logged_in): ?>
              <a href="checkout.php" class="btn btn-primary" id="checkout-btn">Proceed to Checkout →</a>
            <?php else: ?>
              <a href="login.php?msg=checkout" class="btn btn-primary" id="checkout-btn">Login to Checkout</a>
            <?php endif; ?>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
<script src="script.js"></script>
</body>
</html>
