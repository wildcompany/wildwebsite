<?php
session_start();

$id = $_GET['id'] ?? '';

if (isset($_SESSION['cart'][$id])) {
    unset($_SESSION['cart'][$id]);
}

// if cart becomes empty, you can also unset it completely
if (empty($_SESSION['cart'])) {
    unset($_SESSION['cart']);
}

header('Location: cart.php');
exit;
