<?php
session_start();

$isLoggedIn = isset($_SESSION['user_id']);
$hasPaid    = $isLoggedIn && !empty($_SESSION['has_paid']);
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Educational Multimedia | WILD – Emotional Intelligence</title>

  <link rel="stylesheet" href="../css/multimedia.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
</head>
<body>

  <!-- NAVBAR -->
    <!-- NAVBAR -->
  <header class="navbar">
    <div class="logo">
      <div class="logo-circle" style="background-image:url(../images/logo.png)"></div>
      <span>Emotional Intelligence</span>
    </div>
    <nav class="nav-links">
      <a href="index.html">Home</a>
      <a href="about.html">About</a>

      <div class="dropdown">
        <a href="events.html">Events</a>
        <ul class="dropdown-menu">
          <li><a href="#">Upcoming Events</a></li>
          <li><a href="#">Workshops</a></li>
          <li><a href="#">Seminars</a></li>
          <li><a href="#">Leadership Talks</a></li>
        </ul>
      </div>

      <div class="dropdown">
        <a href="multimedia.php">Educational Multimedia</a>
        <ul class="dropdown-menu">
          <li><a href="#videos-section">Videos</a></li>
          <li><a href="#podcasts-section">Podcasts</a></li>
          <li><a href="#publications-section">Publications</a></li>
        </ul>
      </div>

      <a href="subscription.html">Subscription</a>
      <a href="cart.php">Cart 🛒</a>
    </nav>
  </header>

<?php if ($isLoggedIn): ?>
  <!-- Profile badge + dropdown -->
  <div class="mm-profile">
    <button class="mm-profile-avatar" type="button">
      <?php
        $fullName = $_SESSION['user_name'] ?? 'User';
        $initial  = strtoupper(mb_substr($fullName, 0, 1, 'UTF-8'));
        echo htmlspecialchars($initial);
      ?>
    </button>

    <div class="mm-profile-menu">
      <a href="#" class="mm-profile-item mm-profile-item--active">Profile</a>
      <a href="logout_for_video_access.php" class="mm-profile-item">Logout</a>
    </div>
  </div>
<?php endif; ?>

  <!-- HERO -->
  <section class="hero">
    <div class="container">
      <h1>Educational Multimedia</h1>
      <p>Explore videos, podcasts, and publications — choose Free Access or Paid Version.</p>
    </div>
  </section>

  <!-- TOP SELECT -->
  <div class="top-select container">
    <!-- Free card unchanged -->
    <a class="select-card" href="#free-section">
      <div>
        <h3>Free Access</h3>
        <p>Watch and read our free samples</p>
      </div>
    </a>

    <!-- Paid card – same design, dynamic buttons only -->
    <!-- Paid card – behaviour based on login/subscription -->
<div class="select-card">
  <div>
    <h3>Paid Version</h3>
    <p>Premium content available for purchase.</p>

    <?php if (!$isLoggedIn): ?>
        <!-- Not logged in: show Login + Sign Up -->
        <div class="btn-row">
          <a href="login.php" class="btn btn-primary">Login</a>
          <a href="signup.php" class="btn btn-outline">Sign Up</a>
        </div>

    <?php elseif ($isLoggedIn && !$hasPaid): ?>
        <!-- Logged in but NOT subscribed: send to subscription page -->
        <div class="btn-row">
          <a href="subscription.php" class="btn btn-primary">Go to Subscription</a>
        </div>

    <?php else: ?>
        <!-- Logged in AND subscribed: ONLY show premium content button -->
        <div class="btn-row">
          <a href="#paid-section" class="btn btn-primary">View Premium Content</a>
        </div>
    <?php endif; ?>
  </div>
</div>

