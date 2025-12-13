<?php
// navbar.php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// First letter for avatar when logged in
$avatarLetter = '';
if (!empty($_SESSION['user_name'])) {
    $avatarLetter = strtoupper(substr(trim($_SESSION['user_name']), 0, 1));
}

// Total quantity for cart badge
$cartCount = 0;
if (!empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $item) {
        $cartCount += isset($item['qty']) ? (int)$item['qty'] : 1;
    }
}

// current page file name (e.g., "about.php", "skinIndex.php", "Products.php")
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<link rel="stylesheet" href="./CSS/navbar.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<header class="navbar">
    <div class="logo">
        <!-- Use a single logo image, removing the duplicate -->
        <img src="./img/LOGO - Wild Natural Products and Events.PNG" alt="Wild Skincare Logo" style="width: 100px; height: auto;" />
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
            <?php if (!empty($_SESSION['user_id'])): ?>
                <!-- LOGGED-IN: show avatar circle + dropdown: Profile / Logout -->
                <div class="profile-avatar">
                    <?php echo $avatarLetter; ?>
                </div>

                <div class="profile-dropdown">
                    <a href="profile.php">Profile</a>
                    <a href="logout.php">Logout</a>
                </div>

            <?php else: ?>
                <!-- NOT LOGGED-IN: show user icon + Sign Up / Log In -->
                <i class="fa-regular fa-user profile-icon"></i>

                <div class="profile-dropdown">
                    <a href="signUp.php">Sign Up</a>
                    <a href="signin.php">Log In</a>
                </div>
            <?php endif; ?>
        </div>

        <!-- Cart icon with quantity badge -->
        <a href="cart.php" class="cart cart-icon-wrapper">
            <i class="fa-solid fa-cart-shopping"></i>
            <?php if ($cartCount > 0): ?>
                <span class="cart-count"><?= $cartCount ?></span>
            <?php endif; ?>
        </a>
    </div>
</header>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const profile = document.querySelector(".profile-container");
        if (!profile) return;

        profile.addEventListener("click", function(event) {
            event.stopPropagation();
            profile.classList.toggle("active");
        });

        document.addEventListener("click", function() {
            profile.classList.remove("active");
        });
    });
</script>