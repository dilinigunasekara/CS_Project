<?php
session_start();
if (isset($_SESSION['user_id'])) { header('Location: index.php'); exit; }

require_once 'db_connect.php';
$error = $success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name   = trim($_POST['fullName']        ?? '');
    $email  = trim($_POST['email']           ?? '');
    $phone  = trim($_POST['phone']           ?? '');
    $pass   = $_POST['password']             ?? '';
    $pass2  = $_POST['confirmPassword']      ?? '';

    if (!$name || !$email || !$pass || !$pass2) {
        $error = 'Please fill in all required fields.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Please enter a valid email address.';
    } elseif ($pass !== $pass2) {
        $error = 'Passwords do not match.';
    } elseif (strlen($pass) < 6) {
        $error = 'Password must be at least 6 characters.';
    } else {
        $chk = $pdo->prepare('SELECT id FROM users WHERE email = ?');
        $chk->execute([$email]);
        if ($chk->rowCount()) {
            $error = 'This email is already registered. <a href="login.php">Login instead?</a>';
        } else {
            $pdo->prepare('INSERT INTO users (full_name, email, phone, password) VALUES (?,?,?,?)')
                ->execute([$name, $email, $phone, password_hash($pass, PASSWORD_DEFAULT)]);
            $success = 'Account created! <a href="login.php">Click here to login.</a>';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register - Beauty Care</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php include 'navbar.php'; ?>

<div class="form-container">
  <h2>Create Your Account</h2>

  <?php if ($error):   ?><div class="alert alert-error"><?= $error ?></div><?php endif; ?>
  <?php if ($success): ?><div class="alert alert-success"><?= $success ?></div><?php endif; ?>

  <?php if (!$success): ?>
  <form method="POST" action="register.php">
    <div class="form-group">
      <label>Full Name *</label>
      <input type="text" name="fullName" required placeholder="Your full name"
             value="<?= htmlspecialchars($_POST['fullName'] ?? '') ?>">
    </div>
    <div class="form-group">
      <label>Email Address *</label>
      <input type="email" name="email" required placeholder="you@example.com"
             value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">
    </div>
    <div class="form-group">
      <label>Phone Number</label>
      <input type="tel" name="phone" placeholder="+1 (555) 123-4567"
             value="<?= htmlspecialchars($_POST['phone'] ?? '') ?>">
    </div>
    <div class="form-group">
      <label>Password * <small style="color:var(--text-light)">(min. 6 characters)</small></label>
      <input type="password" name="password" required placeholder="Create a password">
    </div>
    <div class="form-group">
      <label>Confirm Password *</label>
      <input type="password" name="confirmPassword" required placeholder="Repeat your password">
    </div>
    <div class="form-group">
      <input type="submit" value="Create Account">
    </div>
  </form>
  <?php endif; ?>

  <div class="form-footer">
    <p>Already have an account? <a href="login.php">Login here</a></p>
  </div>
</div>

<?php include 'footer.php'; ?>
<script src="script.js"></script>
</body>
</html>
