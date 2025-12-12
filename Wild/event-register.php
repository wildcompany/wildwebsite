<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Event Registration | Wild Skincare</title>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- CSS -->
  <link rel="stylesheet" href="./CSS/event-register.css">
</head>

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

<!-- REGISTRATION CONFIRMATION POPUP -->
<div class="confirm-overlay" id="confirmOverlay"></div>

<div class="confirm-popup" id="confirmPopup">
    <span class="confirm-close" onclick="closeConfirmPopup()">&times;</span>

    <i class="fa-solid fa-circle-check"></i>
    <h2>Registration Confirmed!</h2>
    <p>Thank you for registering. We look forward to seeing you at the event.</p>

    <button onclick="closeConfirmPopup()" class="confirm-btn">OK</button>
</div>

<body>

<!-- ================= NAVBAR ================= -->
<header class="navbar">
  <div class="logo">
      <img src="./img/LOGO - Wild Natural Products and Events.PNG" alt="" style="width: 100px; height: auto;" />
    </div>

  <nav class="nav-links">
    <a href="events.php" class="active">Events</a>
  </nav>
</header>

<!-- ================= HERO ================= -->
<section class="register-hero">
  <h1>Event Registration</h1>
  <p>Reserve your spot for our skincare workshop & farm experiences</p>
</section>

<!-- ================= FORM SECTION ================= -->
<section class="register-container">

  <form class="register-form" action="register-submit.php" method="POST">

    <h2>Register Now</h2>

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
        <select name="event" required>
          <option value="">Choose an event</option>
          <option>Natural Face Products Workshop</option>
          <option>Farm Tour Experience</option>
        </select>
      </div>
    </div>

    <div class="form-group full">
      <label>Message (Optional)</label>
      <textarea name="message" rows="4" placeholder="Any special requests or questions?"></textarea>
    </div>

    <button  class="submit-btn" onclick="showConfirmPopup()">
      <i class="fa-solid fa-calendar-check"></i> Confirm Registration
    </button>

  </form>

</section>

<!-- ================= FOOTER ================= -->
<footer class="footer">
  <p>© 2025 Wild Skincare | Founded by Sara Hashemi Nasab</p>
</footer>

</body>
</html>
