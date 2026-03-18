<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beauty Drinks - Beauty Care</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php include 'navbar.php'; ?>

<section class="page-header">
  <div class="container">
    <h1>🥤 Beauty Drinks</h1>
    <p>Glow from the inside out — nourishing drinks for radiant skin and hair</p>
  </div>
</section>

<section style="background:var(--white);padding:2rem 0 0;">
  <div class="container">
    <div class="category-filter" style="justify-content:center;">
      <a href="diy-recipes.php" class="filter-btn">All Recipes</a>
      <a href="face.php"        class="filter-btn">Face Care</a>
      <a href="hair.php"        class="filter-btn">Hair Care</a>
      <a href="body.php"        class="filter-btn">Body Care</a>
      <a href="drinks.php"      class="filter-btn active">Beauty Drinks</a>
      <a href="oil.php"         class="filter-btn">Oils</a>
    </div>
  </div>
</section>

<!-- Intro Banner -->
<section style="background:var(--secondary-color);padding:3rem 0;">
  <div class="container" style="text-align:center;max-width:700px;">
    <h2 style="font-size:1.6rem;margin-bottom:1rem;">Beauty Starts from Within</h2>
    <p style="color:var(--text-light);line-height:1.8;">
      What you eat and drink directly impacts your skin, hair, and nails.
      These drinks are packed with vitamins, antioxidants, and collagen-boosting nutrients
      that complement your external skincare routine perfectly.
    </p>
  </div>
</section>

