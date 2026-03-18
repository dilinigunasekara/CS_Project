<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Face Care Recipes - Beauty Care</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php include 'navbar.php'; ?>

<section class="page-header">
  <div class="container">
    <h1>🌸 Face Care Recipes</h1>
    <p>Natural homemade treatments for a glowing, healthy complexion</p>
  </div>
</section>

<section style="background:var(--white);padding:2rem 0 0;">
  <div class="container">
    <div class="category-filter" style="justify-content:center;">
      <a href="diy-recipes.php" class="filter-btn">All Recipes</a>
      <a href="face.php"        class="filter-btn active">Face Care</a>
      <a href="hair.php"        class="filter-btn">Hair Care</a>
      <a href="body.php"        class="filter-btn">Body Care</a>
      <a href="drinks.php"      class="filter-btn">Beauty Drinks</a>
      <a href="oil.php"         class="filter-btn">Oils</a>
    </div>
  </div>
</section>

<section class="page-content">
  <div class="container">
    <div class="recipes-grid">

      <!-- Recipe 1 -->
      <div class="recipe-card-expandable">
        <div class="recipe-card-preview">
          <div class="recipe-image"><img src="https://images.unsplash.com/photo-1608248543803-ba4f8c70ae0b?w=600&h=300&fit=crop" alt="Honey Mask"></div>
          <div class="recipe-info">
            <h3>Honey & Oat Face Mask</h3>
            <div class="recipe-meta-preview"><span>⏱ 15 min</span><span>😊 All Skin</span></div>
            <p class="recipe-description">Classic soothing mask for dry and sensitive skin. Honey moisturises, oats calm redness.</p>
            <a href="#" class="btn btn-small see-more-btn" data-recipe="f1">See Full Recipe ↓</a>
          </div>
        </div>
        <div class="recipe-details-expanded" id="recipe-f1">
          <div class="recipe-details-content">
            <h3>🧴 Ingredients</h3>
            <ul class="ingredients-list">
              <li>2 tbsp raw honey</li><li>2 tbsp ground oats</li>
              <li>1 tbsp plain yogurt</li><li>1 tsp lemon juice (optional)</li>
            </ul>
            <h3>📋 Instructions</h3>
            <ol class="instructions-list">
              <li>Blend oats into a fine powder.</li>
              <li>Combine all ingredients into a smooth paste.</li>
              <li>Apply to clean face, avoiding eyes.</li>
              <li>Leave for 15–20 minutes then rinse with warm water.</li>
            </ol>
            <div class="recipe-tip">💡 Use twice a week. Store remainder in the fridge for up to 3 days.</div>
            <a href="#" class="btn btn-small see-less-btn" data-recipe="f1" style="margin-top:1.5rem;display:inline-block;">↑ See Less</a>
          </div>
        </div>
      </div>

      <!-- Recipe 2 -->
      <div class="recipe-card-expandable">
        <div class="recipe-card-preview">
          <div class="recipe-image"><img src="https://images.unsplash.com/photo-1556228720-195a672e8a03?w=600&h=300&fit=crop" alt="Green Tea Toner"></div>
          <div class="recipe-info">
            <h3>Green Tea Toner</h3>
            <div class="recipe-meta-preview"><span>⏱ 5 min</span><span>🔴 Oily Skin</span></div>
            <p class="recipe-description">Antioxidant-rich toner that tightens pores and controls shine throughout the day.</p>
            <a href="#" class="btn btn-small see-more-btn" data-recipe="f2">See Full Recipe ↓</a>
          </div>
        </div>
        <div class="recipe-details-expanded" id="recipe-f2">
          <div class="recipe-details-content">
            <h3>🧴 Ingredients</h3>
            <ul class="ingredients-list">
              <li>1 green tea bag</li><li>1 cup cooled boiled water</li>
              <li>2 tbsp witch hazel</li><li>3 drops tea tree oil (optional)</li>
            </ul>
            <h3>📋 Instructions</h3>
            <ol class="instructions-list">
              <li>Steep tea in hot water 5 minutes; cool completely.</li>
              <li>Mix with witch hazel in a spray bottle.</li>
              <li>Add tea tree oil and shake gently.</li>
              <li>Apply with cotton pad after cleansing. No rinse needed.</li>
            </ol>
            <div class="recipe-tip">💡 Keep refrigerated for up to 1 week. Cold application shrinks pores even more!</div>
            <a href="#" class="btn btn-small see-less-btn" data-recipe="f2" style="margin-top:1.5rem;display:inline-block;">↑ See Less</a>
          </div>
        </div>
      </div>

      <!-- Recipe 3 -->
      <div class="recipe-card-expandable">
        <div class="recipe-card-preview">
          <div class="recipe-image"><img src="https://images.unsplash.com/photo-1571875257727-256c39da42af?w=600&h=300&fit=crop" alt="Turmeric Mask"></div>
          <div class="recipe-info">
            <h3>Turmeric Brightening Mask</h3>
            <div class="recipe-meta-preview"><span>⏱ 20 min</span><span>✨ Glow</span></div>
            <p class="recipe-description">Fight dark spots and dullness with anti-inflammatory turmeric and brightening lemon.</p>
            <a href="#" class="btn btn-small see-more-btn" data-recipe="f3">See Full Recipe ↓</a>
          </div>
        </div>
        <div class="recipe-details-expanded" id="recipe-f3">
          <div class="recipe-details-content">
            <h3>🧴 Ingredients</h3>
            <ul class="ingredients-list">
              <li>1 tsp turmeric powder</li><li>2 tbsp chickpea flour (besan)</li>
              <li>1 tbsp honey</li><li>2 tbsp plain yogurt</li>
            </ul>
            <h3>📋 Instructions</h3>
            <ol class="instructions-list">
              <li>Mix all ingredients into a thick paste.</li>
              <li>Apply to clean face and neck.</li>
              <li>Leave on for 15–20 minutes until dry.</li>
              <li>Wet hands and massage gently before rinsing off.</li>
            </ol>
            <div class="recipe-tip">💡 Warning: turmeric can temporarily stain skin yellow — this fades within an hour. Don't use on white towels!</div>
            <a href="#" class="btn btn-small see-less-btn" data-recipe="f3" style="margin-top:1.5rem;display:inline-block;">↑ See Less</a>
          </div>
        </div>
      </div>

      <!-- Recipe 4 -->
      <div class="recipe-card-expandable">
        <div class="recipe-card-preview">
          <div class="recipe-image"><img src="https://images.unsplash.com/photo-1556229010-6c3f2c9ca5f8?w=600&h=300&fit=crop" alt="Aloe Vera Moisturiser"></div>
          <div class="recipe-info">
            <h3>Aloe Vera Night Moisturiser</h3>
            <div class="recipe-meta-preview"><span>⏱ 5 min</span><span>💧 Dry Skin</span></div>
            <p class="recipe-description">A light, calming overnight moisturiser using fresh aloe vera and vitamin E.</p>
            <a href="#" class="btn btn-small see-more-btn" data-recipe="f4">See Full Recipe ↓</a>
          </div>
        </div>
        <div class="recipe-details-expanded" id="recipe-f4">
          <div class="recipe-details-content">
            <h3>🧴 Ingredients</h3>
            <ul class="ingredients-list">
              <li>3 tbsp fresh aloe vera gel</li><li>1 tsp jojoba oil</li>
              <li>2 vitamin E capsules (pierce and squeeze out)</li><li>3 drops lavender essential oil</li>
            </ul>
            <h3>📋 Instructions</h3>
            <ol class="instructions-list">
              <li>Scoop fresh aloe gel into a small bowl.</li>
              <li>Add jojoba oil, vitamin E, and lavender oil.</li>
              <li>Whisk together with a fork until blended.</li>
              <li>Apply a thin layer to face before bed.</li>
            </ol>
            <div class="recipe-tip">💡 Use fresh aloe for best results. Store in a sealed jar in the fridge for up to 5 days.</div>
            <a href="#" class="btn btn-small see-less-btn" data-recipe="f4" style="margin-top:1.5rem;display:inline-block;">↑ See Less</a>
          </div>
        </div>
      </div>

    </div>

    <div style="text-align:center;margin-top:2.5rem;">
      <a href="products.php?cat=face" class="btn btn-primary">Shop Face Care Products</a>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
<script src="script.js"></script>
</body>
</html>
