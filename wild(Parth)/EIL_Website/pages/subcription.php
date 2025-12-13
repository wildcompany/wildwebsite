<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$userId = $_SESSION['user_id'];

$host     = "localhost";
$user     = "root";
$password = "";
$dbname   = "sara";

$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // validate payment first

    $stmt = $conn->prepare("UPDATE users_video_access SET has_paid = 1 WHERE id = ?");
    $stmt->bind_param("i", $userId);
    $stmt->execute();

    $_SESSION['has_paid'] = 1;

    $stmt->close();
    $conn->close();

    header("Location: multimedia.php#paid-section");
    exit;
}
?>
<!doctype html>
<html>
<head><title>Subscription</title></head>
<body>
  <!-- Your pricing UI -->
  <h2>Subscribe for Premium Video Access</h2>
  <form method="POST" action="subscription.html">
    <!-- Payment fields / dummy button for now -->
    <button type="submit">Activate Subscription</button>
  </form>
</body>
</html>
