<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hair Care Recipes - Beauty Care</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php include 'navbar.php'; ?>

<section class="page-header">
  <div class="container">
    <h1>💇 Hair Care Recipes</h1>
    <p>Restore shine, strength, and health to your hair naturally</p>
  </div>
</section>

<section style="background:var(--white);padding:2rem 0 0;">
  <div class="container">
    <div class="category-filter" style="justify-content:center;">
      <a href="diy-recipes.php" class="filter-btn">All Recipes</a>
      <a href="face.php"        class="filter-btn">Face Care</a>
      <a href="hair.php"        class="filter-btn active">Hair Care</a>
      <a href="body.php"        class="filter-btn">Body Care</a>
      <a href="drinks.php"      class="filter-btn">Beauty Drinks</a>
      <a href="oil.php"         class="filter-btn">Oils</a>
    </div>
  </div>
</section>

<section class="page-content">
  <div class="container">
    <div class="recipes-grid">

      <div class="recipe-card-expandable">
        <div class="recipe-card-preview">
          <div class="recipe-image"><img src="https://images.unsplash.com/photo-1620916566398-39f1143ab7be?w=600&h=300&fit=crop" alt="Avocado Mask"></div>
          <div class="recipe-info">
            <h3>Avocado Deep Conditioning Mask</h3>
            <div class="recipe-meta-preview"><span>⏱ 20 min</span><span>🥑 Natural</span><span>💧 Dry Hair</span></div>
            <p class="recipe-description">Rich, intensely moisturising mask to rescue dry, brittle, and heat-damaged hair.</p>
            <a href="#" class="btn btn-small see-more-btn" data-recipe="h1">See Full Recipe ↓</a>
          </div>
        </div>
        <div class="recipe-details-expanded" id="recipe-h1">
          <div class="recipe-details-content">
            <h3>🧴 Ingredients</h3>
            <ul class="ingredients-list">
              <li>1 ripe avocado</li><li>2 tbsp coconut oil (melted)</li>
              <li>1 tbsp honey</li><li>1 egg yolk</li>
            </ul>
            <h3>📋 Instructions</h3>
            <ol class="instructions-list">
              <li>Mash avocado until completely smooth.</li>
              <li>Mix in coconut oil, honey, and egg yolk.</li>
              <li>Apply to damp hair, root to tip.</li>
              <li>Cover with a shower cap for 20–30 minutes.</li>
              <li>Rinse with cool water, then shampoo as usual.</li>
            </ol>
            <div class="recipe-tip">💡 Use weekly. Results are noticeable after just 2–3 treatments.</div>
            <a href="#" class="btn btn-small see-less-btn" data-recipe="h1" style="margin-top:1.5rem;display:inline-block;">↑ See Less</a>
          </div>
        </div>
      </div>

      <div class="recipe-card-expandable">
        <div class="recipe-card-preview">
          <div class="recipe-image"><img src="https://images.unsplash.com/photo-1515377905703-c4788e51af15?w=600&h=300&fit=crop" alt="Argan Serum"></div>
          <div class="recipe-info">
            <h3>DIY Argan Oil Frizz Serum</h3>
            <div class="recipe-meta-preview"><span>⏱ 5 min</span><span>✨ Shine</span><span>🌀 Frizzy Hair</span></div>
            <p class="recipe-description">Lightweight serum to tame flyaways and add brilliant shine to any hair type.</p>
            <a href="#" class="btn btn-small see-more-btn" data-recipe="h2">See Full Recipe ↓</a>
          </div>
        </div>
        <div class="recipe-details-expanded" id="recipe-h2">
          <div class="recipe-details-content">
            <h3>🧴 Ingredients</h3>
            <ul class="ingredients-list">
              <li>2 tbsp argan oil</li><li>1 tbsp jojoba oil</li>
              <li>5 drops lavender essential oil</li><li>3 drops rosemary essential oil</li>
            </ul>
            <h3>📋 Instructions</h3>
            <ol class="instructions-list">
              <li>Combine all oils in a small dropper bottle. Shake well.</li>
              <li>Apply 2–3 drops to palms and rub together.</li>
              <li>Smooth through damp or dry hair, focusing on ends.</li>
              <li>Style as usual — no rinsing needed.</li>
            </ol>
            <div class="recipe-tip">💡 Start with 1 drop for fine hair to avoid greasiness.</div>
            <a href="#" class="btn btn-small see-less-btn" data-recipe="h2" style="margin-top:1.5rem;display:inline-block;">↑ See Less</a>
          </div>
        </div>
      </div>

      <div class="recipe-card-expandable">
        <div class="recipe-card-preview">
          <div class="recipe-image"><img src="https://images.unsplash.com/photo-1598440947619-2c35fc9aa908?w=600&h=300&fit=crop" alt="Scalp Scrub"></div>
          <div class="recipe-info">
            <h3>Brown Sugar Scalp Scrub</h3>
            <div class="recipe-meta-preview"><span>⏱ 10 min</span><span>🌿 Natural</span><span>🧖 Dandruff</span></div>
            <p class="recipe-description">Exfoliate your scalp to remove buildup and stimulate healthy hair growth.</p>
            <a href="#" class="btn btn-small see-more-btn" data-recipe="h3">See Full Recipe ↓</a>
          </div>
        </div>
        <div class="recipe-details-expanded" id="recipe-h3">
          <div class="recipe-details-content">
            <h3>🧴 Ingredients</h3>
            <ul class="ingredients-list">
              <li>3 tbsp brown sugar</li><li>2 tbsp coconut oil</li>
              <li>1 tbsp apple cider vinegar</li><li>5 drops peppermint essential oil</li>
            </ul>
            <h3>📋 Instructions</h3>
            <ol class="instructions-list">
              <li>Mix all ingredients in a bowl.</li>
              <li>Section damp hair and apply directly to scalp.</li>
              <li>Massage gently in circular motions for 3–5 minutes.</li>
              <li>Leave on for 5 minutes, then rinse thoroughly.</li>
              <li>Shampoo and condition as normal.</li>
            </ol>
            <div class="recipe-tip">💡 Use once a week. The peppermint oil stimulates circulation and promotes growth.</div>
            <a href="#" class="btn btn-small see-less-btn" data-recipe="h3" style="margin-top:1.5rem;display:inline-block;">↑ See Less</a>
          </div>
        </div>
      </div>

      <div class="recipe-card-expandable">
        <div class="recipe-card-preview">
          <div class="recipe-image"><img src="https://images.unsplash.com/photo-1556228578-0d85b1a4d571?w=600&h=300&fit=crop" alt="Egg Protein Mask"></div>
          <div class="recipe-info">
            <h3>Egg Protein Strengthening Mask</h3>
            <div class="recipe-meta-preview"><span>⏱ 25 min</span><span>💪 Strength</span><span>🔴 Damaged Hair</span></div>
            <p class="recipe-description">Rebuild weak, over-processed hair with a protein-packed egg and olive oil treatment.</p>
            <a href="#" class="btn btn-small see-more-btn" data-recipe="h4">See Full Recipe ↓</a>
          </div>
        </div>
        <div class="recipe-details-expanded" id="recipe-h4">
          <div class="recipe-details-content">
            <h3>🧴 Ingredients</h3>
            <ul class="ingredients-list">
              <li>2 whole eggs</li><li>2 tbsp olive oil</li>
              <li>1 tbsp apple cider vinegar</li><li>1 tbsp honey</li>
            </ul>
            <h3>📋 Instructions</h3>
            <ol class="instructions-list">
              <li>Whisk eggs in a bowl until fluffy.</li>
              <li>Add olive oil, vinegar, and honey. Mix well.</li>
              <li>Apply from roots to ends on dry or damp hair.</li>
              <li>Leave on for 20–25 minutes.</li>
              <li>Rinse with COOL water (warm water will cook the egg!).</li>
              <li>Shampoo twice to fully remove.</li>
            </ol>
            <div class="recipe-tip">💡 Always use cool water to rinse — this is critical to prevent scrambled egg in your hair!</div>
            <a href="#" class="btn btn-small see-less-btn" data-recipe="h4" style="margin-top:1.5rem;display:inline-block;">↑ See Less</a>
          </div>
        </div>
      </div>

    </div>

    <div style="text-align:center;margin-top:2.5rem;">
      <a href="products.php?cat=hair" class="btn btn-primary">Shop Hair Care Products</a>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
<script src="script.js"></script>
</body>
</html>
