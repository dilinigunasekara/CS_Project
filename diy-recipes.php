<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DIY Recipes - Beauty Care</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php include 'navbar.php'; ?>

<section class="page-header">
  <div class="container">
    <h1>DIY Beauty Recipes</h1>
    <p>Natural recipes you can make at home with everyday ingredients</p>
  </div>
</section>

<!-- Category Quick Links -->
<section style="background:var(--white);padding:2.5rem 0 0;">
  <div class="container">
    <div class="category-filter" style="justify-content:center;">
      <a href="diy-recipes.php" class="filter-btn active">All Recipes</a>
      <a href="face.php"        class="filter-btn">Face Care</a>
      <a href="hair.php"        class="filter-btn">Hair Care</a>
      <a href="body.php"        class="filter-btn">Body Care</a>
      <a href="drinks.php"      class="filter-btn">Beauty Drinks</a>
      <a href="oil.php"         class="filter-btn">Oils</a>
    </div>
  </div>
</section>

<section class="page-content">
  <div class="container">

    <!-- ── FACE CARE ────────────────────────────────────────── -->
    <h2 class="section-title" style="text-align:left;font-size:1.8rem;margin-bottom:2rem;">
      🌸 Face Care
    </h2>
    <div class="recipes-grid">

      <div class="recipe-card-expandable">
        <div class="recipe-card-preview">
          <div class="recipe-image">
            <img src="https://images.unsplash.com/photo-1608248543803-ba4f8c70ae0b?w=600&h=300&fit=crop" alt="Honey Face Mask">
          </div>
          <div class="recipe-info">
            <h3>Honey & Oat Face Mask</h3>
            <div class="recipe-meta-preview">
              <span>⏱ 15 min</span><span>🌿 Natural</span><span>😊 All Skin Types</span>
            </div>
            <p class="recipe-description">A deeply soothing mask for dry and sensitive skin. Honey hydrates while oats calm inflammation.</p>
            <a href="#" class="btn btn-small see-more-btn" data-recipe="face1">See Full Recipe ↓</a>
          </div>
        </div>
        <div class="recipe-details-expanded" id="recipe-face1">
          <div class="recipe-details-content">
            <h3>🧴 Ingredients</h3>
            <ul class="ingredients-list">
              <li>2 tablespoons raw honey</li>
              <li>2 tablespoons ground oats (blended rolled oats)</li>
              <li>1 tablespoon plain yogurt</li>
              <li>1 teaspoon lemon juice (optional, for brightening)</li>
            </ul>
            <h3>📋 Instructions</h3>
            <ol class="instructions-list">
              <li>Blend rolled oats into a fine powder using a blender or food processor.</li>
              <li>Mix all ingredients in a small bowl until a thick paste forms.</li>
              <li>Cleanse your face and pat dry.</li>
              <li>Apply an even layer to your face, avoiding the eye area.</li>
              <li>Leave on for 15–20 minutes.</li>
              <li>Rinse off with warm water using gentle circular motions.</li>
              <li>Follow with your regular moisturiser.</li>
            </ol>
            <div class="recipe-tip">💡 <strong>Tip:</strong> Use twice a week for best results. Store any leftover mixture in the fridge for up to 3 days.</div>
            <a href="#" class="btn btn-small see-less-btn" data-recipe="face1" style="margin-top:1.5rem;display:inline-block;">↑ See Less</a>
          </div>
        </div>
      </div>

      <div class="recipe-card-expandable">
        <div class="recipe-card-preview">
          <div class="recipe-image">
            <img src="https://images.unsplash.com/photo-1556228720-195a672e8a03?w=600&h=300&fit=crop" alt="Green Tea Toner">
          </div>
          <div class="recipe-info">
            <h3>Green Tea Face Toner</h3>
            <div class="recipe-meta-preview">
              <span>⏱ 5 min</span><span>🌿 Natural</span><span>🔴 Oily Skin</span>
            </div>
            <p class="recipe-description">Refresh and balance your skin with antioxidant-rich green tea. Tightens pores and fights inflammation.</p>
            <a href="#" class="btn btn-small see-more-btn" data-recipe="face2">See Full Recipe ↓</a>
          </div>
        </div>
        <div class="recipe-details-expanded" id="recipe-face2">
          <div class="recipe-details-content">
            <h3>🧴 Ingredients</h3>
            <ul class="ingredients-list">
              <li>1 green tea bag (or 1 tsp loose leaf green tea)</li>
              <li>1 cup boiled water (cooled)</li>
              <li>2 tablespoons witch hazel</li>
              <li>3 drops tea tree essential oil (optional)</li>
            </ul>
            <h3>📋 Instructions</h3>
            <ol class="instructions-list">
              <li>Steep the green tea in hot water for 5 minutes, then allow to cool completely.</li>
              <li>Mix the cooled tea with witch hazel in a clean spray bottle or jar.</li>
              <li>Add tea tree oil if using and shake gently to combine.</li>
              <li>After cleansing, apply to face with a cotton pad or spray directly.</li>
              <li>Allow to dry before applying moisturiser. No need to rinse.</li>
            </ol>
            <div class="recipe-tip">💡 <strong>Tip:</strong> Keep refrigerated for up to 1 week. The cold application gives an extra pore-tightening effect!</div>
            <a href="#" class="btn btn-small see-less-btn" data-recipe="face2" style="margin-top:1.5rem;display:inline-block;">↑ See Less</a>
          </div>
        </div>
      </div>

    </div>

    <!-- ── HAIR CARE ─────────────────────────────────────────── -->
    <h2 class="section-title" style="text-align:left;font-size:1.8rem;margin:3rem 0 2rem;">
      💇 Hair Care
    </h2>
    <div class="recipes-grid">

      <div class="recipe-card-expandable">
        <div class="recipe-card-preview">
          <div class="recipe-image">
            <img src="https://images.unsplash.com/photo-1620916566398-39f1143ab7be?w=600&h=300&fit=crop" alt="Avocado Hair Mask">
          </div>
          <div class="recipe-info">
            <h3>Avocado Deep Conditioning Mask</h3>
            <div class="recipe-meta-preview">
              <span>⏱ 20 min</span><span>🥑 Natural</span><span>💧 Dry Hair</span>
            </div>
            <p class="recipe-description">Restore moisture and shine to dry, damaged hair with this rich avocado and coconut oil treatment.</p>
            <a href="#" class="btn btn-small see-more-btn" data-recipe="hair1">See Full Recipe ↓</a>
          </div>
        </div>
        <div class="recipe-details-expanded" id="recipe-hair1">
          <div class="recipe-details-content">
            <h3>🧴 Ingredients</h3>
            <ul class="ingredients-list">
              <li>1 ripe avocado</li>
              <li>2 tablespoons coconut oil (melted)</li>
              <li>1 tablespoon honey</li>
              <li>1 egg yolk</li>
            </ul>
            <h3>📋 Instructions</h3>
            <ol class="instructions-list">
              <li>Mash the avocado in a bowl until completely smooth (no lumps).</li>
              <li>Add melted coconut oil, honey, and egg yolk. Mix well.</li>
              <li>Apply to damp hair from roots to tips.</li>
              <li>Cover with a shower cap and leave for 20–30 minutes.</li>
              <li>Rinse thoroughly with cool water, then shampoo as usual.</li>
            </ol>
            <div class="recipe-tip">💡 <strong>Tip:</strong> Use once a week for noticeably softer, shinier hair within 2–3 treatments.</div>
            <a href="#" class="btn btn-small see-less-btn" data-recipe="hair1" style="margin-top:1.5rem;display:inline-block;">↑ See Less</a>
          </div>
        </div>
      </div>

      <div class="recipe-card-expandable">
        <div class="recipe-card-preview">
          <div class="recipe-image">
            <img src="https://images.unsplash.com/photo-1515377905703-c4788e51af15?w=600&h=300&fit=crop" alt="Argan Oil Serum">
          </div>
          <div class="recipe-info">
            <h3>DIY Argan Oil Hair Serum</h3>
            <div class="recipe-meta-preview">
              <span>⏱ 5 min</span><span>✨ Shine</span><span>🌀 Frizzy Hair</span>
            </div>
            <p class="recipe-description">A lightweight serum to tame frizz and add brilliant shine. Works on all hair types.</p>
            <a href="#" class="btn btn-small see-more-btn" data-recipe="hair2">See Full Recipe ↓</a>
          </div>
        </div>
        <div class="recipe-details-expanded" id="recipe-hair2">
          <div class="recipe-details-content">
            <h3>🧴 Ingredients</h3>
            <ul class="ingredients-list">
              <li>2 tablespoons argan oil</li>
              <li>1 tablespoon jojoba oil</li>
              <li>5 drops lavender essential oil</li>
              <li>3 drops rosemary essential oil</li>
            </ul>
            <h3>📋 Instructions</h3>
            <ol class="instructions-list">
              <li>Mix all oils together in a small dropper bottle.</li>
              <li>Shake gently before each use.</li>
              <li>Apply 2–3 drops to your palms and rub together.</li>
              <li>Smooth over damp or dry hair, focusing on ends.</li>
              <li>Style as usual. No need to rinse out.</li>
            </ol>
            <div class="recipe-tip">💡 <strong>Tip:</strong> A little goes a long way — start with 1–2 drops for fine hair to avoid greasiness.</div>
            <a href="#" class="btn btn-small see-less-btn" data-recipe="hair2" style="margin-top:1.5rem;display:inline-block;">↑ See Less</a>
          </div>
        </div>
      </div>

    </div>

    <!-- View More Links -->
    <div style="display:flex;flex-wrap:wrap;gap:1rem;justify-content:center;margin-top:3rem;">
      <a href="face.php"   class="btn btn-secondary">All Face Recipes</a>
      <a href="hair.php"   class="btn btn-secondary">All Hair Recipes</a>
      <a href="body.php"   class="btn btn-secondary">All Body Recipes</a>
      <a href="drinks.php" class="btn btn-secondary">Beauty Drinks</a>
      <a href="oil.php"    class="btn btn-secondary">Oil Recipes</a>
    </div>

  </div>
</section>

<?php include 'footer.php'; ?>
<script src="script.js"></script>
</body>
</html>
