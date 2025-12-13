<?php
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo 'Invalid request method';
    exit;
}

$fullName  = isset($_POST['full_name']) ? trim($_POST['full_name']) : '';
$email     = isset($_POST['email']) ? trim($_POST['email']) : '';
$eventType = isset($_POST['event_type']) ? trim($_POST['event_type']) : '';
$message   = isset($_POST['message']) ? trim($_POST['message']) : '';

if ($fullName === '' || $email === '') {
    http_response_code(400);
    echo 'Name and Email are required.';
    exit;
}

$stmt = $conn->prepare(
    "INSERT INTO eil_event_request (full_name, email, event_type, message)
     VALUES (?, ?, ?, ?)"
);

if (!$stmt) {
    http_response_code(500);
    echo 'Prepare failed: ' . $conn->error;
    exit;
}

$stmt->bind_param("ssss", $fullName, $email, $eventType, $message);

if ($stmt->execute()) {
    // Tell JS everything is OK
    echo 'OK';
} else {
    http_response_code(500);
    echo 'Error saving request: ' . $conn->error;
}

$stmt->close();
$conn->close();
?>
