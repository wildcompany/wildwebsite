<?php
// ================= DB CONNECTION =================
$host = "localhost";
$user = "root";
$pass = "";
$db   = "sara";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) { die("Database connection failed"); }

// ================= EVENT MAP =================
$eventMap = [
  '1' => 'Natural Face Products Workshop',
  '2' => 'Farm Tour Experience',
];

// eventId can come from URL (first load) or POST (after submit)
$eventId = $_GET['event_id'] ?? $_POST['event_id'] ?? '';
$selectedEvent = $eventMap[(string)$eventId] ?? '';

// ================= HANDLE SUBMIT (SAME FILE) =================
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $event_id   = intval($_POST['event_id'] ?? 0);
  $full_name  = trim($_POST['name'] ?? '');
  $email      = trim($_POST['email'] ?? '');
  $phone      = trim($_POST['phone'] ?? '');
  $message    = trim($_POST['message'] ?? '');

  if ($event_id > 0 && $full_name !== '' && $email !== '' && $phone !== '') {

    $stmt = $conn->prepare(
      "INSERT INTO event_registrations (event_id, full_name, email, phone, message)
       VALUES (?, ?, ?, ?, ?)"
    );

    if ($stmt) {
      $stmt->bind_param("issss", $event_id, $full_name, $email, $phone, $message);

      if ($stmt->execute()) {
        $stmt->close();
        header("Location: event_register.php?event_id={$event_id}&success=1");
        exit;
      }
      $stmt->close();
    }

    header("Location: event_register.php?event_id={$event_id}&error=2");
    exit;
  }

  header("Location: event_register.php?event_id={$event_id}&error=1");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Event Registration | Wild Skincare</title>

  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="./CSS/event_register.css">

  <script>
    function showConfirmPopup() {
      document.getElementById("confirmPopup").style.display = "block";
      document.getElementById("confirmOverlay").style.display = "block";
    }
    function closeConfirmPopup() {
      document.getElementById("confirmPopup").style.display = "none";
      document.getElementById("confirmOverlay").style.display = "none";
    }
  </script>
</head>

<body>

  <div class="confirm-overlay" id="confirmOverlay" onclick="closeConfirmPopup()"></div>

  <div class="confirm-popup" id="confirmPopup" style="display:none;">
    <span class="confirm-close" onclick="closeConfirmPopup()">&times;</span>
    <i class="fa-solid fa-circle-check"></i>
    <h2>Registration Confirmed!</h2>
    <p>Thank you for registering. We look forward to seeing you at the event.</p>
    <button type="button" onclick="closeConfirmPopup()" class="confirm-btn">OK</button>
  </div>

  <header class="navbar">
    <div class="logo">
      <img src="./img/LOGO - Wild Natural Products and Events.PNG" alt="Wild Logo" style="width: 100px; height: auto;" />
    </div>
    <nav class="nav-links">
      <a href="events.php" class="active">Events</a>
    </nav>
  </header>

  <section class="register-hero">
    <h1>Event Registration</h1>
    <p>Reserve your spot for our skincare workshop & farm experiences</p>

    <?php if (!empty($eventId)): ?>
      <p style="margin-top:10px;font-weight:600;">Event ID: <?= htmlspecialchars($eventId) ?></p>
    <?php endif; ?>
  </section>

  <section class="register-container">

    <form class="register-form" method="POST">

      <h2>Register Now</h2>

      <?php if (!empty($_GET['error'])): ?>
        <p style="color:#b71c1c; font-weight:700; text-align:center; margin-bottom:12px;">
          <?php if ($_GET['error'] == '1'): ?>
            Please fill all required fields and select an event.
          <?php else: ?>
            Something went wrong while saving. Please try again.
          <?php endif; ?>
        </p>
      <?php endif; ?>

      <div class="form-row">
        <div class="form-group">
          <label>Full Name</label>
          <input type="text" name="name" required placeholder="Your full name">
        </div>
        <div class="form-group">
          <label>Email Address</label>
          <input type="email" name="email" required placeholder="your@email.com">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group">
          <label>Phone Number</label>
          <input type="text" name="phone" required placeholder="+1 234 567 890">
        </div>

        <div class="form-group">
          <label>Select Event</label>
          <select name="event_id" required>
            <option value="">Choose an event</option>
            <option value="1" <?= ($eventId == '1') ? 'selected' : '' ?>>Natural Face Products Workshop</option>
            <option value="2" <?= ($eventId == '2') ? 'selected' : '' ?>>Farm Tour Experience</option>
          </select>
        </div>
      </div>

      <div class="form-group full">
        <label>Message (Optional)</label>
        <textarea name="message" rows="4" placeholder="Any special requests or questions?"></textarea>
      </div>

      <button type="submit" class="submit-btn">
        <i class="fa-solid fa-calendar-check"></i> Confirm Registration
      </button>

      <?php if (!empty($_GET['success'])): ?>
        <script>window.addEventListener('load', showConfirmPopup);</script>
      <?php endif; ?>

    </form>

  </section>

  <footer class="footer">
    <p>© 2025 Wild Skincare | Founded by Sara Hashemi Nasab</p>
  </footer>

</body>
</html>
