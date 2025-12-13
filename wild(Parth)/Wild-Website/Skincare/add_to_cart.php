<?php
session_start();

// Only handle POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: products.php");
    exit;
}

// Read form fields
$name   = $_POST['name']   ?? '';
$price  = $_POST['price']  ?? '';
$image  = $_POST['image']  ?? '';
$qty    = isset($_POST['quantity']) ? (int)$_POST['quantity'] : 1;
$action = $_POST['action'] ?? 'add';

if ($name === '' || $price === '') {
    header("Location: products.php");
    exit;
}

if ($qty < 1) {
    $qty = 1;
}

$price = (float)$price;

// init cart
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// add or update
$found = false;
foreach ($_SESSION['cart'] as &$item) {
    if ($item['name'] === $name && (float)$item['price'] === $price) {
        $item['qty'] += $qty;
        $found = true;
        break;
    }
}
unset($item);

if (!$found) {
    $_SESSION['cart'][] = [
        "name"  => $name,
        "price" => $price,
        "image" => $image,
        "qty"   => $qty,
    ];
}

// build proper path
$base = rtrim(dirname($_SERVER['PHP_SELF']), '/');

// BUY NOW → straight to cart
if ($action === "buy_now") {
    header("Location: $base/buy.php");
    exit;
}

// ADD TO CART → back to products with popup
$_SESSION['cart_message'] = "Item added to cart successfully";
header("Location: $base/products.php");
exit;
