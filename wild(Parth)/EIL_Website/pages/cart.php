<?php
session_start();

// Cart structure in session:
// $_SESSION['cart'] = [
//   'video1' => ['name' => 'Leadership & EI — Deep Dive', 'meta' => 'Masterclass · 45 min', 'price' => 9.99, 'thumb' => '../images/video-thumbnail-1.jpg', 'qty' => 2],
//   ...
// ];

$cart = $_SESSION['cart'] ?? [];

function money($v) {
    return '$' . number_format($v, 2);
}

$subtotal = 0;
foreach ($cart as $item) {
    $subtotal += $item['price'] * $item['qty'];
}
$taxRate = 0.10;
$tax     = $subtotal * $taxRate;
$total   = $subtotal + $tax;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shopping Cart | WILD – Emotional Intelligence</title>

  <link rel="stylesheet" href="../css/cart.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
</head>
<body>

  <!-- HEADER -->
  <header class="navbar">
    <div class="logo">
      <div class="logo-circle" style="background-image: url('../images/logo.png');"></div>
      <span>Emotional Intelligence</span>
    </div>

    <nav class="nav-links">
      <a href="index.html">Home</a>
      <a href="about.html">About</a>

      <div class="dropdown">
        <a href="events.html">Events</a>
        <ul class="dropdown-menu">
          <li><a href="#">Upcoming Events</a></li>
          <li><a href="#">Workshops</a></li>
          <li><a href="#">Seminars</a></li>
          <li><a href="#">Leadership Talks</a></li>
        </ul>
      </div>

      <div class="dropdown">
        <a href="multimedia.php">Educational Multimedia</a>
        <ul class="dropdown-menu">
          <li><a href="#videos-section">Videos</a></li>
          <li><a href="#podcasts-section">Podcasts</a></li>
          <li><a href="#publications-section">Publications</a></li>
        </ul>
      </div>

      <a href="subscription.php">Subscription</a>
      <a href="cart.php">Cart</a>
    </nav>
  </header>

  <!-- MAIN CART SECTION -->
  <main class="container">
    <h1>Your Shopping Cart</h1>
    
    <?php if (empty($cart)): ?>
        <p style="margin-top:16px; font-size:15px;">Your cart is currently empty.</p>
    <?php else: ?>

      <div class="cart-grid">
        <?php foreach ($cart as $id => $item): ?>
          <div class="cart-item">
            <div class="thumb" style="background-image:url('<?php echo htmlspecialchars($item['thumb']); ?>');"></div>

            <div class="item-info">
              <h3><?php echo htmlspecialchars($item['name']); ?></h3>
              <p class="meta"><?php echo htmlspecialchars($item['meta']); ?></p>
              <div class="row">
                <span class="price"><?php echo money($item['price']); ?></span>
                <input type="number" min="1" value="<?php echo (int)$item['qty']; ?>" disabled>
                <a href="remove_cart.php?id=<?php echo urlencode($id); ?>" class="remove-btn">Remove</a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <!-- CART SUMMARY -->
      <div class="cart-summary">
        <h2>Summary</h2>

        <div class="summary-row">
          <span>Subtotal</span>
          <span><?php echo money($subtotal); ?></span>
        </div>

        <div class="summary-row">
          <span>Tax (10%)</span>
          <span><?php echo money($tax); ?></span>
        </div>

        <div class="summary-row total">
          <span>Total</span>
          <span><?php echo money($total); ?></span>
        </div>

        <a href="checkout.html" class="btn btn-primary checkout-btn">Proceed to Checkout</a>
      </div>

    <?php endif; ?>
  </main>

  <!-- FOOTER -->
  <footer>
    <div class="container" style="text-align:center; padding:24px 0; background:#004aad; color:#fff;">
      <div style="font-weight:700">© 2025 WILD - Emotional Intelligence in Leadership</div>
      <div style="opacity:0.9; margin-top:6px; font-size:0.95rem">All Rights Reserved.</div>
    </div>
  </footer>

</body>
</html>
