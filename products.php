<?php
session_start();
require_once 'db_connect.php';

// Get category filter from URL (?cat=face)
$cat_slug = isset($_GET['cat']) ? trim($_GET['cat']) : '';

// Fetch all categories for the filter bar
$cats = $pdo->query("SELECT * FROM categories ORDER BY name")->fetchAll(PDO::FETCH_ASSOC);

// Fetch products — filter by category if one is selected
if ($cat_slug) {
    $stmt = $pdo->prepare("
        SELECT p.* FROM products p
        JOIN categories c ON p.category_id = c.id
        WHERE c.slug = ?
        ORDER BY p.name ASC
    ");
    $stmt->execute([$cat_slug]);
} else {
    $stmt = $pdo->query("SELECT * FROM products ORDER BY name ASC");
}
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products - Beauty Care</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php include 'navbar.php'; ?>

<section class="page-header">
  <div class="container">
    <h1>Our Products</h1>
    <p>Premium skincare crafted with natural ingredients</p>
  </div>
</section>

<section class="page-content">
  <div class="container">

    <!-- Category Filter Bar -->
    <div class="category-filter">
      <a href="products.php" class="filter-btn <?= !$cat_slug ? 'active' : '' ?>">All</a>
      <?php foreach ($cats as $c): ?>
        <a href="products.php?cat=<?= $c['slug'] ?>"
           class="filter-btn <?= $cat_slug===$c['slug'] ? 'active' : '' ?>">
          <?= htmlspecialchars($c['name']) ?>
        </a>
      <?php endforeach; ?>
    </div>

    <!-- Products Grid -->
    <div class="products-grid" style="margin-top:2rem;">
      <?php if (empty($products)): ?>
        <p style="text-align:center;color:var(--text-light);padding:3rem;grid-column:1/-1;">
          No products found in this category.
        </p>
      <?php else: ?>
        <?php foreach ($products as $p): ?>
        <div class="product-card"
             data-id="<?= $p['id'] ?>"
             data-name="<?= htmlspecialchars($p['name']) ?>"
             data-price="<?= $p['price'] ?>">
          <div class="product-image">
            <img src="<?= htmlspecialchars($p['image_url']) ?>" alt="<?= htmlspecialchars($p['name']) ?>">
          </div>
          <div class="product-info">
            <h3><?= htmlspecialchars($p['name']) ?></h3>
            <p class="product-description" style="font-size:.9rem;color:var(--text-light);margin-bottom:.8rem;">
              <?= htmlspecialchars($p['description']) ?>
            </p>
            <p class="product-price">$<?= number_format($p['price'], 2) ?></p>
            <?php if ($p['stock'] > 0): ?>
              <a href="#" class="btn btn-small add-to-cart-btn">Add to Cart</a>
            <?php else: ?>
              <span class="btn btn-small" style="background:#ccc;cursor:not-allowed;">Out of Stock</span>
            <?php endif; ?>
          </div>
        </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>

  </div>
</section>

<?php include 'footer.php'; ?>
<script src="script.js"></script>
</body>
</html>
