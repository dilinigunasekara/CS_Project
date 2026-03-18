<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Body Care Recipes - Beauty Care</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php include 'navbar.php'; ?>

<section class="page-header">
  <div class="container">
    <h1>🧖 Body Care Recipes</h1>
    <p>Pamper your skin from head to toe with these natural body treatments</p>
  </div>
</section>

<section style="background:var(--white);padding:2rem 0 0;">
  <div class="container">
    <div class="category-filter" style="justify-content:center;">
      <a href="diy-recipes.php" class="filter-btn">All Recipes</a>
      <a href="face.php"        class="filter-btn">Face Care</a>
      <a href="hair.php"        class="filter-btn">Hair Care</a>
      <a href="body.php"        class="filter-btn active">Body Care</a>
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
          <div class="recipe-image"><img src="https://images.unsplash.com/photo-1608248543803-ba4f8c70ae0b?w=600&h=300&fit=crop" alt="Coffee Scrub"></div>
          <div class="recipe-info">
            <h3>Energising Coffee Body Scrub</h3>
            <div class="recipe-meta-preview"><span>⏱ 10 min</span><span>☕ Exfoliating</span><span>✨ Glow</span></div>
            <p class="recipe-description">Fight cellulite and smooth rough skin with this invigorating coffee and coconut scrub.</p>
            <a href="#" class="btn btn-small see-more-btn" data-recipe="b1">See Full Recipe ↓</a>
          </div>
        </div>
        <div class="recipe-details-expanded" id="recipe-b1">
          <div class="recipe-details-content">
            <h3>🧴 Ingredients</h3>
            <ul class="ingredients-list">
              <li>½ cup ground coffee (used grounds work great)</li>
              <li>¼ cup coconut oil (melted)</li>
              <li>¼ cup brown sugar</li>
              <li>1 tsp vanilla extract</li>
            </ul>
            <h3>📋 Instructions</h3>
            <ol class="instructions-list">
              <li>Mix all ingredients together in a bowl.</li>
              <li>In the shower, apply to wet skin using circular motions.</li>
              <li>Focus on rough areas: elbows, knees, and heels.</li>
              <li>Massage for 2–3 minutes, then rinse thoroughly.</li>
              <li>Pat dry and apply a body lotion to lock in moisture.</li>
            </ol>
            <div class="recipe-tip">💡 Coffees caffeine temporarily tightens skin and reduces the appearance of cellulite. Use 2–3 times a week for best results.</div>
            <a href="#" class="btn btn-small see-less-btn" data-recipe="b1" style="margin-top:1.5rem;display:inline-block;">↑ See Less</a>
          </div>
        </div>
      </div>

      <div class="recipe-card-expandable">
        <div class="recipe-card-preview">
          <div class="recipe-image"><img src="https://images.unsplash.com/photo-1556228578-0d85b1a4d571?w=600&h=300&fit=crop" alt="Shea Butter Lotion"></div>
          <div class="recipe-info">
            <h3>Whipped Shea Body Butter</h3>
            <div class="recipe-meta-preview"><span>⏱ 15 min</span><span>💧 Ultra Moisturising</span></div>
            <p class="recipe-description">A luxuriously rich body butter that melts into skin and keeps it soft for hours.</p>
            <a href="#" class="btn btn-small see-more-btn" data-recipe="b2">See Full Recipe ↓</a>
          </div>
        </div>
        <div class="recipe-details-expanded" id="recipe-b2">
          <div class="recipe-details-content">
            <h3>🧴 Ingredients</h3>
            <ul class="ingredients-list">
              <li>½ cup raw shea butter</li><li>¼ cup coconut oil</li>
              <li>¼ cup almond oil</li><li>10 drops lavender essential oil</li>
            </ul>
            <h3>📋 Instructions</h3>
            <ol class="instructions-list">
              <li>Melt shea butter and coconut oil together gently (microwave or double boiler).</li>
              <li>Allow to cool until solid but soft (refrigerate for 30 min to speed this up).</li>
              <li>Add almond oil and lavender. Whip with a hand mixer until fluffy — about 5 minutes.</li>
              <li>Transfer to a clean jar. Apply to skin after showering.</li>
            </ol>
            <div class="recipe-tip">💡 Stores at room temperature for 2 months. Melts in hot weather — keep in a cool spot or refrigerate.</div>
            <a href="#" class="btn btn-small see-less-btn" data-recipe="b2" style="margin-top:1.5rem;display:inline-block;">↑ See Less</a>
          </div>
        </div>
      </div>

      <div class="recipe-card-expandable">
        <div class="recipe-card-preview">
          <div class="recipe-image"><img src="https://images.unsplash.com/photo-1612817288484-6f916006741a?w=600&h=300&fit=crop" alt="Milk Bath"></div>
          <div class="recipe-info">
            <h3>Cleopatra's Milk Bath Soak</h3>
            <div class="recipe-meta-preview"><span>⏱ 30 min soak</span><span>🛁 Relaxing</span><span>✨ Skin Brightening</span></div>
            <p class="recipe-description">Soften and brighten your entire body with a luxurious milk and honey bath soak.</p>
            <a href="#" class="btn btn-small see-more-btn" data-recipe="b3">See Full Recipe ↓</a>
          </div>
        </div>
        <div class="recipe-details-expanded" id="recipe-b3">
          <div class="recipe-details-content">
            <h3>🧴 Ingredients</h3>
            <ul class="ingredients-list">
              <li>2 cups whole milk powder (or 4 cups liquid whole milk)</li>
              <li>½ cup honey</li>
              <li>½ cup Epsom salt</li>
              <li>10 drops rose essential oil</li>
            </ul>
            <h3>📋 Instructions</h3>
            <ol class="instructions-list">
              <li>Run a warm (not hot) bath.</li>
              <li>Add milk powder, honey, and Epsom salt to the running water.</li>
              <li>Add rose essential oil and stir the water with your hand.</li>
              <li>Soak for 20–30 minutes.</li>
              <li>Gently pat dry and apply moisturiser.</li>
            </ol>
            <div class="recipe-tip">💡 The lactic acid in milk gently exfoliates while honey hydrates. Your skin will feel incredibly soft!</div>
            <a href="#" class="btn btn-small see-less-btn" data-recipe="b3" style="margin-top:1.5rem;display:inline-block;">↑ See Less</a>
          </div>
        </div>
      </div>

      <div class="recipe-card-expandable">
        <div class="recipe-card-preview">
          <div class="recipe-image"><img src="https://images.unsplash.com/photo-1620916566398-39f1143ab7be?w=600&h=300&fit=crop" alt="Sugar Lip Scrub"></div>
          <div class="recipe-info">
            <h3>Vanilla Sugar Lip Scrub</h3>
            <div class="recipe-meta-preview"><span>⏱ 5 min</span><span>👄 Lips</span><span>🍬 Edible!</span></div>
            <p class="recipe-description">Exfoliate chapped lips and leave them pillowy soft with this delicious vanilla scrub.</p>
            <a href="#" class="btn btn-small see-more-btn" data-recipe="b4">See Full Recipe ↓</a>
          </div>
        </div>
        <div class="recipe-details-expanded" id="recipe-b4">
          <div class="recipe-details-content">
            <h3>🧴 Ingredients</h3>
            <ul class="ingredients-list">
              <li>1 tbsp white sugar</li><li>1 tsp honey</li>
              <li>1 tsp coconut oil</li><li>½ tsp vanilla extract</li>
            </ul>
            <h3>📋 Instructions</h3>
            <ol class="instructions-list">
              <li>Mix all ingredients in a small bowl or jar.</li>
              <li>Apply a small amount to lips.</li>
              <li>Gently scrub in circular motions for 1–2 minutes.</li>
              <li>Lick off or rinse with warm water.</li>
              <li>Follow with a lip balm or a drop of coconut oil.</li>
            </ol>
            <div class="recipe-tip">💡 100% edible — safe if swallowed! Store in a small jar for up to 2 weeks.</div>
            <a href="#" class="btn btn-small see-less-btn" data-recipe="b4" style="margin-top:1.5rem;display:inline-block;">↑ See Less</a>
          </div>
        </div>
      </div>

    </div>

    <div style="text-align:center;margin-top:2.5rem;">
      <a href="products.php?cat=body" class="btn btn-primary">Shop Body Care Products</a>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
<script src="script.js"></script>
</body>
</html>
