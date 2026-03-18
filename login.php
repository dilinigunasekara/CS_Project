<?php
session_start();
if (isset($_SESSION['user_id'])) { header('Location: index.php'); exit; }

require_once 'db_connect.php';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $pass  = $_POST['password']  ?? '';

    if (!$email || !$pass) {
        $error = 'Please enter both email and password.';
    } else {
        $stmt = $pdo->prepare('SELECT * FROM users WHERE email = ?');
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($pass, $user['password'])) {
            $_SESSION['user_id']    = $user['id'];
            $_SESSION['user_name']  = $user['full_name'];
            $_SESSION['user_email'] = $user['email'];

            // Redirect to the page they came from, or homepage
            $redirect = $_SESSION['redirect_after_login'] ?? 'index.php';
            unset($_SESSION['redirect_after_login']);
            header("Location: $redirect");
            exit;
        } else {
            $error = 'Incorrect email or password.';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Beauty Care</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php include 'navbar.php'; ?>

<div class="form-container">
  <h2>Login to Your Account</h2>

  <?php if ($error): ?><div class="alert alert-error"><?= $error ?></div><?php endif; ?>
  <?php if (isset($_GET['msg']) && $_GET['msg']==='checkout'): ?>
    <div class="alert alert-info">Please login to complete your checkout.</div>
  <?php endif; ?>

  <form method="POST" action="login.php">
    <div class="form-group">
      <label>Email Address</label>
      <input type="email" name="email" required placeholder="you@example.com"
             value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">
    </div>
    <div class="form-group">
      <label>Password</label>
      <input type="password" name="password" required placeholder="Your password">
    </div>
    <div class="form-group">
      <input type="submit" value="Login">
    </div>
  </form>

  <div class="form-footer">
    <p>Don't have an account? <a href="register.php">Register here</a></p>
  </div>
</div>

<?php include 'footer.php'; ?>
<script src="script.js"></script>
</body>
</html>
