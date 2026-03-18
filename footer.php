<?php
if (session_status() === PHP_SESSION_NONE) session_start();
$logged_in = isset($_SESSION['user_id']);
?>
<footer class="footer">
  <div class="container">
    <div class="footer-content">

      <div class="footer-section">
        <h3>Beauty Care</h3>
        <p>Your trusted partner in natural skincare and beauty products.</p>
      </div>

      <div class="footer-section">
        <h4>Quick Links</h4>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="products.php">Products</a></li>
          <li><a href="diy-recipes.php">DIY Recipes</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>

      <div class="footer-section">
        <h4>Account</h4>
        <ul>
          <?php if ($logged_in): ?>
            <li><a href="my-orders.php">My Orders</a></li>
            <li><a href="logout.php">Logout</a></li>
          <?php else: ?>
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
          <?php endif; ?>
          <li><a href="cart.php">Shopping Cart</a></li>
        </ul>
      </div>

      <div class="footer-section">
        <h4>Contact</h4>
        <p>Email: info@beautycare.com</p>
        <p>Phone: +1 (555) 123-4567</p>
      </div>

    </div>
    <div class="footer-bottom">
      <p>&copy; <?= date('Y') ?> Beauty Care. All rights reserved.</p>
    </div>
  </div>
</footer>
