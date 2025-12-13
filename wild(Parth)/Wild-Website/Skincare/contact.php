<?php
session_start();
require_once "config.php";

$success = "";
$error = "";

// ---------------------
// HANDLE FORM SUBMISSION
// ---------------------
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name    = trim($_POST['name']);
    $email   = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    if (!empty($name) && !empty($email) && !empty($message)) {

        $sql = "INSERT INTO contact_messages (full_name, email, subject, message)
                VALUES (?, ?, ?, ?)";

        if ($stmt = mysqli_prepare($conn, $sql)) {

            mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $subject, $message);

            if (mysqli_stmt_execute($stmt)) {
                $success = "Thank you — your message has been successfully submitted.";
            } else {
                $error = "We’re currently experiencing system latency — please retry later.";
            }

            mysqli_stmt_close($stmt);
        } else {
            $error = "Database error. Please try again later.";
        }

    } else {
        $error = "All mandatory fields must be completed.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us – Wild Skincare</title>

  <link rel="stylesheet" href="./CSS/contact.css">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>

<body>

<?php include 'navbar.php'; ?>

<!-- HERO -->
<section class="contact-hero">
  <h1>Contact Us</h1>
  <p>We’re here to help you with any questions about our products, services, or your skincare needs.</p>
</section>

<section class="contact-container">

  <!-- CONTACT INFO -->
  <div class="contact-info">
    <h2>Get in Touch</h2>
    <p>Feel free to reach out to us using the contact form, or through the details below.</p>

    <div class="info-box">
      <i class="fa-solid fa-location-dot"></i>
      <div>
        <h4>Our Location</h4>
        <p>Toronto, Canada</p>
      </div>
    </div>

    <div class="info-box">
      <i class="fa-solid fa-phone"></i>
      <div>
        <h4>Phone</h4>
        <p>+1 (437) 000-0000</p>
      </div>
    </div>

    <div class="info-box">
      <i class="fa-solid fa-envelope"></i>
      <div>
        <h4>Email</h4>
        <p>wildskincare@gmail.com</p>
      </div>
    </div>
  </div>

  <!-- CONTACT FORM -->
  <div class="contact-form">
    <h2>Send Us a Message</h2>

    <!-- SUCCESS / ERROR MESSAGES -->
    <?php if ($success): ?>
      <p class="success-msg"><?php echo $success; ?></p>
    <?php endif; ?>

    <?php if ($error): ?>
      <p class="error-msg"><?php echo $error; ?></p>
    <?php endif; ?>

    <form action="contact.php" method="POST">

      <div class="input-group">
        <label>Your Name</label>
        <input type="text" name="name" required>
      </div>

      <div class="input-group">
        <label>Email Address</label>
        <input type="email" name="email" required>
      </div>

      <div class="input-group">
        <label>Subject</label>
        <input type="text" name="subject">
      </div>

      <div class="input-group">
        <label>Your Message</label>
        <textarea name="message" rows="6" required></textarea>
      </div>

      <button type="submit" class="send-btn">
        <i class="fa-solid fa-paper-plane"></i> Send Message
      </button>

    </form>
  </div>

</section>

<!-- FOOTER -->
<footer class="footer">
  <div class="footer-container">

    <!-- Brand -->
    <div class="footer-column brand">
      <h3 class="footer-logo">Wild Skincare</h3>
      <p>Premium natural skincare for radiant, healthy skin. Founded by Sara Hashemi Nasab.</p>

      <div class="social-icons">
        <a href="#"><i class="fa-regular fa-envelope"></i></a>
        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="#"><i class="fa-brands fa-instagram"></i></a>
        <a href="#"><i class="fa-brands fa-twitter"></i></a>
        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
      </div>
    </div>

    <!-- Shop -->
    <div class="footer-column">
      <h4>Shop</h4>
      <ul>
        <li><a href="#">All Products</a></li>
        <li><a href="#">Cleansers</a></li>
        <li><a href="#">Serums</a></li>
        <li><a href="#">Moisturizers</a></li>
        <li><a href="#">Masks</a></li>
        <li><a href="#">Gift Sets</a></li>
      </ul>
    </div>

    <!-- About -->
    <div class="footer-column">
      <h4>About</h4>
      <ul>
        <li><a href="#">Our Story</a></li>
        <li><a href="#">Our Values</a></li>
        <li><a href="#">Ingredients</a></li>
        <li><a href="#">Sustainability</a></li>
        <li><a href="#">Press</a></li>
      </ul>
    </div>

    <!-- Support -->
    <div class="footer-column">
      <h4>Support</h4>
      <ul>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">FAQs</a></li>
        <li><a href="#">Shipping Info</a></li>
        <li><a href="#">Returns</a></li>
        <li><a href="#">Track Order</a></li>
      </ul>
    </div>

  </div>
</footer>

<!-- COPYRIGHT BAR -->
<div class="footer-bottom">
  <p>© 2025 Wild Skincare. All rights reserved. Founded by Sara Hashemi Nasab.</p>

  <div class="footer-links">
    <a href="#">www.wnpe.com</a>
    <a href="#">Privacy Policy</a>
    <a href="#">Terms of Service</a>
  </div>
</div>

</body>
</html>
