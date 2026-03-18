<?php
session_start();

// Must be logged in
if (!isset($_SESSION['user_id'])) {
    $_SESSION['redirect_after_login'] = 'checkout.php';
    header('Location: login.php?msg=checkout');
    exit;
}

require_once 'db_connect.php';
$error    = '';
$success  = false;
$order_id = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name   = trim($_POST['full_name']   ?? '');
    $addr   = trim($_POST['address']     ?? '');
    $city   = trim($_POST['city']        ?? '');
    $zip    = trim($_POST['postal_code'] ?? '');
    $phone  = trim($_POST['phone']       ?? '');
    $cart   = json_decode($_POST['cart_data'] ?? '[]', true);

    if (!$name || !$addr || !$city || !$zip) {
        $error = 'Please fill in all required shipping fields.';
    } elseif (empty($cart)) {
        $error = 'Your cart is empty. Please add products before checking out.';
    } else {
        $total = array_reduce($cart, fn($s,$i) => $s + ($i['price'] * $i['quantity']), 0);

        try {
            $pdo->beginTransaction();

            // Insert the order
            $pdo->prepare('INSERT INTO orders (user_id,total_amount,full_name,address,city,postal_code,phone) VALUES (?,?,?,?,?,?,?)')
                ->execute([$_SESSION['user_id'], $total, $name, $addr, $city, $zip, $phone]);
            $order_id = $pdo->lastInsertId();

            // Insert each line item
            $ins = $pdo->prepare('INSERT INTO order_items (order_id,product_id,product_name,price,quantity) VALUES (?,?,?,?,?)');
            foreach ($cart as $item) {
                $ins->execute([$order_id, $item['id'], $item['name'], $item['price'], $item['quantity']]);
            }

            $pdo->commit();
            $success = true;
        } catch (Exception $e) {
            $pdo->rollBack();
            $error = 'Sorry, there was a problem placing your order. Please try again.';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checkout - Beauty Care</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php include 'navbar.php'; ?>

<section class="page-header">
  <div class="container">
    <h1>Checkout</h1>
    <p>Almost there — fill in your shipping details</p>
  </div>
</section>

<section class="page-content">
  <div class="container">

    <?php if ($success): ?>
    <!-- ── SUCCESS ── -->
    <div class="order-success">
      <div class="success-icon">✅</div>
      <h2>Order Placed Successfully!</h2>
      <p>Thank you, <strong><?= htmlspecialchars($_SESSION['user_name']) ?></strong>!</p>
      <p style="margin-top:.5rem;">Your Order ID is <strong>#<?= $order_id ?></strong>. We'll process it shortly.</p>
      <div style="margin-top:2rem;display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;">
        <a href="my-orders.php" class="btn btn-primary">View My Orders</a>
        <a href="products.php"  class="btn btn-secondary">Continue Shopping</a>
      </div>
      <script>localStorage.removeItem('beautycare_cart');</script>
    </div>

    <?php else: ?>
    <!-- ── CHECKOUT FORM ── -->
    <?php if ($error): ?><div class="alert alert-error"><?= $error ?></div><?php endif; ?>

    <div class="checkout-wrapper">

      <!-- Left: order summary (filled by JS) -->
      <div class="checkout-summary">
        <h2>Order Summary</h2>
        <div id="checkout-items"><p style="color:#999">Loading cart…</p></div>
        <hr style="margin:1rem 0;border:none;border-top:1px solid var(--border-color)">
        <p class="checkout-total">Total: $<span id="checkout-total">0.00</span></p>
      </div>

      <!-- Right: shipping form -->
      <div class="checkout-form-wrap">
        <h2>Shipping Details</h2>
        <form method="POST" action="checkout.php" id="checkoutForm">
          <input type="hidden" name="cart_data" id="cart_data_input">

          <div class="form-group">
            <label>Full Name *</label>
            <input type="text" name="full_name" required placeholder="Recipient name"
                   value="<?= htmlspecialchars($_SESSION['user_name'] ?? '') ?>">
          </div>
          <div class="form-group">
            <label>Street Address *</label>
            <input type="text" name="address" required placeholder="123 Main Street">
          </div>
          <div class="form-group">
            <label>City *</label>
            <input type="text" name="city" required placeholder="Your city">
          </div>
          <div class="form-group">
            <label>Postal / ZIP Code *</label>
            <input type="text" name="postal_code" required placeholder="12345">
          </div>
          <div class="form-group">
            <label>Phone Number</label>
            <input type="tel" name="phone" placeholder="+1 (555) 000-0000">
          </div>

          <button type="submit" class="btn btn-primary"
                  style="width:100%;padding:1rem;font-size:1.1rem;margin-top:.5rem;">
            Place Order 🛍️
          </button>
        </form>
      </div>

    </div>
    <?php endif; ?>
  </div>
</section>

<?php include 'footer.php'; ?>
<script src="script.js"></script>
<script>
(function() {
  var cart  = JSON.parse(localStorage.getItem('beautycare_cart') || '[]');
  var box   = document.getElementById('checkout-items');
  var total = 0;

  if (!cart.length) {
    box.innerHTML = '<p>Your cart is empty. <a href="products.php">Add products first.</a></p>';
  } else {
    var html = '';
    cart.forEach(function(item) {
      var sub = item.price * item.quantity;
      total  += sub;
      html   += '<div class="checkout-item">'
              + '<span>' + item.name + ' &times; ' + item.quantity + '</span>'
              + '<span>$' + sub.toFixed(2) + '</span>'
              + '</div>';
    });
    box.innerHTML = html;
    document.getElementById('checkout-total').textContent = total.toFixed(2);
  }

  // Inject cart JSON into hidden field on submit
  var form = document.getElementById('checkoutForm');
  if (form) {
    form.addEventListener('submit', function() {
      document.getElementById('cart_data_input').value = JSON.stringify(cart);
    });
  }
})();
</script>
</body>
</html>
