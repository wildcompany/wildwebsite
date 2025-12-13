<?php
session_start();

if (isset($_POST['index'])) {
    $i = $_POST['index'];
    unset($_SESSION['cart'][$i]);
    $_SESSION['cart'] = array_values($_SESSION['cart']); // reset keys
}

header("Location: cart.php");
exit();
?>
