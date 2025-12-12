<!-- navbar.php -->

<link rel="stylesheet" href="./CSS/navbar.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<header class="navbar">
    <div class="logo">
      <img src="./img/LOGO - Wild Natural Products and Events.PNG" alt="" style="width: 100px; height: auto;" />
    </div>

    <nav class="nav-links">
        <a href="skinIndex.php" class="active" style="color: black; font-weight: bold;">Home</a>

        <div class="dropdown">
            <a href="Products.php" class="drop-btn" style="color: black; font-weight: bold;">Products</a>
        </div>

        <a href="about.php" style="color: black; font-weight: bold;">About</a>
        <a href="events.php" style="color: black; font-weight: bold;">Events</a>
        <a href="farmVisit.php" style="color: black; font-weight: bold;">Farm Visit</a>
        <a href="./contact.php" style="color: black; font-weight: bold;">Contact</a>
    </nav>

    <div class="icons">
        <div class="profile-container">
            <i class="fa-regular fa-user profile-icon"></i>

            <div class="profile-dropdown">
                <a href="./signUp.php">Sign Up</a>
                <a href="./signIn.php">Log In</a>
            </div>
        </div>

        <a href="cart.php" class="cart">
            <i class="fa-solid fa-cart-shopping"></i>
        </a>
    </div>
</header>

<script>
// Toggle dropdown on click
document.addEventListener("DOMContentLoaded", function () {
    const profile = document.querySelector(".profile-container");

    profile.addEventListener("click", function (event) {
        event.stopPropagation(); 
        profile.classList.toggle("active");
    });

    // Close dropdown when clicking outside
    document.addEventListener("click", function () {
        profile.classList.remove("active");
    });
});
</script>
