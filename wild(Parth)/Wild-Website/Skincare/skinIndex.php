<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wild Skincare</title>
    <link rel="stylesheet" href="./CSS/skinStyle.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>

    <!-- ================= NAVBAR ================= -->
     <?php include 'navbar.php'; ?>

    <!-- ================= HERO SECTION ================= -->
    <section class="hero">
        <div class="hero-content">
            <h1>Unleash Your Natural Beauty</h1>
            <p>Premium skincare products crafted from the finest natural ingredients. 
               Experience the Wild difference.</p>
            <div class="buttons">
                <a href="Products.php"><button class="btn primary">Shop Now</button></a>
                <a href="about.php"><button class="btn secondary">Learn More</button></a>
            </div>
        </div>

        <div class="hero-image">
            <img src="./img/Skin.png" alt="Skincare Product">
        </div>
    </section>

    <!-- ================= WHY CHOOSE WILD ================= -->
<section class="why-choose">
  <h2>Why Choose Wild?</h2>
  <div class="underline"></div>

  <div class="features">
    <!-- Card 1 -->
    <div class="feature-card">
      <div class="icon-circle">
        <i class="fa-solid fa-leaf"></i>
      </div>
      <h3>Natural Ingredients</h3>
      <p>Sourced from nature, crafted with care for your skin's health</p>
    </div>

    <!-- Card 2 -->
    <div class="feature-card">
      <div class="icon-circle">
        <i class="fa-regular fa-heart"></i>
      </div>
      <h3>Cruelty-Free</h3>
      <p>Never tested on animals. Beauty that's kind to all beings</p>
    </div>

    <!-- Card 3 -->
    <div class="feature-card">
      <div class="icon-circle">
        <i class="fa-solid fa-wand-magic-sparkles"></i>
      </div>
      <h3>Proven Results</h3>
      <p>Clinically tested formulas that deliver visible improvements</p>
    </div>
  </div>
</section>

<!-- ================= FEATURED COLLECTIONS ================= -->
<section class="featured-collections">
  <h2>Featured Collections</h2>
  <p>Discover our curated skincare collections</p>

  <div class="collection-cards">
    <!-- Card 1 -->
    <div class="collection-card">
      <img src="./img/Skin.png" alt="Hydration Collection">
      <div class="collection-content">
        <h3>Hydration Collection</h3>
        <p>Deep moisture for radiant skin</p>
        <a href="./Products.php" class="explore-link">Explore Collection <i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="collection-card">
      <img src="./img/serum.png" alt="Anti-Aging Series">
      <div class="collection-content">
        <h3>Anti-Aging Series</h3>
        <p>Turn back time naturally</p>
        <a href="./Products.php" class="explore-link">Explore Collection <i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="collection-card">
      <img src="./img/cream.png" alt="Sensitive Care">
      <div class="collection-content">
        <h3>Sensitive Care</h3>
        <p>Gentle formulas for delicate skin</p>
        <a href="./Products.php" class="explore-link">Explore Collection <i class="fa-solid fa-arrow-right"></i></a>
      </div>
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
