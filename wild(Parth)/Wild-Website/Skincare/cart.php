<?php
session_start();

// ---------------------------
// 1. LOGIN FLAG
// ---------------------------
$isLoggedIn = isset($_SESSION['user_id']);

// ---------------------------
// 2. HANDLE QUANTITY CHANGES
// ---------------------------
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['qty_action'])) {

    $index = isset($_POST['index']) ? (int)$_POST['index'] : -1;

    if ($index >= 0 && isset($_SESSION['cart'][$index])) {

        $qty = isset($_POST['qty'])
            ? (int)$_POST['qty']
            : (int)($_SESSION['cart'][$index]['qty'] ?? 1);

        if ($qty < 0) $qty = 0;

        if ($_POST['qty_action'] === 'decrease') $qty--;
        if ($_POST['qty_action'] === 'increase') $qty++;

        if ($qty <= 0) {
            unset($_SESSION['cart'][$index]);
            $_SESSION['cart'] = array_values($_SESSION['cart']);
        } else {
            $_SESSION['cart'][$index]['qty'] = $qty;
        }
    }

    header('Location: cart.php');
    exit;
}

// ---------------------------
// 3. DELETE ITEM
// ---------------------------
if (isset($_GET['delete'])) {
    $index = (int)$_GET['delete'];
    if (isset($_SESSION['cart'][$index])) {
        unset($_SESSION['cart'][$index]);
        $_SESSION['cart'] = array_values($_SESSION['cart']);
    }
    header("Location: cart.php");
    exit;
}

$cart = $_SESSION['cart'] ?? [];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart - Wild Skincare</title>

    <link rel="stylesheet" href="./CSS/cart.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
/* SUMMARY BOX BELOW PRODUCT CARD */
.cart-summary-box {
    width: 320px;
    background: #ffffff;
    padding: 20px 25px;
    border-radius: 12px;
    box-shadow: 0 4px 18px rgba(0,0,0,0.12);
    border: 1px solid #efefef;
    margin-left: auto;      /* pushes it to the right */
    margin-right: 80px;     /* distance from right side */
    margin-top: 20px;       /* space below product card */
}

.summary-header {
    display: flex;
    justify-content: space-between;
    font-size: 15px;
    margin-bottom: 15px;
    color: #444;
}

.summary-header strong {
    font-weight: 700;
    color: #000;
}

.btn-checkout {
    width: 100%;
    background: #ffd814;
    color: #000;
    border: none;
    padding: 12px 0;
    font-size: 15px;
    border-radius: 999px;
    cursor: pointer;
    font-weight: 600;
    transition: 0.2s ease;
}

.btn-checkout:hover {
    background: #f5c000;
}
</style>



        </head>

<body>

<?php include 'navbar.php'; ?>

<h1 style="text-align:center; color:#b22222; margin-top:40px;">Your Cart</h1>

<div class="cart-container">

<?php if (!empty($cart)) { ?>

    <?php
    $grandTotal = 0;
    $totalItems = 0;

    foreach ($cart as $index => $item) {
        $name  = $item['name'];
        $price = (float)$item['price'];
        $image = $item['image'] ?? '';
        $qty   = isset($item['qty']) ? (int)$item['qty'] : 1;

        $lineTotal = $price * $qty;
        $grandTotal += $lineTotal;
        $totalItems += $qty;
    ?>
        <div class="cart-item">

            <div class="cart-image">
                <img src="<?php echo htmlspecialchars($image); ?>"
                     alt="<?php echo htmlspecialchars($name); ?>">
            </div>

            <div class="cart-details">
                <h3><?php echo htmlspecialchars($name); ?></h3>
                <p>Price: $<?php echo number_format($price, 2); ?></p>

                <!-- Quantity Controller -->
                <form method="post" action="cart.php"
                      style="display:flex; align-items:center; gap:8px; margin:8px 0;">
                    <input type="hidden" name="index" value="<?php echo $index; ?>">

                    <span>Qty:</span>

                    <input type="number"
                           name="qty"
                           min="0"
                           value="<?php echo htmlspecialchars($qty); ?>"
                           style="width:60px; text-align:center; padding:4px;">

                    <button type="submit"
                            name="qty_action"
                            value="decrease"
                            style="padding:4px 10px; border:none; border-radius:4px; background:#d9534f; color:#fff;">
                        -
                    </button>

                    <button type="submit"
                            name="qty_action"
                            value="increase"
                            style="padding:4px 10px; border:none; border-radius:4px; background:#5cb85c; color:#fff;">
                        +
                    </button>
                </form>

                <p class="price">Total: $<?php echo number_format($lineTotal, 2); ?></p>
            </div>

            <a class="delete-btn" href="cart.php?delete=<?php echo $index; ?>">
                <i class="fa-solid fa-trash"></i>
            </a>

        </div>
    <?php } ?>

   <!-- RIGHT SIDE SUMMARY CARD -->
<div class="cart-summary-box">
    <div class="summary-header">
        <span>Subtotal (<?php echo $totalItems; ?> items):</span>
        <strong>$<?php echo number_format($grandTotal, 2); ?></strong>
    </div>

    <form action="buy.php" method="post">
        <?php if ($isLoggedIn): ?>
            <button type="submit" class="btn-checkout">Proceed to Buy</button>
        <?php else: ?>
            <button type="button" class="btn-checkout" onclick="showLoginPopup()">Proceed to Buy</button>
        <?php endif; ?>
    </form>
</div>



<?php } else { ?>

    <p style="text-align:center; color:#333; margin-top:20px;">Your cart is empty.</p>

<?php } ?>

</div>

<!-- Login Required Popup -->
<div id="loginPopup" style="
    display:none;
    position:fixed;
    inset:0;
    background:rgba(0,0,0,0.4);
    justify-content:center;
    align-items:center;
    z-index:9999;
">
    <div style="
        background:#fff;
        padding:25px;
        border-radius:12px;
        width:90%;
        max-width:350px;
        text-align:center;
        box-shadow:0 6px 20px rgba(0,0,0,0.2);
    ">
        <h3>Login Required</h3>
        <p>Please login to proceed with your purchase.</p>

        <div style="margin-top:20px;">
            <a href="signIn.php" style="
                padding:10px 20px;
                background:#ff4b4b;
                color:#fff;
                border-radius:6px;
                text-decoration:none;
                margin-right:10px;
            ">Login</a>

            <a href="signUp.php" style="
                padding:10px 20px;
                background:#eee;
                color:#333;
                border-radius:6px;
                text-decoration:none;
            ">Sign Up</a>
        </div>

        <p onclick="closeLoginPopup()" style="margin-top:15px; cursor:pointer; color:#555;">
            Continue Browsing
        </p>
    </div>
</div>

<script>
function showLoginPopup() {
    document.getElementById('loginPopup').style.display = 'flex';
}

function closeLoginPopup() {
    document.getElementById('loginPopup').style.display = 'none';
}
</script>

</body>
</html>
