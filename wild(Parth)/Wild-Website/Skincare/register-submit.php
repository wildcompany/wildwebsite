<?php
// DB CONNECTION
$conn = new mysqli("localhost", "root", "", "sara");
if ($conn->connect_error) {
    die("DB connection failed");
}

// ALLOW ONLY POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: events.php");
    exit;
}

// GET DATA
$event_id  = intval($_POST['event_id'] ?? 0);
$full_name = trim($_POST['name'] ?? '');
$email     = trim($_POST['email'] ?? '');
$phone     = trim($_POST['phone'] ?? '');
$message   = trim($_POST['message'] ?? '');

// VALIDATION
if ($event_id <= 0 || $full_name === '' || $email === '' || $phone === '') {
    header("Location: event_register.php?error=1");
    exit;
}

// INSERT (id is AUTO_INCREMENT → DO NOT include)
$stmt = $conn->prepare(
    "INSERT INTO event_registrations
     (event_id, full_name, email, phone, message)
     VALUES (?, ?, ?, ?, ?)"
);

$stmt->bind_param(
    "issss",
    $event_id,
    $full_name,
    $email,
    $phone,
    $message
);

if ($stmt->execute()) {
    $stmt->close();
    header("Location: success_event.php");
    exit;
}

$stmt->close();
header("Location: event_register.php?error=2");
exit;
