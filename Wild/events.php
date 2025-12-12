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

  <!-- ================= HERO SECTION ================= -->
  <section class="hero">
    <h1>Events & Workshops</h1>
    <p>
      Join us for exclusive events, workshops, and community gatherings. Connect with <br>
      fellow natural beauty enthusiasts and learn from our experts.
    </p>
  </section>

  <!-- ================= FEATURED EVENTS ================= -->
  <section class="featured">
    <h2>Featured Events</h2>
  </section>

  <!-- ================= FEATURED EVENTS SECTION ================= -->
  <section class="events-section">
  
    <!-- ===== Event Card 1 ===== -->
    <div class="event-card">
      <!-- Event Image + Category Badge -->
      <div class="event-image">
        <img src="./img/cream.png" alt="DIY Face Masks">
        <span class="event-badge workshop">Workshop</span>
      </div>

      <!-- Event Content Area -->
      <div class="event-content">
        <!-- Event Title -->
        <h3>Natural Skincare Workshop: DIY Face Masks</h3>

        <!-- Event Description -->
        <p>Learn to create your own natural face masks using organic ingredients. Perfect for beginners!</p>

        <!-- Event Details (Date, Time, Location) -->
        <div class="event-details">
          <p><i class="fa-regular fa-calendar"></i> November 15, 2025</p>
          <p><i class="fa-regular fa-clock"></i> 2:00 PM – 4:00 PM</p>
          <p><i class="fa-solid fa-location-dot"></i> Wild Skincare Studio, Portland</p>
        </div>

        <!-- Footer (Attendance + Register Button) -->
        <div class="event-footer">
          <p><i class="fa-solid fa-users"></i> 18/25 attending</p>
          <a href="event-register.php"><button class="register-btn">Register </button></a>
        </div>
      </div>
    </div>

    <!-- ===== Event Card 2 ===== -->
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
          <a href="event-register.php"><button class="register-btn" >Register </button></a>
        </div>
      </div>
    </div>

    <!-- ===== Event Card 3 ===== -->
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
          <a href="event-register.php"> <button class="register-btn">Register </button></a>
        </div>
      </div>
    </div>
  </section>

  <!-- ================== NEW: CUSTOM EVENT APPOINTMENT SECTION ================== -->
  <section class="consultation-section">
    <div class="consultation-container">
      
      <!-- LEFT SIDE: TEXT / EXPLANATION -->
      <div class="consultation-info">
        <h2>Custom Events & Experiences</h2>
        <p>
          Whether you're a business hosting a launch or an individual planning a special celebration, 
          Sara can help you design a thoughtful, fully customized event experience.
        </p>
        <ul>
          <li><i class="fa-regular fa-circle-check"></i> Brand activations & product launches</li>
          <li><i class="fa-regular fa-circle-check"></i> Intimate workshops & masterclasses</li>
          <li><i class="fa-regular fa-circle-check"></i> Private celebrations & community events</li>
        </ul>
        <p class="consultation-note">
          Choose a date and time that works for you from Sara’s live availability, and share a few details about your event.
        </p>
      </div>

      <!-- RIGHT SIDE: APPOINTMENT FORM + CALENDAR -->
      <div class="consultation-form-card">
        <h3>Book a Consultation with Sara</h3>
        
        <!-- NOTE: This is a front-end form only. You can hook it to email / database later. -->
        <form id="appointmentForm">
          <!-- Basic Contact Info -->
          <div class="form-row two-columns">
            <div class="form-group">
              <label for="fullName">Full Name *</label>
              <input type="text" id="fullName" name="fullName" required>
            </div>
            <div class="form-group">
              <label for="email">Email *</label>
              <input type="email" id="email" name="email" required>
            </div>
          </div>

          <div class="form-row two-columns">
            <div class="form-group">
              <label for="phone">Phone (optional)</label>
              <input type="tel" id="phone" name="phone" placeholder="+1 ...">
            </div>
            <div class="form-group">
              <label for="clientType">You are *</label>
              <select id="clientType" name="clientType" required>
                <option value="">Please select</option>
                <option value="business">A business / organization</option>
                <option value="individual">An individual</option>
              </select>
            </div>
          </div>

          <!-- Business / Event Details -->
          <div class="form-row two-columns">
            <div class="form-group">
              <label for="company">Company name (if applicable)</label>
              <input type="text" id="company" name="company" placeholder="Wild Skincare Inc.">
            </div>
            <div class="form-group">
              <label for="eventType">Type of event *</label>
              <select id="eventType" name="eventType" required>
                <option value="">Select event type</option>
                <option value="product-launch">Product launch</option>
                <option value="workshop">Workshop / masterclass</option>
                <option value="community">Community event</option>
                <option value="private">Private celebration</option>
                <option value="other">Other</option>
              </select>
            </div>
          </div>

          <div class="form-row two-columns">
            <div class="form-group">
              <label for="eventDate">Preferred event date</label>
              <input type="date" id="eventDate" name="eventDate">
            </div>
            <div class="form-group">
              <label for="guestCount">Estimated number of guests</label>
              <input type="number" id="guestCount" name="guestCount" min="1" placeholder="e.g. 30">
            </div>
          </div>

          <!-- APPOINTMENT DATE + TIME (BASED ON AVAILABILITY) -->
          <div class="form-row two-columns appointment-row">
            <div class="form-group">
              <label for="appointmentDate">Choose a consultation date *</label>
              <!-- Calendar input -->
              <input type="date" id="appointmentDate" name="appointmentDate" required>
              <small class="help-text">
                Sara is available on selected weekdays only.
              </small>
            </div>

            <div class="form-group">
              <label>Available time slots *</label>
              
              <!-- Time slots will be generated here with JS based on availabilityConfig -->
              <div id="timeSlots" class="time-slots">
                <p class="time-help-text">Select a date to see available times.</p>
              </div>

              <!-- Hidden input to store the selected time value -->
              <input type="hidden" id="selectedTime" name="selectedTime" required>
              <small class="help-text">
                Click a time to select it.
              </small>
            </div>
          </div>

          <!-- Event goals / notes -->
          <div class="form-group">
            <label for="eventDetails">Tell us about your event *</label>
            <textarea id="eventDetails" name="eventDetails" rows="4" placeholder="Share your goals, vibe, budget range, and any special requests." required></textarea>
          </div>

          <button type="submit" class="primary-btn">
            Submit Appointment Request
          </button>

          <!-- Simple confirmation message (front-end only) -->
          <p id="formMessage" class="form-message" style="display:none;">
            Thank you! Your request has been recorded. We’ll contact you by email to confirm your appointment.
          </p>
        </form>
      </div>

    </div>
  </section>
  <!-- ================== END CUSTOM EVENT APPOINTMENT SECTION ================== -->

  <!-- ================= PAST EVENTS SECTION ================= -->
  <section class="past-events-section">
    <!-- Section Title -->
    <h2>Past Events</h2>
    <div class="underline"></div>

    <!-- ====== Past Events Container ====== -->
    <div class="past-events-container">

      <!-- ===== Past Event Card 1 ===== -->
      <div class="past-card">
        <!-- Event Image + Overlay Label -->
        <div class="past-image">
          <img src="https://images.unsplash.com/photo-1501004318641-b39e6451bec6?auto=format&fit=crop&w=800&q=80" alt="Autumn Harvest Celebration">
          <div class="overlay">Completed</div>
        </div>

        <!-- Event Details -->
        <div class="past-content">
          <h3>Autumn Harvest Celebration</h3>
          <p class="date">October 14, 2025</p>
          <p class="attendees">85 attendees</p>
        </div>
      </div>

      <!-- ===== Past Event Card 2 ===== -->
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

      <!-- ===== Past Event Card 3 ===== -->
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

    </div> <!-- End of past-events-container -->
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

  <!-- Font Awesome Script for Icons -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

  <!-- =============== SIMPLE AVAILABILITY + TIMESLOT SCRIPT =============== -->
  <script>
    // ===== AVAILABILITY CONFIGURATION =====
    // This is the ONLY part you (or Sara) need to change in the future
    // if you want to update available days and times.
    const availabilityConfig = {
      // Working days: 0 = Sunday, 1 = Monday, ..., 6 = Saturday
      workingDays: [1, 2, 3, 4, 5], // Mon–Fri

      // Start & end hours in 24h format (local time)
      startHour: 10, // 10:00 AM
      endHour: 16,   // 4:00 PM

      // One appointment slot duration (in minutes)
      slotDurationMinutes: 30,

      // OPTIONAL: Block specific dates completely (format: 'YYYY-MM-DD')
      blockedDates: [
        // Example: '2025-12-25', '2025-12-31'
      ]
    };

    // ===== DOM ELEMENTS =====
    const appointmentDateInput = document.getElementById('appointmentDate');
    const timeSlotsContainer = document.getElementById('timeSlots');
    const selectedTimeInput = document.getElementById('selectedTime');
    const appointmentForm = document.getElementById('appointmentForm');
    const formMessage = document.getElementById('formMessage');

    // ===== Helper: format a time nicely (e.g. 10:00 AM) =====
    function formatTime(hour, minute) {
      const date = new Date();
      date.setHours(hour, minute, 0, 0);
      return date.toLocaleTimeString([], { hour: 'numeric', minute: '2-digit' });
    }

    // ===== Check if selected date is blocked or not in workingDays =====
    function isDateAvailable(dateString) {
      // Blocked date?
      if (availabilityConfig.blockedDates.includes(dateString)) return false;

      const dateObj = new Date(dateString + 'T00:00:00');
      const day = dateObj.getDay(); // 0–6

      // Check if day is in workingDays array
      return availabilityConfig.workingDays.includes(day);
    }

    // ===== Generate time slots for a given date =====
    function generateTimeSlots(dateString) {
      timeSlotsContainer.innerHTML = '';       // clear old slots
      selectedTimeInput.value = '';           // reset selected time

      if (!isDateAvailable(dateString)) {
        const msg = document.createElement('p');
        msg.className = 'time-help-text';
        msg.textContent = 'Sara is not available on this day. Please choose another date.';
        timeSlotsContainer.appendChild(msg);
        return;
      }

      const startHour = availabilityConfig.startHour;
      const endHour = availabilityConfig.endHour;
      const step = availabilityConfig.slotDurationMinutes;

      // Starting from startHour:00, going until endHour:00
      for (let hour = startHour; hour < endHour; hour++) {
        for (let minute = 0; minute < 60; minute += step) {
          const slotLabel = formatTime(hour, minute);
          const slotValue = `${String(hour).padStart(2, '0')}:${String(minute).padStart(2, '0')}`;

          const btn = document.createElement('button');
          btn.type = 'button';
          btn.className = 'time-slot-btn';
          btn.textContent = slotLabel;
          btn.dataset.value = slotValue;

          // On click, mark as selected
          btn.addEventListener('click', () => {
            // Clear previous active states
            document.querySelectorAll('.time-slot-btn').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            selectedTimeInput.value = slotValue;
          });

          timeSlotsContainer.appendChild(btn);
        }
      }
    }

    // ===== Set minimum consultation date to today =====
    const today = new Date().toISOString().split('T')[0];
    appointmentDateInput.min = today;

    // ===== When user picks a date, generate time slots =====
    appointmentDateInput.addEventListener('change', function () {
      const dateValue = this.value; // 'YYYY-MM-DD'
      if (!dateValue) return;
      generateTimeSlots(dateValue);
    });

    // ===== Simple front-end form submission handler =====
    appointmentForm.addEventListener('submit', function (e) {
      // If no time selected, prevent submit and show message
      if (!selectedTimeInput.value) {
        e.preventDefault();
        alert('Please select a consultation time slot.');
        return;
      }

      // For now, prevent actual submission since there's no backend.
      // You can remove e.preventDefault() later when you connect PHP/email.
      e.preventDefault();

      // Show simple message
      formMessage.style.display = 'block';

      // Optionally clear the form after a short delay
      this.reset();
      timeSlotsContainer.innerHTML = '<p class="time-help-text">Select a date to see available times.</p>';
      selectedTimeInput.value = '';
    });
  </script>

</body>
</html>
