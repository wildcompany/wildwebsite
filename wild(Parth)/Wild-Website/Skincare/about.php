<?php
// --- SIMPLE PAGE SEARCH LOGIC FOR ABOUT PAGE ---
$search      = isset($_GET['q']) ? trim($_GET['q']) : '';
$searchLower = strtolower($search);

function aboutMatches($searchLower, $text)
{
    if ($searchLower === '') {
        return true; // no filter, show everything
    }
    return strpos(strtolower($text), $searchLower) !== false;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Wild Skincare</title>
    <!-- Link to CSS -->
    <link rel="stylesheet" href="./CSS/about.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <!-- Icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- =================== HEADER / NAVBAR =================== -->
    <?php include 'navbar.php'; ?>

    <?php
    // Pre-build text/content for each logical block for matching
    $heroText = "About Wild Skincare Founded by Sara Hashemi Nasab, Wild Skincare was born from a passion for natural beauty and a commitment to creating products that truly work.";

    $storyText = "Our Story Wild Skincare began with a simple belief: that nature provides everything we need for healthy, radiant skin. 
                  After years of research and development, we've created a line of products that harness the power of botanical ingredients 
                  without compromising on efficacy.";

    $statsBlock1 = "50K+ Happy Customers";
    $statsBlock2 = "15+ Industry Awards";
    $statsBlock3 = "30+ Countries Served";
    $statsBlock4 = "100% Natural Ingredients";

    $valueSustainability = "Sustainability We are committed to protecting our planet through eco-friendly packaging and sustainable sourcing practices.";
    $valueTransparency   = "Transparency Every ingredient is clearly listed and ethically sourced. You deserve to know what goes on your skin.";
    $valueInnovation     = "Innovation Combining traditional wisdom with cutting-edge science to create effective, natural skincare solutions.";
    $valueCommunity      = "Community Building a supportive community that celebrates natural beauty and self-care at every age.";
    ?>

    <!-- 🔸 About Section (hero) -->
    <?php if (aboutMatches($searchLower, $heroText)) : ?>
    <section class="about-section">
        <div class="about-content">
            <h1>About Wild Skincare</h1>
            <p>
                Founded by <strong>Sara Hashemi Nasab</strong>, Wild Skincare was born from a passion for natural beauty 
                and a commitment to creating products that truly work.
            </p>
        </div>
    </section>
    <?php endif; ?>

    <!-- 🔸 Our Story Section -->
    <?php if (aboutMatches($searchLower, $storyText)) : ?>
    <section class="story-section">
        <div class="story-container">
            <!-- Left Image -->
            <div class="story-image">
                <img src="./img/Product.png" alt="Wild Skincare Story">
            </div>

            <!-- Right Text -->
            <div class="story-text">
                <h2>Our Story</h2>
                <div class="underline"></div>
                <p>
                    Wild Skincare began with a simple belief: that nature provides everything we need for healthy, radiant skin. 
                    After years of research and development, we've created a line of products that harness the power of botanical ingredients 
                    without compromising on efficacy.
                </p>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- =================== STATS SECTION =================== -->
    <?php
    $showAnyStat =
        aboutMatches($searchLower, $statsBlock1) ||
        aboutMatches($searchLower, $statsBlock2) ||
        aboutMatches($searchLower, $statsBlock3) ||
        aboutMatches($searchLower, $statsBlock4);
    ?>

    <?php if ($showAnyStat) : ?>
    <section class="stats-section">
      <div class="stats-container">

        <!-- Box 1 -->
        <?php if (aboutMatches($searchLower, $statsBlock1)) : ?>
        <div class="stat-box">
          <div class="stat-icon">
            <i class="fa-solid fa-user-group"></i>
          </div>
          <h2 class="stat-number">50K+</h2>
          <p class="stat-text">Happy Customers</p>
        </div>
        <?php endif; ?>

        <!-- Box 2 -->
        <?php if (aboutMatches($searchLower, $statsBlock2)) : ?>
        <div class="stat-box">
          <div class="stat-icon">
            <i class="fa-solid fa-award"></i>
          </div>
          <h2 class="stat-number">15+</h2>
          <p class="stat-text">Industry Awards</p>
        </div>
        <?php endif; ?>

        <!-- Box 3 -->
        <?php if (aboutMatches($searchLower, $statsBlock3)) : ?>
        <div class="stat-box">
          <div class="stat-icon">
            <i class="fa-solid fa-globe"></i>
          </div>
          <h2 class="stat-number">30+</h2>
          <p class="stat-text">Countries Served</p>
        </div>
        <?php endif; ?>

        <!-- Box 4 -->
        <?php if (aboutMatches($searchLower, $statsBlock4)) : ?>
        <div class="stat-box">
          <div class="stat-icon">
            <i class="fa-solid fa-heart"></i>
          </div>
          <h2 class="stat-number">100%</h2>
          <p class="stat-text">Natural Ingredients</p>
        </div>
        <?php endif; ?>

      </div>
    </section>
    <?php endif; ?>

    <!-- =================== VALUES SECTION =================== -->
    <?php
    $showAnyValue =
        aboutMatches($searchLower, $valueSustainability) ||
        aboutMatches($searchLower, $valueTransparency)   ||
        aboutMatches($searchLower, $valueInnovation)     ||
        aboutMatches($searchLower, $valueCommunity);
    ?>

    <?php if ($showAnyValue) : ?>
    <section class="values-section">
      <h2 class="values-title">Our Values</h2>

      <div class="values-container">
        <!-- Sustainability -->
        <?php if (aboutMatches($searchLower, $valueSustainability)) : ?>
        <div class="value-box">
          <h3>Sustainability</h3>
          <p>We are committed to protecting our planet through eco-friendly packaging and sustainable sourcing practices.</p>
        </div>
        <?php endif; ?>

        <!-- Transparency -->
        <?php if (aboutMatches($searchLower, $valueTransparency)) : ?>
        <div class="value-box">
          <h3>Transparency</h3>
          <p>Every ingredient is clearly listed and ethically sourced. You deserve to know what goes on your skin.</p>
        </div>
        <?php endif; ?>

        <!-- Innovation -->
        <?php if (aboutMatches($searchLower, $valueInnovation)) : ?>
        <div class="value-box">
          <h3>Innovation</h3>
          <p>Combining traditional wisdom with cutting-edge science to create effective, natural skincare solutions.</p>
        </div>
        <?php endif; ?>

        <!-- Community -->
        <?php if (aboutMatches($searchLower, $valueCommunity)) : ?>
        <div class="value-box">
          <h3>Community</h3>
          <p>Building a supportive community that celebrates natural beauty and self-care at every age.</p>
        </div>
        <?php endif; ?>
      </div>
    </section>
    <?php endif; ?>

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
