<?php
session_start();

$host     = "localhost";
$user     = "root";
$password = "";
$dbname   = "sara";

$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get input
$email          = trim($_POST['email'] ?? '');
$passwordInput  = trim($_POST['password'] ?? '');

if ($email === '' || $passwordInput === '') {
    header("Location: login.php?error=required");
    exit;
}

// Fetch user
$sql  = "SELECT * FROM users_video_access WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
$user   = $result->fetch_assoc();

// Validate login
if (!$user || $passwordInput !== $user['password']) {
    header("Location: login.php?error=invalid");
    exit;
}

// Set Session
$_SESSION['user_id']   = $user['id'];
$_SESSION['user_name'] = $user['name'];
$_SESSION['has_paid']  = (int)$user['has_paid'];

// REDIRECT BASED ON SUBSCRIPTION
if ($_SESSION['has_paid'] === 1) {
    // Already purchased subscription → go to multimedia paid section
    header("Location: multimedia.php#paid-section");
    exit;
} else {
    // No subscription → go to subscription purchase page
    header("Location: subscription.html");
    exit;
}
