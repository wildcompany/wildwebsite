<?php
// Start session only if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Clear Buy Now session data so it doesn't persist
if (isset($_SESSION['buy_now'])) {
    unset($_SESSION['buy_now']);
}

// Clear the cart after successful purchase
if (isset($_SESSION['cart'])) {
    unset($_SESSION['cart']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thank You - Wild Skincare</title>

    <link rel="stylesheet" href="./CSS/Products.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <style>
        body {
            background: #fdecec;
            font-family: 'Open Sans', sans-serif;
        }
        .thankyou-wrapper {
            max-width: 650px;
            margin: 60px auto;
            background: #fff;
            padding: 40px 35px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0,0,0,0.08);
        }
        .thankyou-wrapper h1 {
            color: #b22222;
            font-size: 28px;
            margin-bottom: 16px;
        }
        .thankyou-wrapper p {
            font-size: 16px;
            margin-bottom: 22px;
            color: #444;
        }
        .btn-home {
            display: inline-block;
            background: #b22222;
            color: white;
            padding: 12px 22px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
        }
        .btn-home:hover {
            background: #8b0000;
        }
    </style>
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="thankyou-wrapper">
    <h1>Thank You!</h1>
    <p>Your order has been successfully placed. A confirmation email will be sent shortly.</p>
    <a href="Products.php" class="btn-home">Continue Shopping</a>
</div>

</body>
</html>
