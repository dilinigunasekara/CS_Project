<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - Beauty Care</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php include 'navbar.php'; ?>

<!-- Page Header -->
<section class="page-header">
  <div class="container">
    <h1>About Us</h1>
    <p>Our story, our mission, and the people behind Beauty Care</p>
  </div>
</section>

<!-- Our Story -->
<section class="page-content">
  <div class="container">
    <div class="about-grid">

      <div class="about-image">
        <img src="https://images.unsplash.com/photo-1556228578-0d85b1a4d571?w=700&h=500&fit=crop"
             alt="Beauty Care Story">
      </div>

      <div class="about-text">
        <h2>Our Story</h2>
        <p>
          Beauty Care was founded in 2018 with a simple belief: what you put on your skin
          matters as much as what you put in your body. We started as a small home-based
          operation crafting natural skincare remedies for friends and family.
        </p>
        <p style="margin-top:1rem;">
          Today we serve thousands of customers worldwide, but our commitment remains the
          same — honest ingredients, real results, and a love for nature's powerful gifts.
          Every product we create is formulated without harsh chemicals, synthetic fragrances,
          or anything we wouldn't feel comfortable using ourselves.
        </p>
        <p style="margin-top:1rem;">
          We believe beauty is not about perfection — it's about feeling confident and
          comfortable in your own skin. That's what drives us every single day.
        </p>
      </div>

    </div>
  </div>
</section>

<!-- Mission & Values -->
<section class="benefits" style="padding:5rem 0;">
  <div class="container">
    <h2 class="section-title">Our Values</h2>
    <div class="benefits-grid">
      <div class="benefit-item">
        <div class="benefit-icon">🌿</div>
        <h3>100% Natural</h3>
        <p>Every ingredient is carefully chosen from nature. No parabens, sulfates, or artificial preservatives — ever.</p>
      </div>
      <div class="benefit-item">
        <div class="benefit-icon">🔬</div>
        <h3>Science-Backed</h3>
        <p>Our formulations are developed with dermatologists and tested to ensure effectiveness and skin safety.</p>
      </div>
      <div class="benefit-item">
        <div class="benefit-icon">♻️</div>
        <h3>Sustainable</h3>
        <p>From recyclable packaging to eco-friendly sourcing, we make choices that are kind to the planet.</p>
      </div>
      <div class="benefit-item">
        <div class="benefit-icon">💚</div>
        <h3>Cruelty-Free</h3>
        <p>We never test on animals and never will. All our products are certified cruelty-free.</p>
      </div>
    </div>
  </div>
</section>

<!-- Meet the Team -->
<section class="page-content" style="background:var(--light-bg);">
  <div class="container">
    <h2 class="section-title">Meet the Team</h2>
    <div class="team-grid">

      <div class="team-card">
        <div class="team-image">
          <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=300&h=300&fit=crop&crop=face"
               alt="Sarah Mitchell">
        </div>
        <h3>Sarah Mitchell</h3>
        <p class="team-role">Founder & CEO</p>
        <p class="team-bio">Skincare enthusiast turned entrepreneur. Sarah's passion for natural beauty started in her grandmother's garden.</p>
      </div>

      <div class="team-card">
        <div class="team-image">
          <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=300&h=300&fit=crop&crop=face"
               alt="Dr. Emily Chen">
        </div>
        <h3>Dr. Emily Chen</h3>
        <p class="team-role">Lead Dermatologist</p>
        <p class="team-bio">Board-certified dermatologist with 12 years of experience. Emily ensures every formula is safe and effective.</p>
      </div>

      <div class="team-card">
        <div class="team-image">
          <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=300&h=300&fit=crop&crop=face"
               alt="Marcus Rivera">
        </div>
        <h3>Marcus Rivera</h3>
        <p class="team-role">Head of Formulations</p>
        <p class="team-bio">Cosmetic chemist with a love for botanical extracts. Marcus translates nature's best into your daily routine.</p>
      </div>

      <div class="team-card">
        <div class="team-image">
          <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=300&h=300&fit=crop&crop=face"
               alt="Priya Nair">
        </div>
        <h3>Priya Nair</h3>
        <p class="team-role">Customer Experience</p>
        <p class="team-bio">Priya makes sure every customer feels heard, valued, and glowing. The heart of our community.</p>
      </div>

    </div>
  </div>
</section>

<!-- Stats Banner -->
<section style="background:var(--primary-color);padding:4rem 0;color:#fff;">
  <div class="container">
    <div class="stats-grid">
      <div class="stat-item">
        <div class="stat-number">50K+</div>
        <div class="stat-label">Happy Customers</div>
      </div>
      <div class="stat-item">
        <div class="stat-number">30+</div>
        <div class="stat-label">Premium Products</div>
      </div>
      <div class="stat-item">
        <div class="stat-number">6</div>
        <div class="stat-label">Years of Excellence</div>
      </div>
      <div class="stat-item">
        <div class="stat-number">100%</div>
        <div class="stat-label">Natural Ingredients</div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="page-content">
  <div class="container" style="text-align:center;">
    <h2 style="font-size:2rem;margin-bottom:1rem;">Ready to Start Your Journey?</h2>
    <p style="color:var(--text-light);font-size:1.1rem;margin-bottom:2rem;">
      Browse our full range of natural skincare products — crafted just for you.
    </p>
    <a href="products.php" class="btn btn-primary" style="margin-right:1rem;">Shop Now</a>
    <a href="contact.php"  class="btn btn-secondary">Get in Touch</a>
  </div>
</section>

<?php include 'footer.php'; ?>
<script src="script.js"></script>
</body>
</html>
