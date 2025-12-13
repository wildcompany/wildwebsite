<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Appointment Payment</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

  <!-- CSS -->
  <style>
    body {
      font-family: 'Open Sans', sans-serif;
      margin: 0;
      background-color: #fff5f5;
    }

    /* HEADER */
    .checkout-header {
      background: white;
      padding: 1rem 2rem;
      display: flex;
      align-items: center;
      box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }

    .back-btn {
      text-decoration: none;
      color: #b71c1c;
      font-size: 1rem;
      font-weight: 600;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .page-title {
      flex: 1;
      text-align: center;
      font-weight: bold;
      color: #b71c1c;
    }

    /* CONTAINER */
    .checkout-wrapper {
      max-width: 500px;
      margin: 40px auto;
      background: white;
      padding: 25px;
      border-radius: 16px;
      box-shadow: 0 6px 18px rgba(0,0,0,0.08);
    }

    .checkout-wrapper h2 {
      color: #b71c1c;
      text-align: center;
      margin-bottom: 6px;
    }

    .sub {
      text-align: center;
      font-size: 0.9rem;
      color: #666;
      margin-bottom: 20px;
    }

    /* SUMMARY */
    .summary-box {
      background: #fff0f0;
      border-radius: 10px;
      padding: 15px;
      margin-bottom: 18px;
      font-size: 0.9rem;
    }

    .summary-box strong {
      color: #b71c1c;
    }

    .summary-item {
      display: flex;
      justify-content: space-between;
      margin-bottom: 8px;
    }

    .summary-total {
      border-top: 1px solid #e0b4b4;
      padding-top: 10px;
      font-weight: bold;
      display: flex;
      justify-content: space-between;
      color: #b71c1c;
    }

    /* FORM */
    label {
      font-weight: 600;
      font-size: 0.85rem;
      display: block;
      margin-top: 10px;
      margin-bottom: 5px;
    }

    input {
      width: 100%;
      padding: 9px;
      border-radius: 8px;
      border: 1px solid #ccc;
      font-size: 0.9rem;
      outline: none;
    }

    input:focus {
      border-color: #b71c1c;
      box-shadow: 0 0 3px rgba(183,28,28,0.3);
    }

    .two {
      display: flex;
      gap: 12px;
    }

    /* PAY BUTTON */
    .pay-btn {
      width: 100%;
      margin-top: 18px;
      background: #b71c1c;
      border: none;
      color: white;
      padding: 11px;
      border-radius: 8px;
      font-size: 1rem;
      cursor: pointer;
      font-weight: 600;
    }

    .pay-btn:hover {
      background: #8a1313;
    }

    .secure-note {
      text-align: center;
      font-size: 0.8rem;
      margin-top: 8px;
      color: #777;
    }
    /* ================= POPUP OVERLAY ================= */
.popup-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0,0,0,0.4);
  display: none;
  z-index: 999;
}

/* ================= POPUP BOX ================= */
.popup {
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 340px;
  background: #fff;
  padding: 25px;
  border-radius: 15px;
  box-shadow: 0 10px 25px rgba(0,0,0,0.2);
  text-align: center;
  display: none;
  z-index: 1000;
}

.popup-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.popup-header h2 {
  color: #b22222;
  margin: 0;
}

.close-btn {
  font-size: 24px;
  cursor: pointer;
  color: #777;
}

.close-btn:hover {
  color: #b22222;
}

.popup-btn {
  background-color: #b22222;
  color: #fff;
  border: none;
  margin-top: 15px;
  padding: 10px 18px;
  border-radius: 8px;
  cursor: pointer;
}

.popup-btn:hover {
  background-color: #8b0000;
}

  </style>
</head>

<body>

<header class="checkout-header">
  <a href="javascript:history.back()" class="back-btn">
    <i class="fa-solid fa-arrow-left"></i> Back
  </a>
  <div class="page-title">Payment</div>
</header>

<div class="checkout-wrapper">

  <h2>Appointment Payment</h2>
  <p class="sub">Complete your booking by making a secure payment</p>

  <!-- SUMMARY -->
  <div class="summary-box">
    <div class="summary-item">
      <span>Consultation Fee</span>
      <span>$120 CAD</span>
    </div>
    <div class="summary-item">
      <span>Tax</span>
      <span>$0.00</span>
    </div>
    <div class="summary-total">
      <span>Total</span>
      <span>$120 CAD</span>
    </div>
  </div>

  <!-- PAYMENT FORM -->
  <form>
    <label>Full Name</label>
    <input type="text" placeholder="Cardholder name" required>

    <label>Email</label>
    <input type="email" placeholder="example@email.com" required>

    <label>Card Number</label>
    <input type="text" placeholder="1234 5678 9012 3456" required>

    <div class="two">
      <div>
        <label>Expiry Date &nbsp;</label>
        <input type="text" placeholder="MM/YY" required>
      </div>
      <div>
        <label>CVV</label>
        <input type="password" placeholder="123" required>
      </div>
    </div>

    <button type="button" class="pay-btn" onclick="showPopup()">
        Confirm Payment
    </button>
  </form>

  <div class="secure-note">
    <i class="fa-solid fa-lock"></i> Secure checkout
  </div>

</div>
<!-- ================= POPUP OVERLAY ================= -->
<div id="paymentOverlay" class="popup-overlay"></div>

<!-- ================= POPUP BOX ================= -->
<div id="paymentPopup" class="popup">
  <div class="popup-header">
    <h2>Payment Confirmed</h2>
    <span class="close-btn" onclick="closePopup()">&times;</span>
  </div>

  <p>Your payment has been successfully completed.</p>
  <p>Thank you for booking your consultation with Wild Skincare!</p>

  <button class="popup-btn" onclick="closePopup()">OK</button>
</div>

<script>
function showPopup() {
  document.getElementById("paymentPopup").style.display = "block";
  document.getElementById("paymentOverlay").style.display = "block";
}

function closePopup() {
  document.getElementById("paymentPopup").style.display = "none";
  document.getElementById("paymentOverlay").style.display = "none";
}
</script>

</body>
</html>