</div>

  <!-- MAIN -->
  <main class="container">

    <!-- FREE ACCESS -->
    <section id="free-section">
      <h2 class="section-title">Free Access</h2>

      <div id="videos-section">
        <h3 class="category-title">Video Sample</h3>
        <div class="grid">
          <article class="card">
            <div class="thumb">
              <iframe src="https://www.youtube.com/embed/dlM4jqZXdnY" allowfullscreen></iframe>
            </div>
            <h3>Emotional Intelligence Basics</h3>
            <div class="meta">Intro · 12 min</div>
            <div class="row">
              <a class="btn btn-outline" href="#">Browse More Videos</a>
            </div>
          </article>
        </div>
      </div>

      <div id="podcasts-section">
        <h3 class="category-title">Podcast Sample</h3>
        <div class="grid">
          <article class="card">
            <div style="display:flex; gap:12px; align-items:center">
              <div style="width:78px; height:78px; border-radius:10px; background:#e8f4ff; display:grid; place-items:center">🎙️</div>
              <div style="flex:1">
                <h3>Leadership & Emotions — Ep 1</h3>
                <div class="meta">Hosted by WILD · 34 min</div>
              </div>
            </div>
            <div class="row" style="margin-top:12px">
              <a class="btn btn-outline" href="#">Browse More Podcasts</a>
            </div>
          </article>
        </div>
      </div>

      <div id="publications-section">
        <h3 class="category-title">Publication Sample</h3>
        <div class="grid">
          <article class="card">
            <h3>5 Ways to Boost Emotional Intelligence</h3>
            <div class="meta">Article · 8 min read</div>
            <div class="row">
              <a class="btn btn-outline" href="#">Browse More Publications</a>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- PAID ACCESS -->
    <section id="paid-section">
      <h2 class="section-title">Paid Version</h2>

      <?php if (!$isLoggedIn): ?>
        <!-- Not logged in: gentle message -->
        <p class="info-text">
          Please log in to access premium multimedia content.
        </p>

      <?php elseif ($isLoggedIn && !$hasPaid): ?>
        <!-- Logged in but not subscribed -->
        <p class="info-text">
          Your account does not have an active subscription. Please purchase a plan on the Subscription page.
        </p>
        <a href="subscription.html" class="btn btn-primary">Go to Subscription</a>

      <?php else: ?>
        <!-- Logged in + subscribed: show full paid content exactly as designed -->

        <div id="videos-paid">
          <h3 class="category-title">Video Sample</h3>
          <div class="grid">
            <article class="card">
              <div class="thumb">
                <img src="images/video-thumbnail-1.jpg" alt="Leadership & EI — Deep Dive">
              </div>
              <h3>Leadership & EI — Deep Dive</h3>
              <div class="meta">Masterclass · 45 min</div>
              <div class="row">
                <a class="btn btn-primary" href="add_to_cart.php?id=video1">Add to Cart</a>

                <a class="btn btn-outline" href="subscription.html">View</a>
              </div>
            </article>
          </div>
        </div>

        <div id="podcasts-paid">
          <h3 class="category-title">Podcast Sample</h3>
          <div class="grid">
            <article class="card">
              <div style="display:flex; gap:12px; align-items:center">
                <div style="width:84px; height:84px; border-radius:10px; background:#fde68a; display:grid; place-items:center; font-size:28px">🎧</div>
                <div style="flex:1">
                  <h3>Mastering Empathy — Episode</h3>
                  <div class="meta">Exclusive episode · 28 min</div>
                </div>
              </div>
              <div class="row" style="margin-top:12px">
              <a class="btn btn-primary" href="add_to_cart.php?id=video2">Add to Cart</a>
                <a class="btn btn-outline" href="subscription.html">View</a>
              </div>
            </article>
          </div>
        </div>

        <div id="publications-paid">
          <h3 class="category-title">Publication Sample</h3>
          <div class="grid">
            <article class="card">
              <h3>EI Workbook — Advanced Exercises</h3>
              <div class="meta">e-Workbook · PDF</div>
              <div class="row">
             <a class="btn btn-primary" href="add_to_cart.php?id=video3">Add to Cart</a>
                <a class="btn btn-outline" href="subscription.html">View</a>
              </div>
            </article>
          </div>
        </div>

      <?php endif; ?>
    </section>

  </main>

  <!-- FOOTER -->
  <footer style="width:100%;">
    <div class="container" style="text-align:center;">
      <div style="font-weight:700;">© 2025 WILD - Emotional Intelligence in Leadership</div>
      <div style="opacity:0.9; margin-top:6px; font-size:0.95rem;">All Rights Reserved.</div>
    </div>
  </footer>

  <script>
document.addEventListener('DOMContentLoaded', function () {
    const profile = document.querySelector('.mm-profile');
    if (!profile) return;

    const btn  = profile.querySelector('.mm-profile-avatar');
    const menu = profile.querySelector('.mm-profile-menu');

    // Open / close on avatar click
    btn.addEventListener('click', function (e) {
        e.stopPropagation();
        profile.classList.toggle('open');
    });

    // Keep menu open when clicking inside it
    if (menu) {
        menu.addEventListener('click', function (e) {
            e.stopPropagation();
        });
    }

    // Close when clicking anywhere else on the page
    document.addEventListener('click', function () {
        profile.classList.remove('open');
    });
});
</script>

</body>
</html>