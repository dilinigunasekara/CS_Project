<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beauty Oil Recipes - Beauty Care</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php include 'navbar.php'; ?>

<section class="page-header">
  <div class="container">
    <h1>🫒 Oil Recipes</h1>
    <p>Harness the power of natural oils for skin, hair, and wellness</p>
  </div>
</section>

<section style="background:var(--white);padding:2rem 0 0;">
  <div class="container">
    <div class="category-filter" style="justify-content:center;">
      <a href="diy-recipes.php" class="filter-btn">All Recipes</a>
      <a href="face.php"        class="filter-btn">Face Care</a>
      <a href="hair.php"        class="filter-btn">Hair Care</a>
      <a href="body.php"        class="filter-btn">Body Care</a>
      <a href="drinks.php"      class="filter-btn">Beauty Drinks</a>
      <a href="oil.php"         class="filter-btn active">Oils</a>
    </div>
  </div>
</section>

<!-- Oil Guide Banner -->
<section style="background:var(--secondary-color);padding:3rem 0;">
  <div class="container">
    <h2 class="section-title">Which Oil Is Right for You?</h2>
    <div class="benefits-grid">
      <div class="benefit-item">
        <div class="benefit-icon">🥥</div>
        <h3>Coconut Oil</h3>
        <p>Best for: dry skin, hair masks, lip care. Rich in fatty acids for deep moisturising.</p>
      </div>
      <div class="benefit-item">
        <div class="benefit-icon">🌹</div>
        <h3>Rosehip Oil</h3>
        <p>Best for: anti-aging, scars, hyperpigmentation. High in Vitamin A and C.</p>
      </div>
      <div class="benefit-item">
        <div class="benefit-icon">🌿</div>
        <h3>Jojoba Oil</h3>
        <p>Best for: oily and combination skin. Mimics skin's natural sebum to balance oil.</p>
      </div>
      <div class="benefit-item">
        <div class="benefit-icon">🫒</div>
        <h3>Argan Oil</h3>
        <p>Best for: hair shine, dry ends, nail strengthening. Lightweight and non-greasy.</p>
      </div>
    </div>
  </div>
</section>

