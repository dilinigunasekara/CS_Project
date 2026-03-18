<?php
session_start();
require_once 'db_connect.php';

// Fetch 4 featured products for the homepage
$stmt = $pdo->query("SELECT * FROM products WHERE is_featured = 1 LIMIT 4");
$featured = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beauty Care - Natural Skincare Products</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php include 'navbar.php'; ?>

<!-- ── HERO ─────────────────────────────────────────────── -->
<section class="hero hero-with-bg">
  <div class="hero-overlay"></div>
  <div class="container">
    <div class="hero-wrapper">
      <div class="hero-content">
        <h1>Discover Your Natural Beauty</h1>
        <p>Premium skincare products crafted with care for your radiant skin</p>
        <div class="hero-buttons">
          <a href="products.php" class="btn btn-primary">Shop Now</a>
          <a href="about.php"    class="btn btn-secondary">Learn More</a>
        </div>
      </div>
      <div class="hero-slider">
        <div class="slider-container">
          <div class="slider-wrapper">
            <div class="slide active"><img src="https://images.unsplash.com/photo-1556229010-6c3f2c9ca5f8?w=600&h=600&fit=crop" alt="Face Cream"></div>
            <div class="slide"><img src="https://images.unsplash.com/photo-1571875257727-256c39da42af?w=600&h=600&fit=crop" alt="Serum"></div>
            <div class="slide"><img src="https://images.unsplash.com/photo-1612817288484-6f916006741a?w=600&h=600&fit=crop" alt="Night Cream"></div>
            <div class="slide"><img src="https://images.unsplash.com/photo-1620916566398-39f1143ab7be?w=600&h=600&fit=crop" alt="Cleanser"></div>
            <div class="slide"><img src="https://images.unsplash.com/photo-1598440947619-2c35fc9aa908?w=600&h=600&fit=crop" alt="Hair Mask"></div>
          </div>
          <div class="slider-controls">
            <button class="slider-btn prev-btn" aria-label="Previous">‹</button>
            <button class="slider-btn next-btn" aria-label="Next">›</button>
          </div>
          <div class="slider-dots">
            <span class="dot active" data-slide="0"></span>
            <span class="dot" data-slide="1"></span>
            <span class="dot" data-slide="2"></span>
            <span class="dot" data-slide="3"></span>
            <span class="dot" data-slide="4"></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ── FEATURED PRODUCTS ────────────────────────────────── -->
<section class="featured-products">
  <div class="container">
    <h2 class="section-title">Featured Products</h2>
    <div class="products-grid">
      <?php foreach ($featured as $p): ?>
      <div class="product-card"
           data-id="<?= $p['id'] ?>"
           data-name="<?= htmlspecialchars($p['name']) ?>"
           data-price="<?= $p['price'] ?>">
        <div class="product-image">
          <img src="<?= htmlspecialchars($p['image_url']) ?>" alt="<?= htmlspecialchars($p['name']) ?>">
        </div>
        <div class="product-info">
          <h3><?= htmlspecialchars($p['name']) ?></h3>
          <p class="product-price">$<?= number_format($p['price'], 2) ?></p>
          <a href="#" class="btn btn-small add-to-cart-btn">Add to Cart</a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <div style="text-align:center;margin-top:2.5rem;">
      <a href="products.php" class="btn btn-primary">View All Products</a>
    </div>
  </div>
</section>

<!-- ── BENEFITS ─────────────────────────────────────────── -->
<section class="benefits">
  <div class="container">
    <h2 class="section-title">Why Choose Us</h2>
    <div class="benefits-grid">
      <div class="benefit-item"><div class="benefit-icon">🌿</div><h3>Natural Ingredients</h3><p>100% organic ingredients sourced from trusted suppliers worldwide.</p></div>
      <div class="benefit-item"><div class="benefit-icon">✨</div><h3>Premium Quality</h3><p>Laboratory-tested products ensuring the highest quality standards.</p></div>
      <div class="benefit-item"><div class="benefit-icon">💚</div><h3>Cruelty-Free</h3><p>All products are cruelty-free and environmentally conscious.</p></div>
      <div class="benefit-item"><div class="benefit-icon">🚚</div><h3>Free Shipping</h3><p>Free shipping on all orders over $50 worldwide.</p></div>
    </div>
  </div>
