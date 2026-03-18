<?php
session_start();

$sent    = false;
$error   = '';

// If you later connect this to a real mail server or database,
// handle it here. For now it just shows a success message.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = trim($_POST['name']    ?? '');
    $email   = trim($_POST['email']   ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if (!$name || !$email || !$subject || !$message) {
        $error = 'Please fill in all fields.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Please enter a valid email address.';
    } else {
        // TODO: use mail() or a service like PHPMailer to actually send the email
        // mail('info@beautycare.com', $subject, $message, "From: $email");
        $sent = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us - Beauty Care</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php include 'navbar.php'; ?>

<section class="page-header">
  <div class="container">
    <h1>Contact Us</h1>
    <p>We'd love to hear from you — reach out any time</p>
  </div>
</section>

<section class="page-content">
  <div class="container">
    <div class="contact-wrapper">

      <!-- Contact Info Cards -->
      <div class="contact-info">
        <h2>Get in Touch</h2>
        <p style="color:var(--text-light);margin-bottom:2rem;line-height:1.7;">
          Have a question about our products, an order, or just want to say hello?
          We're here to help and will respond within 24 hours.
        </p>

        <div class="contact-card">
          <div class="contact-icon">📧</div>
          <div>
            <h4>Email</h4>
            <p>info@beautycare.com</p>
          </div>
        </div>

        <div class="contact-card">
          <div class="contact-icon">📞</div>
          <div>
            <h4>Phone</h4>
            <p>+1 (555) 123-4567</p>
            <p style="font-size:.85rem;color:var(--text-light);">Mon – Fri, 9 AM – 6 PM EST</p>
          </div>
        </div>

        <div class="contact-card">
          <div class="contact-icon">📍</div>
          <div>
            <h4>Address</h4>
            <p>123 Beauty Lane, Suite 400<br>New York, NY 10001, USA</p>
          </div>
        </div>

        <div class="contact-card">
          <div class="contact-icon">⏱️</div>
          <div>
            <h4>Response Time</h4>
            <p>We typically reply within 24 hours on business days.</p>
          </div>
        </div>
      </div>

      <!-- Contact Form -->
      <div class="contact-form-wrap">
        <h2>Send a Message</h2>

        <?php if ($error): ?>
          <div class="alert alert-error"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>

        <?php if ($sent): ?>
          <div class="alert alert-success">
            ✅ Thank you! Your message has been sent. We'll be in touch soon.
          </div>
        <?php else: ?>

        <form id="contactForm" method="POST" action="contact.php">
          <div class="form-group">
            <label>Your Name *</label>
            <input type="text" name="name" required placeholder="Jane Smith"
                   value="<?= htmlspecialchars($_POST['name'] ?? '') ?>">
          </div>
          <div class="form-group">
            <label>Email Address *</label>
            <input type="email" name="email" required placeholder="jane@example.com"
                   value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">
          </div>
          <div class="form-group">
            <label>Subject *</label>
            <input type="text" name="subject" required placeholder="What's this about?"
                   value="<?= htmlspecialchars($_POST['subject'] ?? '') ?>">
          </div>
          <div class="form-group">
            <label>Message *</label>
            <textarea name="message" required placeholder="Write your message here…" rows="6"><?= htmlspecialchars($_POST['message'] ?? '') ?></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="Send Message">
          </div>
        </form>

        <?php endif; ?>
      </div>

    </div>
  </div>
</section>

<!-- FAQ Strip -->
<section style="background:var(--light-bg);padding:5rem 0;">
  <div class="container">
    <h2 class="section-title">Frequently Asked Questions</h2>
    <div class="faq-grid">

      <div class="faq-item">
        <h4>How long does shipping take?</h4>
        <p>Standard shipping takes 5–7 business days. Express shipping (2–3 days) is available at checkout. Orders over $50 ship free.</p>
      </div>
      <div class="faq-item">
        <h4>Are your products suitable for sensitive skin?</h4>
        <p>Yes! All our products are dermatologist-tested and free from common irritants. We have a dedicated sensitive skin range too.</p>
      </div>
      <div class="faq-item">
        <h4>Can I return a product?</h4>
        <p>We accept returns within 30 days of purchase if you're not satisfied. Contact us and we'll arrange a hassle-free return.</p>
      </div>
      <div class="faq-item">
        <h4>Are your products vegan?</h4>
        <p>The majority of our products are 100% vegan. Each product page clearly states if it contains any animal-derived ingredients.</p>
      </div>

    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
<script src="script.js"></script>
</body>
</html>