<section class="page-content">
  <div class="container">
    <div class="recipes-grid">

      <div class="recipe-card-expandable">
        <div class="recipe-card-preview">
          <div class="recipe-image"><img src="https://images.unsplash.com/photo-1556229010-6c3f2c9ca5f8?w=600&h=300&fit=crop" alt="Face Oil Blend"></div>
          <div class="recipe-info">
            <h3>Custom Anti-Aging Face Oil Blend</h3>
            <div class="recipe-meta-preview"><span>⏱ 5 min</span><span>🌹 Anti-Aging</span><span>✨ All Skin</span></div>
            <p class="recipe-description">A luxurious custom face oil to reduce fine lines, even skin tone, and restore a youthful glow.</p>
            <a href="#" class="btn btn-small see-more-btn" data-recipe="o1">See Full Recipe ↓</a>
          </div>
        </div>
        <div class="recipe-details-expanded" id="recipe-o1">
          <div class="recipe-details-content">
            <h3>🧴 Ingredients</h3>
            <ul class="ingredients-list">
              <li>2 tbsp rosehip seed oil (base)</li><li>1 tbsp jojoba oil</li>
              <li>1 tsp vitamin E oil</li><li>4 drops frankincense essential oil</li>
              <li>3 drops lavender essential oil</li>
            </ul>
            <h3>📋 Instructions</h3>
            <ol class="instructions-list">
              <li>Combine all oils in a dark glass dropper bottle (dark glass protects oils from light).</li>
              <li>Shake gently to blend.</li>
              <li>At night, apply 3–4 drops to clean, slightly damp skin.</li>
              <li>Gently press into skin using upward motions.</li>
              <li>Allow to absorb for 5 minutes before applying other products.</li>
            </ol>
            <div class="recipe-tip">💡 Always dilute essential oils in a carrier oil. Never apply undiluted essential oils directly to skin.</div>
            <a href="#" class="btn btn-small see-less-btn" data-recipe="o1" style="margin-top:1.5rem;display:inline-block;">↑ See Less</a>
          </div>
        </div>
      </div>

      <div class="recipe-card-expandable">
        <div class="recipe-card-preview">
          <div class="recipe-image"><img src="https://images.unsplash.com/photo-1598440947619-2c35fc9aa908?w=600&h=300&fit=crop" alt="Hair Growth Oil"></div>
          <div class="recipe-info">
            <h3>Hair Growth Scalp Oil</h3>
            <div class="recipe-meta-preview"><span>⏱ 5 min</span><span>💪 Strengthening</span><span>🌱 Growth</span></div>
            <p class="recipe-description">Stimulate hair follicles and promote growth with this rosemary and castor oil blend.</p>
            <a href="#" class="btn btn-small see-more-btn" data-recipe="o2">See Full Recipe ↓</a>
          </div>
        </div>
        <div class="recipe-details-expanded" id="recipe-o2">
          <div class="recipe-details-content">
            <h3>🧴 Ingredients</h3>
            <ul class="ingredients-list">
              <li>2 tbsp castor oil</li><li>2 tbsp coconut oil (melted)</li>
              <li>1 tbsp jojoba oil</li><li>10 drops rosemary essential oil</li>
              <li>5 drops peppermint essential oil</li>
            </ul>
            <h3>📋 Instructions</h3>
            <ol class="instructions-list">
              <li>Combine all oils in a dropper or squeeze bottle.</li>
              <li>Apply directly to the scalp using the dropper tip.</li>
              <li>Massage in circular motions for 5–10 minutes to stimulate blood flow.</li>
              <li>Leave on for at least 1 hour, or overnight for best results.</li>
              <li>Wash out with shampoo (may need 2 washes to remove castor oil).</li>
            </ol>
            <div class="recipe-tip">💡 Rosemary oil has been shown in studies to be as effective as minoxidil (Rogaine) for hair growth with fewer side effects.</div>
            <a href="#" class="btn btn-small see-less-btn" data-recipe="o2" style="margin-top:1.5rem;display:inline-block;">↑ See Less</a>
          </div>
        </div>
      </div>

      <div class="recipe-card-expandable">
        <div class="recipe-card-preview">
          <div class="recipe-image"><img src="https://images.unsplash.com/photo-1515377905703-c4788e51af15?w=600&h=300&fit=crop" alt="Body Oil"></div>
          <div class="recipe-info">
            <h3>Relaxing Lavender Body Oil</h3>
            <div class="recipe-meta-preview"><span>⏱ 5 min</span><span>🛁 Post-Shower</span><span>😴 Calming</span></div>
            <p class="recipe-description">A silky body oil to apply after showering. Locks in moisture and calms the mind for sleep.</p>
            <a href="#" class="btn btn-small see-more-btn" data-recipe="o3">See Full Recipe ↓</a>
          </div>
        </div>
        <div class="recipe-details-expanded" id="recipe-o3">
          <div class="recipe-details-content">
            <h3>🧴 Ingredients</h3>
            <ul class="ingredients-list">
              <li>4 tbsp sweet almond oil</li><li>2 tbsp jojoba oil</li>
              <li>15 drops lavender essential oil</li><li>5 drops chamomile essential oil</li>
              <li>5 drops bergamot essential oil</li>
            </ul>
            <h3>📋 Instructions</h3>
            <ol class="instructions-list">
              <li>Mix all oils in a pump bottle or glass jar.</li>
              <li>Apply to skin immediately after showering while skin is still slightly damp.</li>
              <li>Massage in using long, sweeping strokes toward the heart.</li>
              <li>Allow to absorb — no need to rinse.</li>
            </ol>
            <div class="recipe-tip">💡 Applying oil to damp skin (not wet) locks in moisture far more effectively than applying to dry skin.</div>
            <a href="#" class="btn btn-small see-less-btn" data-recipe="o3" style="margin-top:1.5rem;display:inline-block;">↑ See Less</a>
          </div>
        </div>
      </div>

      <div class="recipe-card-expandable">
        <div class="recipe-card-preview">
          <div class="recipe-image"><img src="https://images.unsplash.com/photo-1556228720-195a672e8a03?w=600&h=300&fit=crop" alt="Cuticle Oil"></div>
          <div class="recipe-info">
            <h3>Nourishing Cuticle & Nail Oil</h3>
            <div class="recipe-meta-preview"><span>⏱ 3 min</span><span>💅 Nails</span><span>💧 Hydrating</span></div>
            <p class="recipe-description">Strengthen brittle nails and heal dry cuticles with this 4-ingredient nail treatment oil.</p>
            <a href="#" class="btn btn-small see-more-btn" data-recipe="o4">See Full Recipe ↓</a>
          </div>
        </div>
        <div class="recipe-details-expanded" id="recipe-o4">
          <div class="recipe-details-content">
            <h3>🧴 Ingredients</h3>
            <ul class="ingredients-list">
              <li>1 tbsp jojoba oil</li><li>1 tsp vitamin E oil</li>
              <li>1 tsp argan oil</li><li>3 drops lemon essential oil</li>
            </ul>
            <h3>📋 Instructions</h3>
            <ol class="instructions-list">
              <li>Combine all ingredients in a small nail oil bottle or pen roller.</li>
              <li>Apply a small amount to each cuticle and nail bed.</li>
              <li>Massage in gently for 1–2 minutes.</li>
              <li>Use morning and night for best results.</li>
            </ol>
            <div class="recipe-tip">💡 Lemon oil helps naturally whiten yellowed nails over time. Results visible within 2–3 weeks of daily use.</div>
            <a href="#" class="btn btn-small see-less-btn" data-recipe="o4" style="margin-top:1.5rem;display:inline-block;">↑ See Less</a>
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
