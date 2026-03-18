<?php
// ============================================================
//  FILE: navbar.php
//  HOW TO USE: Add this one line at the top of every page:
//      <?php include 'navbar.php'; ?>
<?php
//  WHAT IT DOES:
//  - Shows Login + Register when user is NOT logged in
//  - Shows greeting + My Orders + Logout when user IS logged in
//  - Highlights the active page link automatically
// ============================================================

// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Check login status
$logged_in = isset($_SESSION['user_id']);
$user_name = $logged_in ? htmlspecialchars($_SESSION['user_name']) : '';

// Get the current filename to highlight the active nav link
$current = basename($_SERVER['PHP_SELF']);

// Helper function: returns 'class="active"' if the page matches
function nav_active($page) {
    global $current;
    return ($current === $page) ? 'class="active"' : '';
}

// Mark DIY dropdown active if on any recipe-related page
$recipe_pages = ['diy-recipes.php','face.php','hair.php','body.php','drinks.php','oil.php'];
$diy_active   = in_array($current, $recipe_pages) ? 'active' : '';
?>

<nav class="navbar">
  <div class="container">
    <div class="nav-wrapper">

      <!-- Logo -->
      <div class="logo">
        <a href="index.php">Beauty Care</a>
      </div>

      <!-- Navigation Menu -->
      <ul class="nav-menu">

        <li><a href="index.php"    <?php echo nav_active('index.php'); ?>>Home</a></li>
        <li><a href="products.php" <?php echo nav_active('products.php'); ?>>Products</a></li>

        <!-- DIY Recipes Dropdown -->
        <li class="dropdown">
          <a href="diy-recipes.php" class="dropbtn <?php echo $diy_active; ?>">DIY Recipes &#9660;</a>
          <ul class="dropdown-content">
            <li><a href="face.php">Face Care</a></li>
            <li><a href="hair.php">Hair Care</a></li>
            <li><a href="body.php">Body Care</a></li>
            <li><a href="drinks.php">Drinks</a></li>
            <li><a href="oil.php">Oil</a></li>
            <li><a href="diy-recipes.php">All Recipes</a></li>
          </ul>
        </li>

        <li><a href="about.php"   <?php echo nav_active('about.php'); ?>>About</a></li>
        <li><a href="contact.php" <?php echo nav_active('contact.php'); ?>>Contact</a></li>

        <!-- Cart (count updated by JavaScript) -->
        <li>
          <a href="cart.php" <?php echo nav_active('cart.php'); ?>>
            Cart (<span id="cart-count">0</span>)
          </a>
        </li>

        <?php if ($logged_in) : ?>
          <!-- LOGGED IN: show greeting, My Orders, Logout -->
          <li class="nav-user-greeting">
            Hi, <?php echo $user_name; ?>!
          </li>
          <li>
            <a href="my-orders.php"
               class="login-btn <?php echo ($current === 'my-orders.php') ? 'active' : ''; ?>">
              My Orders
            </a>
          </li>
          <li>
            <a href="logout.php" class="register-btn">Logout</a>
          </li>

        <?php else : ?>
          <!-- LOGGED OUT: show Login and Register -->
          <li>
            <a href="login.php"
               class="login-btn <?php echo ($current === 'login.php') ? 'active' : ''; ?>">
              Login
            </a>
          </li>
          <li>
            <a href="register.php"
               class="register-btn <?php echo ($current === 'register.php') ? 'active' : ''; ?>">
              Register
            </a>
          </li>

        <?php endif; ?>

      </ul><!-- end .nav-menu -->

      <!-- Hamburger button for mobile -->
      <div class="hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>

    </div><!-- end .nav-wrapper -->
  </div><!-- end .container -->
</nav>
