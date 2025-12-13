<?php
// DB details
$host     = "localhost";
$user     = "root";
$password = "";
$dbname   = "sara";

// Connect
$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$full_name      = $_POST['full_name']  ?? '';
$email          = $_POST['email']      ?? '';
$phone          = $_POST['phone']      ?? '';
$service        = $_POST['service']    ?? '';
$preferred_date = $_POST['preferred_date'] ?? '';
$preferred_time = $_POST['preferred_time'] ?? '';
$notes          = $_POST['notes']      ?? '';

// Basic required check (server-side)
if ($full_name === '' || $email === '' || $phone === '' || $service === '') {
    die("Required fields are missing.");
}

// Insert query (prepared statement)
$stmt = $conn->prepare("
    INSERT INTO appointments
    (full_name, email, phone, service, preferred_date, preferred_time, notes)
    VALUES (?, ?, ?, ?, ?, ?, ?)
");
$stmt->bind_param(
    "sssssss",
    $full_name,
    $email,
    $phone,
    $service,
    $preferred_date,
    $preferred_time,
    $notes
);

if ($stmt->execute()) {
    // Option 1: Redirect to success page
    header("Location: appointment_success.php");
    exit; // IMPORTANT

} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
