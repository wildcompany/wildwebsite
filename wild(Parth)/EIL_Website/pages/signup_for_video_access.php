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

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: signup.php");
    exit;
}

$name          = trim($_POST['name'] ?? '');
$email         = trim($_POST['email'] ?? '');
$passwordInput = trim($_POST['password'] ?? '');

if ($name === '' || $email === '' || $passwordInput === '') {
    header("Location: signup.php?error=required");
    exit;
}

// 1️⃣ CHECK IF EMAIL ALREADY EXISTS
$check = $conn->prepare("SELECT id FROM users_video_access WHERE email = ?");
$check->bind_param("s", $email);
$check->execute();
$checkResult = $check->get_result();

if ($checkResult->num_rows > 0) {
    // Email already exists → redirect with error
    header("Location: signup.php?error=exists");
    exit;
}

// 2️⃣ INSERT NEW USER
$stmt = $conn->prepare("
    INSERT INTO users_video_access (name, email, password, has_paid)
    VALUES (?, ?, ?, 0)
");
$stmt->bind_param("sss", $name, $email, $passwordInput);
$stmt->execute();

$newUserId = $stmt->insert_id;

// 3️⃣ CREATE SESSION
$_SESSION['user_id']   = $newUserId;
$_SESSION['user_name'] = $name;
$_SESSION['has_paid']  = 0;

$stmt->close();
$conn->close();

// 4️⃣ REDIRECT TO SUBSCRIPTION PAGE
header("Location: subscription.html");
exit;
?>
