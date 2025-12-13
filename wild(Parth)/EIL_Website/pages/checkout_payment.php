<?php
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: checkout.html');
    exit;
}

$fullName   = trim($_POST['full_name'] ?? '');
$email      = trim($_POST['email'] ?? '');
$cardNumber = trim($_POST['card_number'] ?? '');
$expiry     = trim($_POST['expiry'] ?? '');
$cvv        = trim($_POST['cvv'] ?? '');

if ($fullName === '' || $email === '' || $cardNumber === '' || $expiry === '' || $cvv === '') {
    die('All fields are required.');
}

$stmt = $conn->prepare(
    "INSERT INTO eil_payment (full_name, email, card_number, expiry, cvv)
     VALUES (?, ?, ?, ?, ?)"
);

if (!$stmt) {
    die('Prepare failed: ' . $conn->error);
}

$stmt->bind_param("sssss", $fullName, $email, $cardNumber, $expiry, $cvv);

if ($stmt->execute()) {
    header('Location: success_payment.php');
    exit;
} else {
    echo 'Error: ' . $conn->error;
}

$stmt->close();
$conn->close();
?>