<section class="page-content">
  <div class="container">
    <div class="recipes-grid">

      <div class="recipe-card-expandable">
        <div class="recipe-card-preview">
          <div class="recipe-image"><img src="https://images.unsplash.com/photo-1556228720-195a672e8a03?w=600&h=300&fit=crop" alt="Golden Milk"></div>
          <div class="recipe-info">
            <h3>Golden Glow Turmeric Latte</h3>
            <div class="recipe-meta-preview"><span>⏱ 5 min</span><span>🌟 Anti-Inflammatory</span><span>✨ Skin Glow</span></div>
            <p class="recipe-description">Anti-inflammatory golden milk that fights acne, reduces redness, and gives skin an inner glow.</p>
            <a href="#" class="btn btn-small see-more-btn" data-recipe="d1">See Full Recipe ↓</a>
          </div>
        </div>
        <div class="recipe-details-expanded" id="recipe-d1">
          <div class="recipe-details-content">
            <h3>🧴 Ingredients</h3>
            <ul class="ingredients-list">
              <li>1 cup oat milk (or any plant milk)</li><li>1 tsp turmeric powder</li>
              <li>½ tsp cinnamon</li><li>¼ tsp ginger powder</li>
              <li>1 tsp honey or maple syrup</li><li>Pinch of black pepper (activates turmeric)</li>
            </ul>
            <h3>📋 Instructions</h3>
            <ol class="instructions-list">
              <li>Warm the milk in a saucepan over medium heat — don't boil.</li>
              <li>Whisk in turmeric, cinnamon, and ginger.</li>
              <li>Add honey and black pepper. Stir well.</li>
              <li>Pour into a mug and enjoy warm.</li>
            </ol>
            <div class="recipe-tip">💡 Drink nightly before bed. The black pepper increases turmeric absorption by up to 2000%!</div>
            <a href="#" class="btn btn-small see-less-btn" data-recipe="d1" style="margin-top:1.5rem;display:inline-block;">↑ See Less</a>
          </div>
        </div>
      </div>

      <div class="recipe-card-expandable">
        <div class="recipe-card-preview">
          <div class="recipe-image"><img src="https://images.unsplash.com/photo-1571875257727-256c39da42af?w=600&h=300&fit=crop" alt="Collagen Smoothie"></div>
          <div class="recipe-info">
            <h3>Collagen-Boosting Berry Smoothie</h3>
            <div class="recipe-meta-preview"><span>⏱ 5 min</span><span>🫐 Antioxidants</span><span>💪 Anti-Aging</span></div>
            <p class="recipe-description">Loaded with Vitamin C and antioxidants to stimulate natural collagen production for firm, youthful skin.</p>
            <a href="#" class="btn btn-small see-more-btn" data-recipe="d2">See Full Recipe ↓</a>
          </div>
        </div>
        <div class="recipe-details-expanded" id="recipe-d2">
          <div class="recipe-details-content">
            <h3>🧴 Ingredients</h3>
            <ul class="ingredients-list">
              <li>1 cup mixed berries (blueberry, strawberry, raspberry)</li>
              <li>½ banana</li><li>1 tbsp chia seeds</li>
              <li>1 cup almond milk</li><li>1 tbsp honey</li>
              <li>1 tsp vitamin C powder (optional)</li>
            </ul>
            <h3>📋 Instructions</h3>
            <ol class="instructions-list">
              <li>Add all ingredients to a blender.</li>
              <li>Blend on high for 60 seconds until smooth.</li>
              <li>Taste and adjust sweetness with more honey if needed.</li>
              <li>Pour and enjoy immediately.</li>
            </ol>
            <div class="recipe-tip">💡 Vitamin C is essential for collagen synthesis. Berries are among the highest natural sources.</div>
            <a href="#" class="btn btn-small see-less-btn" data-recipe="d2" style="margin-top:1.5rem;display:inline-block;">↑ See Less</a>
          </div>
        </div>
      </div>

      <div class="recipe-card-expandable">
        <div class="recipe-card-preview">
          <div class="recipe-image"><img src="https://images.unsplash.com/photo-1608248543803-ba4f8c70ae0b?w=600&h=300&fit=crop" alt="Green Detox Juice"></div>
          <div class="recipe-info">
            <h3>Skin Detox Green Juice</h3>
            <div class="recipe-meta-preview"><span>⏱ 10 min</span><span>🌿 Detox</span><span>💚 Clear Skin</span></div>
            <p class="recipe-description">A powerful green juice that flushes toxins, clears breakouts, and gives skin a fresh glow.</p>
            <a href="#" class="btn btn-small see-more-btn" data-recipe="d3">See Full Recipe ↓</a>
          </div>
        </div>
        <div class="recipe-details-expanded" id="recipe-d3">
          <div class="recipe-details-content">
            <h3>🧴 Ingredients</h3>
            <ul class="ingredients-list">
              <li>2 cups spinach or kale</li><li>1 cucumber</li>
              <li>2 stalks celery</li><li>1 green apple</li>
              <li>½ lemon (juiced)</li><li>1 inch fresh ginger</li>
            </ul>
            <h3>📋 Instructions</h3>
            <ol class="instructions-list">
              <li>Wash all produce thoroughly.</li>
              <li>Chop into pieces that fit your juicer or blender.</li>
              <li>Juice or blend all ingredients together.</li>
              <li>If blending, strain through a fine mesh sieve.</li>
              <li>Serve over ice and drink immediately.</li>
            </ol>
            <div class="recipe-tip">💡 Drink this on an empty stomach in the morning for maximum skin-clearing benefits.</div>
            <a href="#" class="btn btn-small see-less-btn" data-recipe="d3" style="margin-top:1.5rem;display:inline-block;">↑ See Less</a>
          </div>
        </div>
      </div>

      <div class="recipe-card-expandable">
        <div class="recipe-card-preview">
          <div class="recipe-image"><img src="https://images.unsplash.com/photo-1556228578-0d85b1a4d571?w=600&h=300&fit=crop" alt="Rose Water Drink"></div>
          <div class="recipe-info">
            <h3>Rose & Hibiscus Beauty Water</h3>
            <div class="recipe-meta-preview"><span>⏱ 10 min</span><span>🌹 Hydrating</span><span>🩷 Anti-Aging</span></div>
            <p class="recipe-description">A fragrant, naturally pink hydration drink packed with antioxidants that fight skin aging.</p>
            <a href="#" class="btn btn-small see-more-btn" data-recipe="d4">See Full Recipe ↓</a>
          </div>
        </div>
        <div class="recipe-details-expanded" id="recipe-d4">
          <div class="recipe-details-content">
            <h3>🧴 Ingredients</h3>
            <ul class="ingredients-list">
              <li>3 dried hibiscus flowers (or 1 hibiscus tea bag)</li>
              <li>1 tbsp dried rose petals (food grade)</li>
              <li>2 cups hot water</li><li>1 tbsp honey</li>
              <li>½ lemon, juiced</li><li>Fresh mint to garnish</li>
            </ul>
            <h3>📋 Instructions</h3>
            <ol class="instructions-list">
              <li>Steep hibiscus and rose petals in hot water for 10 minutes.</li>
              <li>Strain and allow to cool to room temperature.</li>
              <li>Stir in honey and lemon juice.</li>
              <li>Serve over ice with fresh mint. Can also enjoy warm.</li>
            </ol>
            <div class="recipe-tip">💡 Hibiscus is rich in Vitamin C and alpha-hydroxy acids — the same acids used in professional skin peels.</div>
            <a href="#" class="btn btn-small see-less-btn" data-recipe="d4" style="margin-top:1.5rem;display:inline-block;">↑ See Less</a>
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