</section>

<!-- ── DIY RECIPES PREVIEW ──────────────────────────────── -->
<section class="diy-recipes">
  <div class="container">
    <h2 class="section-title">DIY Recipes</h2>
    <p style="text-align:center;color:var(--text-light);font-size:1.1rem;margin-bottom:3rem;max-width:700px;margin-left:auto;margin-right:auto;">
      Create natural beauty products at home with our easy-to-follow DIY recipes.
    </p>
    <div class="recipes-grid">
      <div class="recipe-card">
        <div class="recipe-image"><img src="https://images.unsplash.com/photo-1608248543803-ba4f8c70ae0b?w=400&h=300&fit=crop" alt="Honey Face Mask"></div>
        <div class="recipe-info"><h3>Honey & Oat Face Mask</h3><p class="recipe-time">⏱ 15 minutes</p><p class="recipe-description">A soothing mask perfect for dry and sensitive skin.</p><a href="diy-recipes.php" class="btn btn-small">View Recipe</a></div>
      </div>
      <div class="recipe-card">
        <div class="recipe-image"><img src="https://images.unsplash.com/photo-1612817288484-6f916006741a?w=400&h=300&fit=crop" alt="Coffee Scrub"></div>
        <div class="recipe-info"><h3>Coffee Body Scrub</h3><p class="recipe-time">⏱ 10 minutes</p><p class="recipe-description">Exfoliate and energize your skin with this invigorating scrub.</p><a href="diy-recipes.php" class="btn btn-small">View Recipe</a></div>
      </div>
      <div class="recipe-card">
        <div class="recipe-image"><img src="https://images.unsplash.com/photo-1620916566398-39f1143ab7be?w=400&h=300&fit=crop" alt="Avocado Hair Mask"></div>
        <div class="recipe-info"><h3>Avocado Hair Mask</h3><p class="recipe-time">⏱ 20 minutes</p><p class="recipe-description">Nourish your hair with this deep conditioning mask.</p><a href="diy-recipes.php" class="btn btn-small">View Recipe</a></div>
      </div>
      <div class="recipe-card">
        <div class="recipe-image"><img src="https://images.unsplash.com/photo-1556228720-195a672e8a03?w=400&h=300&fit=crop" alt="Green Tea Toner"></div>
        <div class="recipe-info"><h3>Green Tea Face Toner</h3><p class="recipe-time">⏱ 5 minutes</p><p class="recipe-description">Refresh and balance your skin with this simple toner.</p><a href="diy-recipes.php" class="btn btn-small">View Recipe</a></div>
      </div>
    </div>
    <div style="text-align:center;margin-top:3rem;">
      <a href="diy-recipes.php" class="btn btn-primary">View All Recipes</a>
    </div>
  </div>
</section>

<!-- ── TESTIMONIALS ──────────────────────────────────────── -->
<section class="testimonials">
  <div class="container">
    <h2 class="section-title">What Our Customers Say</h2>
    <div class="testimonials-grid">
      <div class="testimonial-card"><div class="stars">★★★★★</div><p>"Amazing products! My skin has never looked better. Highly recommend!"</p><div class="testimonial-author">— Sarah Johnson</div></div>
      <div class="testimonial-card"><div class="stars">★★★★★</div><p>"The best skincare products I've ever used. Worth every penny!"</p><div class="testimonial-author">— Emily Davis</div></div>
      <div class="testimonial-card"><div class="stars">★★★★★</div><p>"Natural, effective, and affordable. What more could you ask for?"</p><div class="testimonial-author">— Maria Garcia</div></div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
<script src="script.js"></script>
</body>
</html>
