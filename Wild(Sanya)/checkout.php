<?php
session_start();
$cart = $_SESSION['cart'] ?? [];
$subtotal = 0;

foreach ($cart as $item) {
    $subtotal += $item['price'] * ($item['qty'] ?? 1);
}

$tax = $subtotal * 0.13;        // 13% Tax
$total = $subtotal + $tax;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Checkout - Wild Skincare</title>
<link rel="stylesheet" href="./CSS/checkout.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<script>
function showPaymentPopup() {
  document.getElementById("paymentPopup").style.display = "block";
  document.getElementById("paymentOverlay").style.display = "block";
}

function closePaymentPopup() {
  document.getElementById("paymentPopup").style.display = "none";
  document.getElementById("paymentOverlay").style.display = "none";
}
</script>

<body>

<!-- ================= NAVBAR ================= -->
<div class="checkout-navbar">
  <a href="cart.php"><i class="fa-solid fa-arrow-left"></i> Back to Cart</a>
</div>

<!-- ================= MAIN ================= -->
<div class="checkout-container">

  <!-- ORDER SUMMARY -->
  <div class="order-box">
    <h2>Your Order</h2>

    <?php if (!empty($cart)) { ?>
      <?php foreach ($cart as $item) { ?>
        <div class="order-item">
          <span><?php echo $item['name']; ?></span>
          <span>$<?php echo number_format($item['price'],2); ?></span>
        </div>
      <?php } ?>
    <?php } else { ?>
      <p>Your cart is empty.</p>
    <?php } ?>

    <hr>

    <div class="price-line">
      <span>Subtotal</span>
      <span>$<?php echo number_format($subtotal,2); ?></span>
    </div>

    <div class="price-line">
      <span>Tax (13%)</span>
      <span>$<?php echo number_format($tax,2); ?></span>
    </div>

    <div class="price-total">
      <span>Total</span>
      <span>$<?php echo number_format($total,2); ?></span>
    </div>
  </div>

  <!-- PAYMENT -->
  <div class="payment-box">
    <h2>Payment Method</h2>

    <label class="payment-option">
      <input type="radio" name="payment" onclick="showCard()">
      Debit / Credit Card
    </label>

    <!-- CARD FORM -->
    <div class="card-form" id="cardForm">
      <input type="text" placeholder="Full Name">
      <input type="email" placeholder="Email Address">
      <input type="text" placeholder="Card Number">
      <div class="row">
        <input type="text" placeholder="Expiry Date (MM/YY)">
        <input type="password" placeholder="CVV">
      </div>

      <button type="button"  class="pay-btn"  onclick="showPaymentPopup()">Pay</button>
    </div>

  </div>

</div>

<script>
function showCard() {
  document.getElementById("cardForm").style.display = "block";
}
</script>

</body>

<!-- ========= PAYMENT SUCCESS POPUP ========= -->
<div class="payment-overlay" id="paymentOverlay"></div>

<div class="payment-popup" id="paymentPopup">
  <i class="fa-solid fa-circle-check"></i>
  <h2>Payment Successful</h2>
  <p>Your order has been placed successfully.</p>
  <button onclick="closePaymentPopup()">Done</button>
</div>

</html>
