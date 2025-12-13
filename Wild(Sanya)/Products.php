<?php
$category = isset($_GET['category']) ? $_GET['category'] : 'all';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Wild Skincare - Our Products</title>

  <!-- Link to CSS -->
  <link rel="stylesheet" href="./CSS/Products.css" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet" />

  <!-- Font Awesome (for icons) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>

<body>
  <!-- =================== HEADER / NAVBAR =================== -->
  <?php include 'navbar.php'; ?>

  <!-- =================== HERO SECTION =================== -->
  <section class="hero">
    <h1>Our Products</h1>
    <p>Premium skincare solutions for every need</p>
  </section>

  <!-- =================== CATEGORY FILTER BUTTONS =================== -->
  <section class="category-filter">
    <section class="categories">
      <a href="products.php?category=all" class="btn <?php echo ($category=='all'?'active':''); ?>" style="text-decoration: none;">All</a>
      <a href="products.php?category=cleanser" class="btn <?php echo ($category=='cleanser'?'active':''); ?>" style="text-decoration: none;">Cleansers</a>
      <a href="products.php?category=serum" class="btn <?php echo ($category=='serum'?'active':''); ?>" style="text-decoration: none;">Serums</a>
      <a href="products.php?category=moisturizer" class="btn <?php echo ($category=='moisturizer'?'active':''); ?>" style="text-decoration: none;">Moisturizers</a>
      <a href="products.php?category=mask" class="btn <?php echo ($category=='mask'?'active':''); ?>" style="text-decoration: none;">Masks</a>
    </section>

    <!-- =================== PRODUCT CARDS SECTION (SHOP – CURRENTLY FOR SALE) =================== -->
    <section class="product-section">

      <!-- Product Card 1 -->
      <?php if ($category == 'all' || $category == 'serum') { ?>
        <div class="product-card">
          <div class="product-img">
            <img src="./img/serum.png" alt="Radiance Boost Serum" />
          </div>
          <div class="product-info">
            <p class="category">Serums</p>
            <h3 class="product-name">Radiance Boost Serum</h3>
            <p class="desc">Intensive vitamin C serum for bright, glowing skin</p>
            <div class="price-cart">
              <p class="price">$59.99</p>
              <form action="cart.php" method="POST">
                <input type="hidden" name="name" value="Radiance Boost Serum">
                <input type="hidden" name="price" value="59.99">
                <button type="submit" class="cart-btn">
                    <i class="fa-solid fa-cart-shopping"></i> Add to Cart
                </button>
              </form>
            </div>
          </div>
        </div>
      <?php } ?>

      <!-- Product Card 2 -->
      <?php if ($category == 'all' || $category == 'moisturizer') { ?>
        <div class="product-card">
          <div class="product-img">
            <img src="./img/cream.png" alt="Hydrating Day Cream" />
          </div>
          <div class="product-info">
            <p class="category">Moisturizers</p>
            <h3 class="product-name">Hydrating Day Cream</h3>
            <p class="desc">Rich moisturizer with hyaluronic acid and ceramides</p>
            
            <div class="price-cart">
              <p class="price">$45</p>
              <form action="cart.php" method="POST">
                <input type="hidden" name="name" value="Hydrating Day Cream">
                <input type="hidden" name="price" value="45">
                <button type="submit" class="cart-btn">
                    <i class="fa-solid fa-cart-shopping"></i> Add to Cart
                </button>
              </form>
            </div>
          </div>
        </div>
      <?php } ?>

      <!-- Product Card 3 -->
      <?php if ($category == 'all' || $category == 'cleanser') { ?>
        <div class="product-card">
          <div class="product-img">
            <img src="./img/Skin.png" alt="Gentle Cleansing Gel" />
          </div>
          <div class="product-info">
            <p class="category">Cleansers</p>
            <h3 class="product-name">Gentle Cleansing Gel</h3>
            <p class="desc">Mild gel cleanser for all skin types. Which can clean your skin.</p>
            <div class="price-cart">
              <p class="price">$32</p>
              <form action="cart.php" method="POST">
                <input type="hidden" name="name" value="Gentle Cleansing Gel">
                <input type="hidden" name="price" value="32">
                <button type="submit" class="cart-btn">
                    <i class="fa-solid fa-cart-shopping"></i> Add to Cart
                </button>
              </form>
            </div>
          </div>
        </div>
      <?php } ?>

      <!-- Product Card 4 -->
      <?php if ($category == 'all' || $category == 'moisturizer') { ?>
        <div class="product-card">
          <div class="product-img">
            <img src="./img/Product.png" alt="Youth Renewal Night Cream" />
          </div>
          <div class="product-info">
            <p class="category">Moisturizers</p>
            <h3 class="product-name">Youth Renewal Night Cream</h3>
            <p class="desc">Anti-aging night treatment with retinol and peptides</p>
            <div class="price-cart">
              <p class="price">$68</p>
              <form action="cart.php" method="POST">
                <input type="hidden" name="name" value="Youth Renewal Night Cream">
                <input type="hidden" name="price" value="68">
                <button type="submit" class="cart-btn">
                    <i class="fa-solid fa-cart-shopping"></i> Add to Cart
                </button>
              </form>
            </div>
          </div>
        </div>
      <?php } ?>

      <!-- Product Card 5 -->
      <?php if ($category == 'all' || $category == 'mask') { ?>
        <div class="product-card">
          <div class="product-img">
            <img src="./img/clay.png" alt="Detox Clay Mask" />
          </div>
          <div class="product-info">
            <p class="category">Masks</p>
            <h3 class="product-name">Detox Clay Mask</h3>
            <p class="desc">Purifying mask with kaolin clay and charcoal</p>
            <div class="price-cart">
              <p class="price">$38</p>
              <form action="cart.php" method="POST">
                <input type="hidden" name="name" value="Detox Clay Mask">
                <input type="hidden" name="price" value="38">
                <button type="submit" class="cart-btn">
                    <i class="fa-solid fa-cart-shopping"></i> Add to Cart
                </button>
              </form>
            </div>
          </div>
        </div>
      <?php } ?>

      <!-- Product Card 6 -->
      <?php if ($category == 'all' || $category == 'serum') { ?>
        <div class="product-card">
          <div class="product-img">
            <img src="./img/oil.png" alt="Botanical Face Oil" />
          </div>
          <div class="product-info">
            <p class="category">Serums</p>
            <h3 class="product-name">Botanical Face Oil</h3>
            <p class="desc">Nourishing blend of botanical oils for radiant skin</p>
            <div class="price-cart">
              <p class="price">$54</p>
              <form action="cart.php" method="POST">
                <input type="hidden" name="name" value="Botanical Face Oil">
                <input type="hidden" name="price" value="54">
                <button type="submit" class="cart-btn">
                    <i class="fa-solid fa-cart-shopping"></i> Add to Cart
                </button>
              </form>
            </div>
          </div>
        </div>
      <?php } ?>

    </section> <!-- /product-section -->
  </section> <!-- /category-filter -->

  <!-- ================================================================== -->
  <!-- ========== NEW SECTION 1: CUSTOM PRODUCT APPOINTMENT (PAID) ====== -->
  <!-- ================================================================== -->

  <section class="custom-appointment-section" id="custom-appointment">
    <div class="custom-appointment-container">
      <!-- LEFT: Info text -->
      <div class="custom-appointment-info">
        <h2>Custom Product Design Appointment</h2>
        <p>
          Looking for a made-for-you formula, branded gifts or a bespoke product for your business or special event?
          Book a one-on-one paid consultation with Sara to design your custom skincare product.
        </p>
        <ul>
          <li><i class="fa-regular fa-circle-check"></i> Ideal for brands, retreats, and private events</li>
          <li><i class="fa-regular fa-circle-check"></i> Discuss formula, scent, packaging and quantities</li>
          <li><i class="fa-regular fa-circle-check"></i> Appointment fee is applied towards your first order*</li>
        </ul>
        <p class="custom-appointment-note">
          *This is a paid consultation. After choosing a time, you will proceed to a secure checkout to confirm your booking.
        </p>
      </div>

      <!-- RIGHT: Appointment form + calendar -->
      <div class="custom-appointment-card">
        <h3>Book a Custom Product Consultation</h3>

        <!-- Front-end only for now. You can connect action="" to a PHP handler later. -->
        <form id="productAppointmentForm" action="checkout-appointment.php" method="GET">
          <!-- Contact row -->
          <div class="form-row two-columns">
            <div class="form-group">
              <label for="cp_name">Full Name *</label>
              <input type="text" id="cp_name" name="cp_name" required>
            </div>
            <div class="form-group">
              <label for="cp_email">Email *</label>
              <input type="email" id="cp_email" name="cp_email" required>
            </div>
          </div>

          <div class="form-row two-columns">
            <div class="form-group">
              <label for="cp_clientType">You are *</label>
              <select id="cp_clientType" name="cp_clientType" required>
                <option value="">Please select</option>
                <option value="business">A business / organization</option>
                <option value="individual">An individual</option>
              </select>
            </div>
            <div class="form-group">
              <label for="cp_company">Company name (if applicable)</label>
              <input type="text" id="cp_company" name="cp_company" placeholder="Wild Skincare Inc.">
            </div>
          </div>

          <div class="form-row two-columns">
            <div class="form-group">
              <label for="cp_productType">Product type *</label>
              <select id="cp_productType" name="cp_productType" required>
                <option value="">Select type</option>
                <option value="balm">Balm</option>
                <option value="serum">Serum / oil</option>
                <option value="cleanser">Cleanser</option>
                <option value="moisturizer">Moisturizer / cream</option>
                <option value="set">Gift set / bundle</option>
                <option value="other">Other</option>
              </select>
            </div>
            <div class="form-group">
              <label for="cp_budget">Estimated budget (CAD)</label>
              <input type="text" id="cp_budget" name="cp_budget" placeholder="$500 - $2,000">
            </div>
          </div>

          <!-- Appointment date + timeslots -->
          <div class="form-row two-columns appointment-row">
            <div class="form-group">
              <label for="cp_date">Consultation date *</label>
              <input type="date" id="cp_date" name="cp_date" required>
              <small class="help-text">Sara is available on selected weekdays only.</small>
            </div>

            <div class="form-group">
              <label>Available time slots *</label>
              <div id="cp_timeSlots" class="time-slots">
                <p class="time-help-text">Select a date to see available times.</p>
              </div>
              <!-- Hidden field where we store selected time -->
              <input type="hidden" id="cp_selectedTime" name="cp_selectedTime" required>
              <small class="help-text">Click a time to select it.</small>
            </div>
          </div>

          <div class="form-group">
            <label for="cp_details">Tell us about the product you’d like to create *</label>
            <textarea id="cp_details" name="cp_details" rows="4" required placeholder="Share your idea, target audience, quantities and any special requirements."></textarea>
          </div>

          <!-- Appointment fee note (this is just UX, real payment goes in your backend/checkout) -->
          <div class="appointment-fee-box">
            <p><strong>Consultation fee:</strong> $120 CAD (paid before confirming your appointment).</p>
          </div>

          <button type="submit" class="primary-btn">
            Continue to Payment
          </button>

          <p id="cp_formMessage" class="form-message" style="display:none;">
            Thank you! Your appointment request has been captured. In a real setup, this button would now redirect to your payment/checkout page.
          </p>
        </form>
      </div>
    </div>
  </section>

  <!-- ================================================================== -->
  <!-- ========== NEW SECTION 2: FUTURE COLLECTION / SHOWCASE =========== -->
  <!-- ================================================================== -->

  <section class="future-collection-section" id="future-collection">
    <div class="future-collection-header">
      <h2>Future Collection &amp; Made-to-Order</h2>
      <p>
        These creations are not available in our regular shop yet. You can either request a custom version or
        join the waiting list to receive the product exactly as shown.
      </p>
    </div>

    <div class="future-grid">
      <!-- Example future product 1 -->
      <div class="future-card">
        <div class="future-img">
          <img src="./img/cream.png" alt="Herbal Recovery Balm (Future)">
          <span class="future-badge">Coming Soon</span>
        </div>
        <div class="future-info">
          <h3>Herbal Recovery Balm</h3>
          <p class="future-desc">
            Deeply comforting balm with calendula, chamomile and plant butters, designed for dry and sensitive skin.
          </p>
          <p class="future-price-hint">Estimated full price: $72 CAD</p>
          <div class="future-actions">
            <!-- Customization goes to appointment section -->
            <a href="#custom-appointment" class="outline-btn">Customize this product</a>
            <!-- Waitlist button opens shared waitlist form below -->
            <button type="button" class="waitlist-btn" data-product="Herbal Recovery Balm">
              Join Waitlist (50% Deposit)
            </button>
          </div>
          <p class="future-note">
            Made-to-order in small batches. Production and delivery can take up to 12 months.
          </p>
        </div>
      </div>

      <!-- Example future product 2 -->
      <div class="future-card">
        <div class="future-img">
          <img src="./img/serum.png" alt="Moonlight Brightening Serum (Future)">
          <span class="future-badge">Made-to-Order</span>
        </div>
        <div class="future-info">
          <h3>Moonlight Brightening Serum</h3>
          <p class="future-desc">
            Lightweight night serum with gentle botanical brighteners for an even, luminous complexion.
          </p>
          <p class="future-price-hint">Estimated full price: $89 CAD</p>
          <div class="future-actions">
            <a href="#custom-appointment" class="outline-btn">Customize this product</a>
            <button type="button" class="waitlist-btn" data-product="Moonlight Brightening Serum">
              Join Waitlist (50% Deposit)
            </button>
          </div>
          <p class="future-note">
            50% deposit required to reserve your bottle. Lead time may be up to one year.
          </p>
        </div>
      </div>

      <!-- Example future product 3 -->
      <div class="future-card">
        <div class="future-img">
          <img src="./img/oil.png" alt="Wild Rituals Gift Set (Future)">
          <span class="future-badge">Limited Run</span>
        </div>
        <div class="future-info">
          <h3>Wild Rituals Gift Set</h3>
          <p class="future-desc">
            Curated trio of mini products, perfect for retreats, corporate gifting or intimate events.
          </p>
          <p class="future-price-hint">Estimated full price: $120 CAD</p>
          <div class="future-actions">
            <a href="#custom-appointment" class="outline-btn">Customize this product</a>
            <button type="button" class="waitlist-btn" data-product="Wild Rituals Gift Set">
              Join Waitlist (50% Deposit)
            </button>
          </div>
          <p class="future-note">
            Can be customized for your brand or event. Standard version available via waitlist only.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- ================================================================== -->
  <!-- ========== NEW SECTION 3: SHARED WAITLIST / PRE-ORDER FORM ======= -->
  <!-- ================================================================== -->

  <section class="waitlist-section" id="waitlist">
    <div class="waitlist-card">
      <h3>Join the Waitlist &amp; Pre-Order</h3>
      <p class="waitlist-intro">
        Reserve your spot for a future product by placing a 50% deposit. You’ll be notified by email as production
        progresses. Remaining balance is due before shipment.
      </p>

      <!-- Again, front-end only. Later you can send this to preorder.php or similar. -->
      <form id="waitlistForm">
        <div class="form-row two-columns">
          <div class="form-group">
            <label for="wl_name">Full Name *</label>
            <input type="text" id="wl_name" name="wl_name" required>
          </div>
          <div class="form-group">
            <label for="wl_email">Email *</label>
            <input type="email" id="wl_email" name="wl_email" required>
          </div>
        </div>

        <div class="form-row two-columns">
          <div class="form-group">
            <label for="wl_product">Product *</label>
            <!-- This will be auto-filled when user clicks "Join Waitlist" on a future card -->
            <input type="text" id="wl_product" name="wl_product" required readonly placeholder="Select a product above">
          </div>
          <div class="form-group">
            <label for="wl_quantity">Quantity *</label>
            <input type="number" id="wl_quantity" name="wl_quantity" min="1" value="1" required>
          </div>
        </div>

        <div class="form-row two-columns">
          <div class="form-group">
            <label for="wl_location">City / Country *</label>
            <input type="text" id="wl_location" name="wl_location" required>
          </div>
          <div class="form-group">
            <label for="wl_deposit">50% Deposit (example)</label>
            <!-- Just an informational field for now -->
            <input type="text" id="wl_deposit" name="wl_deposit" value="Calculated at checkout" readonly>
          </div>
        </div>

        <div class="form-group">
          <label for="wl_notes">Notes (optional)</label>
          <textarea id="wl_notes" name="wl_notes" rows="3" placeholder="Anything we should know about timing, gifting, or preferences?"></textarea>
        </div>

        <div class="form-group checkbox-group">
          <label>
            <input type="checkbox" id="wl_wantAppointment" name="wl_wantAppointment">
            I would also like to book a paid consultation about this product.
          </label>
        </div>

        <p class="waitlist-warning">
          Please note: these items are produced in very limited batches. Production and delivery can take up to
          <strong>12 months</strong>. Your 50% deposit is required to secure your spot in the queue.
        </p>

        <button type="submit" class="primary-btn">
          Confirm Waitlist &amp; Deposit
        </button>

        <p class="waitlist-helper-link">
          Prefer to customize instead? <a href="#custom-appointment">Book a custom product appointment.</a>
        </p>

        <p id="wl_formMessage" class="form-message" style="display:none;">
          Thank you! Your waitlist request has been captured. In a real setup, this would now send you to a payment/checkout page.
        </p>
      </form>
    </div>
  </section>

  <!-- ================= FOOTER ================= -->
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

  <!-- ================== SCRIPTS (CALENDAR + WAITLIST LOGIC) ================== -->
  <script>
    // ========= AVAILABILITY CONFIG FOR CUSTOM PRODUCT APPOINTMENTS =========
    // You (or Sara) only need to edit THIS object to change availability.
    const productAvailabilityConfig = {
      // 0 = Sun, 1 = Mon, ... 6 = Sat
      workingDays: [1, 2, 3, 4], // Example: Mon–Thu
      startHour: 10,             // 10:00
      endHour: 16,               // 16:00
      slotDurationMinutes: 30,
      blockedDates: [
        // e.g. '2025-12-25'
      ]
    };

    const cp_dateInput = document.getElementById('cp_date');
    const cp_timeSlotsContainer = document.getElementById('cp_timeSlots');
    const cp_selectedTimeInput = document.getElementById('cp_selectedTime');
    const cp_form = document.getElementById('productAppointmentForm');
    const cp_formMessage = document.getElementById('cp_formMessage');

    // Helper: format time nicely
    function cp_formatTime(hour, minute) {
      const d = new Date();
      d.setHours(hour, minute, 0, 0);
      return d.toLocaleTimeString([], { hour: 'numeric', minute: '2-digit' });
    }

    // Check if given YYYY-MM-DD is allowed
    function cp_isDateAvailable(dateString) {
      if (productAvailabilityConfig.blockedDates.includes(dateString)) return false;
      const date = new Date(dateString + 'T00:00:00');
      const day = date.getDay();
      return productAvailabilityConfig.workingDays.includes(day);
    }

    // Generate slots for selected date
    function cp_generateTimeSlots(dateString) {
      cp_timeSlotsContainer.innerHTML = '';
      cp_selectedTimeInput.value = '';

      if (!cp_isDateAvailable(dateString)) {
        const msg = document.createElement('p');
        msg.className = 'time-help-text';
        msg.textContent = 'Sara is not available on this day. Please choose another date.';
        cp_timeSlotsContainer.appendChild(msg);
        return;
      }

      const start = productAvailabilityConfig.startHour;
      const end = productAvailabilityConfig.endHour;
      const step = productAvailabilityConfig.slotDurationMinutes;

      for (let hour = start; hour < end; hour++) {
        for (let minute = 0; minute < 60; minute += step) {
          const label = cp_formatTime(hour, minute);
          const value = `${String(hour).padStart(2, '0')}:${String(minute).padStart(2, '0')}`;

          const btn = document.createElement('button');
          btn.type = 'button';
          btn.className = 'time-slot-btn';
          btn.textContent = label;
          btn.dataset.value = value;

          btn.addEventListener('click', () => {
            document.querySelectorAll('.time-slot-btn').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            cp_selectedTimeInput.value = value;
          });

          cp_timeSlotsContainer.appendChild(btn);
        }
      }
    }

    // Minimum date = today
    const today = new Date().toISOString().split('T')[0];
    cp_dateInput.min = today;

    // When date changes, regenerate slots
    cp_dateInput.addEventListener('change', function () {
      if (!this.value) return;
      cp_generateTimeSlots(this.value);
    });

    // Simple front-end submission (no real payment yet)
    cp_form.addEventListener('submit', function (e) {
    // 1. Make sure a time slot is selected
      if (!cp_selectedTimeInput.value) {
        e.preventDefault();
        alert('Please select a time slot for your consultation.');
        return;
      }

      // 2. NOW go to payment page
      e.preventDefault(); // stop default just so we control the redirect ourselves
      window.location.href = 'checkout-appointment.php';
    });


    // ========= WAITLIST BUTTONS → FILL SHARED WAITLIST FORM =========
    const waitlistButtons = document.querySelectorAll('.waitlist-btn');
    const wl_productInput = document.getElementById('wl_product');
    const wl_form = document.getElementById('waitlistForm');
    const wl_formMessage = document.getElementById('wl_formMessage');
    const wl_wantAppointment = document.getElementById('wl_wantAppointment');

    waitlistButtons.forEach(btn => {
      btn.addEventListener('click', () => {
        const productName = btn.dataset.product || '';
        wl_productInput.value = productName;

        // Scroll to waitlist section smoothly
        const waitlistSection = document.getElementById('waitlist');
        if (waitlistSection) {
          waitlistSection.scrollIntoView({ behavior: 'smooth' });
        }
      });
    });

    // Simple front-end handler for waitlist form
    wl_form.addEventListener('submit', function (e) {
      e.preventDefault();

      // Optional: pass product name in URL so payment page can show it
      const productName = wl_productInput.value || 'Selected Future Product';
      const url = 'waitlist-payment.php?product=' + encodeURIComponent(productName);

      window.location.href = url;
    });

  </script>
</body>
</html>
