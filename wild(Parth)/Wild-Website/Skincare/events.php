<?php
// Simple search logic for this page
$search      = isset($_GET['q']) ? trim($_GET['q']) : '';
$searchLower = strtolower($search);

function pageMatches($searchLower, $text)
{
    if ($searchLower === '') return true; // no filter → show everything
    return strpos(strtolower($text), $searchLower) !== false;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Events & Workshops - Wild Skincare</title>
  <link rel="stylesheet" href="./CSS/events.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>
  <!-- ================= NAVBAR ================= -->
  <?php include 'navbar.php'; ?>

  <?php
  // Text blocks for search matching
  $heroText = "Events & Workshops Join us for exclusive events, workshops, and community gatherings. Connect with fellow natural beauty enthusiasts and learn from our experts.";

  $event1Text = "Natural Skincare Workshop: DIY Face Masks Learn to create your own natural face masks using organic ingredients. Perfect for beginners! November 15, 2025 2:00 PM – 4:00 PM Wild Skincare Studio, Portland Workshop";
  $event2Text = "Product Launch: Winter Wellness Collection Be the first to experience our new winter collection and enjoy exclusive launch discounts. November 28, 2025 6:00 PM – 8:00 PM Virtual Event Launch";
  $event3Text = "New Year, New Skin: 2026 Kickoff Event Start the new year with fresh skincare goals and connect with our community. January 10, 2026 5:00 PM – 7:00 PM Virtual Event Community";

  $past1Text  = "Autumn Harvest Celebration October 14, 2025 85 attendees Completed";
  $past2Text  = "Summer Skincare Essentials Workshop August 20, 2025 62 attendees Completed";
  $past3Text  = "Spring Launch: Bloom Collection April 5, 2025 234 attendees Completed";

  $showUpcoming =
      pageMatches($searchLower, $event1Text) ||
      pageMatches($searchLower, $event2Text) ||
      pageMatches($searchLower, $event3Text);

  $showPast =
      pageMatches($searchLower, $past1Text) ||
      pageMatches($searchLower, $past2Text) ||
      pageMatches($searchLower, $past3Text);
  ?>

  <!-- ================= HERO SECTION ================= -->
  <?php if (pageMatches($searchLower, $heroText)) : ?>
  <section class="hero">
    <h1>Events & Workshops</h1>
    <p>
      Join us for exclusive events, workshops, and community gatherings. Connect with <br>
      fellow natural beauty enthusiasts and learn from our experts.
    </p>
  </section>
  <?php endif; ?>

  <!-- ================= FEATURED EVENTS ================= -->
  <?php if ($showUpcoming) : ?>
  <section class="featured">
    <h2>Featured Events</h2>
  </section>

  <!-- ================= FEATURED EVENTS SECTION ================= -->
  <section class="events-section">

    <!-- ===== Event Card 1 ===== -->
    <?php if (pageMatches($searchLower, $event1Text)) : ?>
    <div class="event-card">
      <div class="event-image">
        <img src="./img/cream.png" alt="DIY Face Masks">
        <span class="event-badge workshop">Workshop</span>
      </div>

      <div class="event-content">
        <h3>Natural Skincare Workshop: DIY Face Masks</h3>
        <p>Learn to create your own natural face masks using organic ingredients. Perfect for beginners!</p>

        <div class="event-details">
          <p><i class="fa-regular fa-calendar"></i> November 15, 2025</p>
          <p><i class="fa-regular fa-clock"></i> 2:00 PM – 4:00 PM</p>
          <p><i class="fa-solid fa-location-dot"></i> Wild Skincare Studio, Portland</p>
        </div>

        <div class="event-footer">
          <p><i class="fa-solid fa-users"></i> 18/25 attending</p>
          <a class="register-btn" href="event_register.php?event_id=1">Register</a>
        </div>
      </div>
    </div>
    <?php endif; ?>

    <!-- ===== Event Card 2 ===== -->
    <?php if (pageMatches($searchLower, $event2Text)) : ?>
    <div class="event-card">
      <div class="event-image">
        <img src="./img/serum.png" alt="Winter Wellness">
        <span class="event-badge launch">Launch</span>
      </div>

      <div class="event-content">
        <h3>Product Launch: Winter Wellness Collection</h3>
        <p>Be the first to experience our new winter collection and enjoy exclusive launch discounts.</p>

        <div class="event-details">
          <p><i class="fa-regular fa-calendar"></i> November 28, 2025</p>
          <p><i class="fa-regular fa-clock"></i> 6:00 PM – 8:00 PM</p>
          <p><i class="fa-solid fa-laptop"></i> Virtual Event</p>
        </div>

        <div class="event-footer">
          <p><i class="fa-solid fa-users"></i> 142/200 attending</p>
          <a class="register-btn" href="event_register.php?event_id=2">Register</a>
        </div>
      </div>
    </div>
    <?php endif; ?>

    <!-- ===== Event Card 3 ===== -->
    <?php if (pageMatches($searchLower, $event3Text)) : ?>
    <div class="event-card">
      <div class="event-image">
        <img src="./img/clay.png" alt="New Year Event">
        <span class="event-badge community">Community</span>
      </div>

      <div class="event-content">
        <h3>New Year, New Skin: 2026 Kickoff Event</h3>
        <p>Start the new year with fresh skincare goals and connect with our community.</p>

        <div class="event-details">
          <p><i class="fa-regular fa-calendar"></i> January 10, 2026</p>
          <p><i class="fa-regular fa-clock"></i> 5:00 PM – 7:00 PM</p>
          <p><i class="fa-solid fa-laptop"></i> Virtual Event</p>
        </div>

        <div class="event-footer">
          <p><i class="fa-solid fa-users"></i> 45/150 attending</p>
          <a class="register-btn" href="event_register.php?event_id=3">Register</a>
        </div>
      </div>
    </div>
    <?php endif; ?>

  </section>
  <?php endif; ?>

  <!-- ================= PAST EVENTS SECTION ================= -->
  <?php if ($showPast) : ?>
  <section class="past-events-section">
    <h2>Past Events</h2>
    <div class="underline"></div>

    <div class="past-events-container">

      <?php if (pageMatches($searchLower, $past1Text)) : ?>
      <div class="past-card">
        <div class="past-image">
          <img src="https://images.unsplash.com/photo-1501004318641-b39e6451bec6?auto=format&fit=crop&w=800&q=80" alt="Autumn Harvest Celebration">
          <div class="overlay">Completed</div>
        </div>
        <div class="past-content">
          <h3>Autumn Harvest Celebration</h3>
          <p class="date">October 14, 2025</p>
          <p class="attendees">85 attendees</p>
        </div>
      </div>
      <?php endif; ?>

      <?php if (pageMatches($searchLower, $past2Text)) : ?>
      <div class="past-card">
        <div class="past-image">
          <img src="./img/oil.png" alt="Summer Skincare Workshop">
          <div class="overlay">Completed</div>
        </div>
        <div class="past-content">
          <h3>Summer Skincare Essentials Workshop</h3>
          <p class="date">August 20, 2025</p>
          <p class="attendees">62 attendees</p>
        </div>
      </div>
      <?php endif; ?>

      <?php if (pageMatches($searchLower, $past3Text)) : ?>
      <div class="past-card">
        <div class="past-image">
          <img src="https://images.unsplash.com/photo-1526045478516-99145907023c?auto=format&fit=crop&w=800&q=80" alt="Spring Launch Bloom Collection">
          <div class="overlay">Completed</div>
        </div>
        <div class="past-content">
          <h3>Spring Launch: Bloom Collection</h3>
          <p class="date">April 5, 2025</p>
          <p class="attendees">234 attendees</p>
        </div>
      </div>
      <?php endif; ?>

    </div>
  </section>
  <?php endif; ?>

  <!-- ================= FOOTER SECTION ================= -->
  <footer class="footer">
    <div class="footer-container">
      <div class="footer-column brand">
        <h3 class="footer-logo">Wild Skincare</h3>
        <p>Premium natural skincare for radiant, healthy skin. Founded by Sara Hashemi Nasab.</p>

        <div class="social-icons">
          <a href="#"><i class="fa-regular fa-envelope"></i></a>
          <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#"><i class="fa-brands fa-instagram"></i></a>
          <a href="#"><i class="fa-brands fa-twitter"></i></a>
          <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
        </div>
      </div>

      <div class="footer-column">
        <h4>Shop</h4>
        <ul>
          <li><a href="#">All Products</a></li>
          <li><a href="#">Cleansers</a></li>
          <li><a href="#">Serums</a></li>
          <li><a href="#">Moisturizers</a></li>
          <li><a href="#">Masks</a></li>
          <li><a href="#">Gift Sets</a></li>
        </ul>
      </div>

      <div class="footer-column">
        <h4>About</h4>
        <ul>
          <li><a href="#">Our Story</a></li>
          <li><a href="#">Our Values</a></li>
          <li><a href="#">Ingredients</a></li>
          <li><a href="#">Sustainability</a></li>
          <li><a href="#">Press</a></li>
        </ul>
      </div>

      <div class="footer-column">
        <h4>Support</h4>
        <ul>
          <li><a href="#">Contact Us</a></li>
          <li><a href="#">FAQs</a></li>
          <li><a href="#">Shipping Info</a></li>
          <li><a href="#">Returns</a></li>
          <li><a href="#">Track Order</a></li>
        </ul>
      </div>
    </div>
  </footer>

  <div class="footer-bottom">
    <p>© 2025 Wild Skincare. All rights reserved. Founded by Sara Hashemi Nasab.</p>
    <div class="footer-links">
      <a href="#">www.wnpe.com</a>
      <a href="#">Privacy Policy</a>
      <a href="#">Terms of Service</a>
    </div>
  </div>

  <!-- NOTE:
       Popup removed from this version because Register now routes to event_register.php
       If you still want popup later, we can add it back as a separate flow.
  -->

</body>
</html>
