<?php
session_start();
if (!isset($_SESSION['user_id'])) { header('Location: login.php'); exit; }

require_once 'db_connect.php';

$stmt = $pdo->prepare('SELECT * FROM orders WHERE user_id = ? ORDER BY created_at DESC');
$stmt->execute([$_SESSION['user_id']]);
$orders = $stmt->fetchAll(PDO::FETCH_ASSOC);

$item_stmt = $pdo->prepare('SELECT * FROM order_items WHERE order_id = ?');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Orders - Beauty Care</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php include 'navbar.php'; ?>

<section class="page-header">
  <div class="container">
    <h1>My Orders</h1>
    <p>Track all your past purchases</p>
  </div>
</section>

<section class="page-content">
  <div class="container">

    <?php if (empty($orders)): ?>
    <div style="text-align:center;padding:4rem;">
      <div style="font-size:4rem;margin-bottom:1rem;">📦</div>
      <h2>No orders yet</h2>
      <p style="color:var(--text-light);margin-top:.5rem;">You haven't placed any orders yet.</p>
      <a href="products.php" class="btn btn-primary" style="margin-top:1.5rem;">Start Shopping</a>
    </div>
    <?php else: ?>

    <?php foreach ($orders as $order):
      $item_stmt->execute([$order['id']]);
      $items = $item_stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <div class="order-card">

      <div class="order-header">
        <div>
          <strong style="font-size:1.05rem;">Order #<?= $order['id'] ?></strong>
          <span style="margin-left:1rem;color:#888;font-size:.9rem;">
            <?= date('F j, Y  g:i A', strtotime($order['created_at'])) ?>
          </span>
        </div>
        <div style="display:flex;align-items:center;gap:1rem;flex-wrap:wrap;">
          <span class="order-status status-<?= $order['status'] ?>">
            <?= ucfirst($order['status']) ?>
          </span>
          <strong style="font-size:1.1rem;color:var(--primary-color);">
            $<?= number_format($order['total_amount'], 2) ?>
          </strong>
        </div>
      </div>

      <div class="order-details">
        <strong>Ship to:</strong>
        <?= htmlspecialchars($order['full_name']) ?>,
        <?= htmlspecialchars($order['address']) ?>,
        <?= htmlspecialchars($order['city']) ?>,
        <?= htmlspecialchars($order['postal_code']) ?>
        <?php if ($order['phone']): ?> — <?= htmlspecialchars($order['phone']) ?><?php endif; ?>
      </div>

      <div style="overflow-x:auto;margin-top:1rem;">
        <table class="cart-table">
          <thead>
            <tr><th style="text-align:left">Product</th><th>Unit Price</th><th>Qty</th><th>Subtotal</th></tr>
          </thead>
          <tbody>
            <?php foreach ($items as $item): ?>
            <tr>
              <td style="text-align:left"><?= htmlspecialchars($item['product_name']) ?></td>
              <td>$<?= number_format($item['price'], 2) ?></td>
              <td><?= $item['quantity'] ?></td>
              <td>$<?= number_format($item['price'] * $item['quantity'], 2) ?></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
    <?php endforeach; ?>

    <?php endif; ?>
  </div>
</section>

<?php include 'footer.php'; ?>
<script src="script.js"></script>
</body>
</html>
