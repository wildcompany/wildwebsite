<?php
session_start();

if (empty($_SESSION['user_id'])) {
    header("Location: signin.php");
    exit();
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Your Profile – Wild Skincare</title>
    <link rel="stylesheet" href="./CSS/profile.css">
</head>
<body>

<?php include 'navbar.php'; ?>

<h1 style="text-align:center; margin-top:40px;">
    Welcome, <?php echo htmlspecialchars($_SESSION['user_name']); ?>
</h1>

<p style="text-align:center; color:#555;">
    This will be your account hub — orders, settings, saved addresses, preferences, etc.
</p>

</body>
</html>
