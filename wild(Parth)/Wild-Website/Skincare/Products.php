<?php

$category = isset($_GET['category']) ? $_GET['category'] : 'all';
?>

<?php
session_start();

// read one-time flash message from addtocart.php
$cartMessage = $_SESSION['cart_message'] ?? '';
if ($cartMessage !== '') {
    unset($_SESSION['cart_message']);   // only show once
}

$category = isset($_GET['category']) ? $_GET['category'] : 'all';

// search text (q = query)
$search = isset($_GET['q']) ? trim($_GET['q']) : '';
$searchLower = strtolower($search);

// small helper for search match
function productMatchesSearch($searchLower, $name, $shortDesc, $longDesc) {
    if ($searchLower === '') {
        return true; // no search filter
    }
    $name      = strtolower($name);
    $shortDesc = strtolower($shortDesc);
    $longDesc  = strtolower($longDesc);

    return strpos($name, $searchLower) !== false
        || strpos($shortDesc, $searchLower) !== false
        || strpos($longDesc, $searchLower) !== false;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Wild Skincare - Our Products</title>


  <!-- Link to CSS -->
  <link rel="stylesheet" href="../CSS/Products.css" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet" />

  <!-- Font Awesome (for icons) -->

  <link rel="stylesheet" href="./CSS/Products.css" />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>

<body>

  <!-- =================== HEADER / NAVBAR =================== -->
  <?php include 'navbar.php'; ?>

  <?php if (!empty($cartMessage)): ?>
<div id="cartPopup" class="cart-popup">
    <div class="cart-popup-box">
        <h4>Success</h4>
        <p>Item added to cart successfully!</p>
    </div>
</div>
<?php endif; ?>


  <!-- =================== HERO SECTION =================== -->
  <section class="hero">
    <h1>Our Products</h1>
    <p>Premium skincare solutions for every need</p>
  </section>

  <!-- =================== FILTER + SEARCH =================== -->
  <section class="category-filter">

    <!-- SEARCH BAR -->
    <form method="get" class="product-search">
      <!-- keep current category when searching -->
      <input type="hidden" name="category" value="<?php echo htmlspecialchars($category); ?>">
      <input
        type="text"
        name="q"
        placeholder="Search products..."
        value="<?php echo htmlspecialchars($search); ?>"
      />
      <button type="submit">
        <i class="fa fa-search"></i> Search
      </button>
    </form>

    <!-- CATEGORY BUTTONS -->
    <section class="categories">
      <a href="products.php?category=all"         class="btn <?php echo ($category=='all'?'active':''); ?>">All</a>
      <a href="products.php?category=cleanser"    class="btn <?php echo ($category=='cleanser'?'active':''); ?>">Cleansers</a>
      <a href="products.php?category=serum"       class="btn <?php echo ($category=='serum'?'active':''); ?>">Serums</a>
      <a href="products.php?category=moisturizer" class="btn <?php echo ($category=='moisturizer'?'active':''); ?>">Moisturizers</a>
      <a href="products.php?category=mask"        class="btn <?php echo ($category=='mask'?'active':''); ?>">Masks</a>
    </section>

    <!-- =================== PRODUCT CARDS =================== -->
    <section class="product-section">

      <?php
      /* ---------- Product 1 ---------- */
      $p1Name       = "Radiance Boost Serum";
      $p1Short      = "Intensive vitamin C serum for bright, glowing skin.";
      $p1Long       = "This intensive vitamin C serum targets dullness, uneven tone, and early fine lines. With daily use it helps brighten, firm and smooth the skin while supporting a more radiant, healthy-looking complexion.";
      $p1CategoryOK = ($category == 'all' || $category == 'serum');
      $p1SearchOK   = productMatchesSearch($searchLower, $p1Name, $p1Short, $p1Long);

      if ($p1CategoryOK && $p1SearchOK) { ?>
        <div class="product-card">
          <div class="product-img">
            <img src="./img/serum.png" alt="Radiance Boost Serum" />
          </div>
          <div class="product-info">
            <p class="category">Serums</p>
            <h3 class="product-name"><?php echo $p1Name; ?></h3>

            <p class="desc product-description">
              <span class="short-text"><?php echo $p1Short; ?></span>
              <span class="more-text"><?php echo $p1Long; ?></span>
              <span class="toggle-description" onclick="toggleDesc(this)">...more</span>
            </p>

            <form action="add_to_cart.php" method="POST">
              <input type="hidden" name="name"  value="<?php echo $p1Name; ?>">
              <input type="hidden" name="price" value="59.99">
              <input type="hidden" name="image" value="./img/serum.png">

              <div class="price-cart">
                <p class="price">$59.99</p>
                <button type="submit" class="cart-btn" name="action" value="add">
                  <i class="fa-solid fa-cart-shopping"></i> Add to Cart
                </button>
              </div>

              <div class="buy-box">
                <p class="stock-text">In Stock</p>
                <p class="buy-price">$59.99</p>

                <label class="qty-label">
                  Quantity:
                  <select name="quantity" class="qty-select">
                    <?php for ($i = 1; $i <= 10; $i++): ?>
                      <option value="<?= $i ?>"><?= $i ?></option>
                    <?php endfor; ?>
                  </select>
                </label>

                <button type="submit" name="action" value="buy_now" class="btn-buy-now">
                  Buy Now
                </button>
              </div>
            </form>
          </div>
        </div>
      <?php } ?>


      <?php
      /* ---------- Product 2 ---------- */
      $p2Name       = "Hydrating Day Cream";
      $p2Short      = "Rich moisturizer with hyaluronic acid and ceramides.";
      $p2Long       = "This hydrating day cream deeply moisturizes, strengthens the skin barrier with ceramides and keeps the skin soft, smooth and protected throughout the day without feeling greasy.";
      $p2CategoryOK = ($category == 'all' || $category == 'moisturizer');
      $p2SearchOK   = productMatchesSearch($searchLower, $p2Name, $p2Short, $p2Long);

      if ($p2CategoryOK && $p2SearchOK) { ?>
        <div class="product-card">
          <div class="product-img">
            <img src="./img/cream.png" alt="Hydrating Day Cream" />
          </div>
          <div class="product-info">
            <p class="category">Moisturizers</p>
            <h3 class="product-name"><?php echo $p2Name; ?></h3>

            <p class="desc product-description">
              <span class="short-text"><?php echo $p2Short; ?></span>
              <span class="more-text"><?php echo $p2Long; ?></span>
              <span class="toggle-description" onclick="toggleDesc(this)">...more</span>
            </p>

            <form action="add_to_cart.php" method="POST">
              <input type="hidden" name="name"  value="<?php echo $p2Name; ?>">
              <input type="hidden" name="price" value="45">
              <input type="hidden" name="image" value="./img/cream.png">

              <div class="price-cart">
                <p class="price">$45</p>
                <button type="submit" class="cart-btn" name="action" value="add">
                  <i class="fa-solid fa-cart-shopping"></i> Add to Cart
                </button>
              </div>

              <div class="buy-box">
                <p class="stock-text">In Stock</p>
                <p class="buy-price">$45</p>

                <label class="qty-label">
                  Quantity:
                  <select name="quantity" class="qty-select">
                    <?php for ($i = 1; $i <= 10; $i++): ?>
                      <option value="<?= $i ?>"><?= $i ?></option>
                    <?php endfor; ?>
                  </select>
                </label>

                <button type="submit" name="action" value="buy_now" class="btn-buy-now">
                  Buy Now
                </button>
              </div>
            </form>
          </div>
        </div>
      <?php } ?>


      <?php
      /* ---------- Product 3 ---------- */
      $p3Name       = "Gentle Cleansing Gel";
      $p3Short      = "Mild gel cleanser for all skin types.";
      $p3Long       = "This gentle gel cleanser removes dirt, makeup, SPF and impurities without stripping the skin. Leaves the skin fresh, balanced and comfortable, even for sensitive skin.";
      $p3CategoryOK = ($category == 'all' || $category == 'cleanser');
      $p3SearchOK   = productMatchesSearch($searchLower, $p3Name, $p3Short, $p3Long);

      if ($p3CategoryOK && $p3SearchOK) { ?>
        <div class="product-card">
          <div class="product-img">
            <img src="./img/Skin.png" alt="Gentle Cleansing Gel" />
          </div>
          <div class="product-info">
            <p class="category">Cleansers</p>
            <h3 class="product-name"><?php echo $p3Name; ?></h3>

            <p class="desc product-description">
              <span class="short-text"><?php echo $p3Short; ?></span>
              <span class="more-text"><?php echo $p3Long; ?></span>
              <span class="toggle-description" onclick="toggleDesc(this)">...more</span>
            </p>

            <form action="add_to_cart.php" method="POST">
              <input type="hidden" name="name"  value="<?php echo $p3Name; ?>">
              <input type="hidden" name="price" value="32">
              <input type="hidden" name="image" value="./img/Skin.png">

              <div class="price-cart">
                <p class="price">$32</p>
                <button type="submit" class="cart-btn" name="action" value="add">
                  <i class="fa-solid fa-cart-shopping"></i> Add to Cart
                </button>
              </div>

              <div class="buy-box">
                <p class="stock-text">In Stock</p>
                <p class="buy-price">$32</p>

                <label class="qty-label">
                  Quantity:
                  <select name="quantity" class="qty-select">
                    <?php for ($i = 1; $i <= 10; $i++): ?>
                      <option value="<?= $i ?>"><?= $i ?></option>
                    <?php endfor; ?>
                  </select>
                </label>

                <button type="submit" name="action" value="buy_now" class="btn-buy-now">
                  Buy Now
                </button>
              </div>
            </form>
          </div>
        </div>
      <?php } ?>


      <?php
      /* ---------- Product 4 ---------- */
      $p4Name       = "Youth Renewal Night Cream";
      $p4Short      = "Anti-aging night treatment with retinol and peptides.";
      $p4Long       = "This renewing night cream blends retinol and peptides to smooth fine lines, improve skin texture and support overnight repair for a firmer, refreshed complexion in the morning.";
      $p4CategoryOK = ($category == 'all' || $category == 'moisturizer');
      $p4SearchOK   = productMatchesSearch($searchLower, $p4Name, $p4Short, $p4Long);

      if ($p4CategoryOK && $p4SearchOK) { ?>
        <div class="product-card">
          <div class="product-img">
            <img src="./img/Product.png" alt="Youth Renewal Night Cream" />
          </div>
          <div class="product-info">
            <p class="category">Moisturizers</p>
            <h3 class="product-name"><?php echo $p4Name; ?></h3>

            <p class="desc product-description">
              <span class="short-text"><?php echo $p4Short; ?></span>
              <span class="more-text"><?php echo $p4Long; ?></span>
              <span class="toggle-description" onclick="toggleDesc(this)">...more</span>
            </p>

            <form action="add_to_cart.php" method="POST">
              <input type="hidden" name="name"  value="<?php echo $p4Name; ?>">
              <input type="hidden" name="price" value="68">
              <input type="hidden" name="image" value="./img/Product.png">

              <div class="price-cart">
                <p class="price">$68</p>
                <button type="submit" class="cart-btn" name="action" value="add">
                  <i class="fa-solid fa-cart-shopping"></i> Add to Cart
                </button>
              </div>

              <div class="buy-box">
                <p class="stock-text">In Stock</p>
                <p class="buy-price">$68</p>

                <label class="qty-label">
                  Quantity:
                  <select name="quantity" class="qty-select">
                    <?php for ($i = 1; $i <= 10; $i++): ?>
                      <option value="<?= $i ?>"><?= $i ?></option>
                    <?php endfor; ?>
                  </select>
                </label>

                <button type="submit" name="action" value="buy_now" class="btn-buy-now">
                  Buy Now
                </button>
              </div>
            </form>
          </div>
        </div>
      <?php } ?>


      <?php
      /* ---------- Product 5 ---------- */
      $p5Name       = "Detox Clay Mask";
      $p5Short      = "Purifying mask with kaolin clay and charcoal.";
      $p5Long       = "This detoxifying clay mask draws out excess oil, unclogs pores and reduces impurities while keeping the skin comfortable and smooth — never tight or dry.";
      $p5CategoryOK = ($category == 'all' || $category == 'mask');
      $p5SearchOK   = productMatchesSearch($searchLower, $p5Name, $p5Short, $p5Long);

      if ($p5CategoryOK && $p5SearchOK) { ?>
        <div class="product-card">
          <div class="product-img">
            <img src="./img/clay.png" alt="Purifying mask" />
          </div>
          <div class="product-info">
            <p class="category">Masks</p>
            <h3 class="product-name"><?php echo $p5Name; ?></h3>

            <p class="desc product-description">
              <span class="short-text"><?php echo $p5Short; ?></span>
              <span class="more-text"><?php echo $p5Long; ?></span>
              <span class="toggle-description" onclick="toggleDesc(this)">...more</span>
            </p>

            <form action="add_to_cart.php" method="POST">
              <input type="hidden" name="name"  value="<?php echo $p5Name; ?>">
              <input type="hidden" name="price" value="38">
              <input type="hidden" name="image" value="./img/clay.png">

              <div class="price-cart">
                <p class="price">$38</p>
                <button type="submit" class="cart-btn" name="action" value="add">
                  <i class="fa-solid fa-cart-shopping"></i> Add to Cart
                </button>
              </div>

              <div class="buy-box">
                <p class="stock-text">In Stock</p>
                <p class="buy-price">$38</p>

                <label class="qty-label">
                  Quantity:
                  <select name="quantity" class="qty-select">
                    <?php for ($i = 1; $i <= 10; $i++): ?>
                      <option value="<?= $i ?>"><?= $i ?></option>
                    <?php endfor; ?>
                  </select>
                </label>

                <button type="submit" name="action" value="buy_now" class="btn-buy-now">
                  Buy Now
                </button>
              </div>
            </form>
          </div>
        </div>
      <?php } ?>


      <?php
      /* ---------- Product 6 ---------- */
      $p6Name       = "Botanical Face Oil";
      $p6Short      = "Nourishing blend of botanical oils for radiant skin.";
      $p6Long       = "This lightweight face oil blends nourishing botanical oils and antioxidants to boost glow, soften dry patches and lock in moisture without feeling heavy.";
      $p6CategoryOK = ($category == 'all' || $category == 'serum');
      $p6SearchOK   = productMatchesSearch($searchLower, $p6Name, $p6Short, $p6Long);

      if ($p6CategoryOK && $p6SearchOK) { ?>
        <div class="product-card">
          <div class="product-img">
            <img src="./img/oil.png" alt="Botanical Face Oil" />
          </div>
          <div class="product-info">
            <p class="category">Serums</p>
            <h3 class="product-name"><?php echo $p6Name; ?></h3>

            <p class="desc product-description">
              <span class="short-text"><?php echo $p6Short; ?></span>
              <span class="more-text"><?php echo $p6Long; ?></span>
              <span class="toggle-description" onclick="toggleDesc(this)">...more</span>
            </p>

            <form action="add_to_cart.php" method="POST">
              <input type="hidden" name="name"  value="<?php echo $p6Name; ?>">
              <input type="hidden" name="price" value="54">
              <input type="hidden" name="image" value="./img/oil.png">

              <div class="price-cart">
                <p class="price">$54</p>
                <button type="submit" class="cart-btn" name="action" value="add">
                  <i class="fa-solid fa-cart-shopping"></i> Add to Cart
                </button>
              </div>

              <div class="buy-box">
                <p class="stock-text">In Stock</p>
                <p class="buy-price">$54</p>

                <label class="qty-label">
                  Quantity:
                  <select name="quantity" class="qty-select">
                    <?php for ($i = 1; $i <= 10; $i++): ?>
                      <option value="<?= $i ?>"><?= $i ?></option>
                    <?php endfor; ?>
                  </select>
                </label>

                <button type="submit" name="action" value="buy_now" class="btn-buy-now">
                  Buy Now
                </button>
              </div>
            </form>
          </div>
        </div>
      <?php } ?>

    </section> <!-- /.product-section -->
  </section>   <!-- /.category-filter -->

  

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

  <script>
    function toggleDesc(link) {
      var parent = link.closest('.product-description');
      parent.classList.toggle('expanded');

      if (parent.classList.contains('expanded')) {
        link.textContent = 'Show less';
      } else {
        link.textContent = '...more';
      }
    }

    document.addEventListener('DOMContentLoaded', function () {
      var popup = document.getElementById('cartPopup');
      if (!popup) return;
      setTimeout(function () {
        popup.style.display = 'none';
      }, 2000);
    });
  </script>
</body>
</html>
