<?php
session_start();


$cart = $_SESSION['cart'] ?? [];


// BLOCK access if user not logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php?redirect=buy");
    exit;
}

$cart = $_SESSION['cart'] ?? [];

// If cart is empty, redirect back to cart

if (empty($cart)) {
    header('Location: cart.php');
    exit;
}

$grandTotal = 0;
$totalItems = 0;

foreach ($cart as $item) 
    {
    $price = (float)$item['price'];
    $qty   = isset($item['qty']) ? (int)$item['qty'] : 1;
    }

foreach ($cart as $item) {
    $price = (float)($item['price'] ?? 0);

    // support both 'quantity' and 'qty' keys
    if (isset($item['quantity'])) {
        $qty = (int)$item['quantity'];
    } elseif (isset($item['qty'])) {
        $qty = (int)$item['qty'];
    } else {
        $qty = 1;
    }

    $grandTotal += $price * $qty;
    $totalItems += $qty;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checkout - Wild Skincare</title>
    <link rel="stylesheet" href="./CSS/Products.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <style>
        body {
            background: #fdecec;
            font-family: 'Open Sans', sans-serif;
        }
        .checkout-wrapper {
            max-width: 900px;
            margin: 40px auto;
            background: #fff;
            border-radius: 12px;
            padding: 24px 28px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.08);
        }
        .checkout-title {
            font-size: 22px;
            font-weight: 700;
            color: #b22222;
            margin-bottom: 16px;
        }

        /* table layout */

        .checkout-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        .checkout-table thead {
            background: #f9f9f9;
        }
        .checkout-table th,
        .checkout-table td {
            padding: 10px 12px;
            border-bottom: 1px solid #eee;
            text-align: left;
            font-size: 14px;
        }
        .product-cell {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .product-cell img {
            width: 55px;
            height: 55px;
            border-radius: 8px;
            object-fit: cover;
        }
        .product-name {
            font-weight: 600;
        }


        .checkout-total {
            margin-top: 18px;
            font-size: 16px;
            font-weight: 700;
            text-align: right;
        }



        .checkout-actions {
            margin-top: 22px;
            display: flex;
            justify-content: flex-end;
            gap: 10px;
        }
        .btn-pill {
            border: none;
            border-radius: 999px;
            padding: 10px 22px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            display: inline-block;
            text-decoration: none;
        }
        .btn-confirm {
            background: #ffd814;
            color: #000;
        }
        .btn-back {
            background: #eee;
            color: #333;
        }
    </style>
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="checkout-wrapper">
    <div class="checkout-title">Review Your Order</div>

    <table class="checkout-table">
        <thead>
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Line Total</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($cart as $item):
            $name  = $item['name'];
            $price = (float)$item['price'];
            $image = $item['image'] ?? '';
            $qty   = isset($item['qty']) ? (int)$item['qty'] : 1;
            $lineTotal = $price * $qty;
        ?>
            <tr>
                <td>
                    <div class="product-cell">
                        <?php if ($image): ?>
                            <img src="<?= htmlspecialchars($image) ?>" alt="<?= htmlspecialchars($name) ?>">
                        <?php endif; ?>
                        <span class="product-name"><?= htmlspecialchars($name) ?></span>
                    </div>
                </td>
                <td>$<?= number_format($price, 2) ?></td>
                <td><?= $qty ?></td>
                <td>$<?= number_format($lineTotal, 2) ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <div class="checkout-total">
        Subtotal (<?= $totalItems ?> items): $<?= number_format($grandTotal, 2) ?>
    </div>

    <div class="checkout-actions">
        <form action="thank_you.php" method="post">
            <button type="submit" class="btn-pill btn-confirm">Confirm Purchase</button>
        </form>



        <a href="cart.php" class="btn-pill btn-back">Back to Cart</a>
    </div>
</div>

</body>
</html>
                        