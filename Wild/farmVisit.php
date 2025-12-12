<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Farm Visit | Wild Skincare</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CSS -->
  <link rel="stylesheet" href="./CSS/farmvisit.css">

  <!-- Fonts & Icons -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>

<?php include 'navbar.php'; ?>

<!-- ================= HERO ================= -->
<section class="hero">
  <h1>Visit Our Farm</h1>
  <p>Experience where Wild Skincare products begin. Tour our organic farm, meet our botanicals, and see sustainable beauty in action.</p>
</section>

<!-- ============== HERO IMAGE ============== -->
<section class="farm-image">
  <img src="./img/Farm.png" alt="Farm View">
</section>

<!-- ============== EXPERIENCE CARDS ============== -->
<section class="experience-section">
  <h2 class="section-title">What You'll Experience</h2>
  <div class="underline"></div>

  <div class="experience-container">

    <div class="experience-card">
      <div class="icon"><i class="fa-solid fa-leaf"></i></div>
      <h3>Organic Gardens</h3>
      <p>Explore our certified organic gardens where we grow many of the botanicals used in our products.</p>
    </div>

    <div class="experience-card">
      <div class="icon"><i class="fa-solid fa-sun"></i></div>
      <h3>Greenhouse Tour</h3>
      <p>Visit our state-of-the-art greenhouse where rare plants are cultivated year-round.</p>
    </div>

    <div class="experience-card">
      <div class="icon"><i class="fa-solid fa-flask"></i></div>
      <h3>Extraction Lab</h3>
      <p>See how we carefully extract essential oils and actives from farm-grown botanicals.</p>
    </div>

    <div class="experience-card">
      <div class="icon"><i class="fa-solid fa-heart"></i></div>
      <h3>Product Workshop</h3>
      <p>Hands-on experience making your own natural skincare sample to take home.</p>
    </div>

  </div>
</section>

<!-- ================= FARM DETAILS ================= -->
<section class="farm-section">
  <h2>Our Sustainable Farm</h2>
  <div class="underline"></div>

  <!-- Row 1 -->
  <div class="farm-row">
    <div class="farm-image">
      <img src="./img/botanical(1).jpg">
    </div>
    <div class="farm-text">
      <h3>50+ Botanical Species</h3>
      <p>Our farm cultivates over 50 different plant species used in Wild Skincare products.</p>
    </div>
  </div>

  <!-- Row 2 -->
  <div class="farm-row reverse">
    <div class="farm-image">
      <img src="./img/botanical(2).jpg">
    </div>
    <div class="farm-text">
      <h3>Zero Waste Practices</h3>
      <p>We practice sustainable farming with composting, rainwater harvesting and natural pest control.</p>
    </div>
  </div>

  <!-- Row 3 -->
  <div class="farm-row">
    <div class="farm-image placeholder">
      <i class="fa-regular fa-image"></i>
    </div>
    <div class="farm-text">
      <h3>Educational Programs</h3>
      <p>Learn about sustainable agriculture, plant science and ingredient sourcing.</p>
    </div>
  </div>

</section>

<!-- ================= FOOTER SECTION ================= -->
<footer class="footer">
  <div class="footer-container">

    <!-- Brand Info -->
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

    <!-- Shop -->
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

    <!-- About -->
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

    <!-- Support -->
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

<!-- ================= COPYRIGHT BAR ================= -->
<div class="footer-bottom">
  <p>© 2025 Wild Skincare. All rights reserved. Founded by Sara Hashemi Nasab.</p>

  <div class="footer-links">
    <a href="#">www.wnpe.com</a>
    <a href="#">Privacy Policy</a>
    <a href="#">Terms of Service</a>
  </div>
</div>
</body>
</html>
