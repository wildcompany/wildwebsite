<?php
session_start();

// ---------------------------
// 1. ADD ITEM TO CART
// ---------------------------
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name  = $_POST['name'] ?? '';
    $price = $_POST['price'] ?? '';
    $image = $_POST['image'] ?? '';

    if (!empty($name) && !empty($price)) {

        // Create cart if not exists
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        // Add item to cart
        $_SESSION['cart'][] = [
            "name"  => $name,
            "price" => $price,
            "image" => $image
        ];

    }
}

// ---------------------------
// 2. DELETE ITEM FROM CART
// ---------------------------
if (isset($_GET['delete'])) {
    $index = $_GET['delete'];
    unset($_SESSION['cart'][$index]);
    $_SESSION['cart'] = array_values($_SESSION['cart']); // re-index

    header("Location: cart.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart - Wild Skincare</title>

    <link rel="stylesheet" href="./CSS/cart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body>

<?php include 'navbar.php'; ?>

<h1 style="text-align:center; color:#b22222; margin-top:40px;">Your Cart</h1>

<div class="cart-container">

<?php if (!empty($_SESSION['cart'])) { ?>

    <?php foreach ($_SESSION['cart'] as $index => $item) { ?>
        <div class="cart-item">

            <div class="cart-image">
                <img src="<?php echo $item['image']; ?>" alt="">
            </div>

            <div class="cart-details">
                <h3><?php echo $item['name']; ?></h3>
                <p class="price">$<?php echo number_format($item['price'], 2); ?></p>
            </div>

            <a class="delete-btn" href="cart.php?delete=<?php echo $index; ?>">
                <i class="fa-solid fa-trash"></i>
            </a>
        </div>
    <?php } ?>

<?php } else { ?>

    <p style="text-align:center; color:#333; margin-top:20px;">Your cart is empty.</p>

<?php } ?>

</div>

<a href="checkout.php" class="checkout-btn">Proceed to Checkout</a>


</body>
</html>
