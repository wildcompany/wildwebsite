<?php
session_start();
require_once "config.php";

$successMsg = "";
$errorMsg   = "";

// Show all PHP errors for debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $full_name = trim($_POST['full_name'] ?? "");
    $email     = trim($_POST['email'] ?? "");
    $password  = $_POST['password'] ?? "";

    if ($full_name === "" || $email === "" || $password === "") {
        $errorMsg = "All fields are required.";
    } else {
        // Store the plain password (not hashed)
        $plainPassword = $password;  // Storing the password as is (plain text)

        $sql  = "INSERT INTO wild_users (full_name, email, password) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "sss", $full_name, $email, $plainPassword);

            if (mysqli_stmt_execute($stmt)) {
                $successMsg = "Account created successfully! You can now sign in.";
            } else {
                $errorMsg = "Insert failed: " . mysqli_error($conn);
            }

            mysqli_stmt_close($stmt);
        } else {
            $errorMsg = "Database error. Please try again.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up - Wild Skincare</title>
  <link rel="stylesheet" href="./CSS/signUp.css">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
</head>

<body>
<?php include 'navbar.php'; ?>

<div class="container">
    <div class="form-box">
        <h2>Create Your Account</h2>
        <p class="subtitle">Join Wild Skincare for a natural beauty experience</p>

        <!-- Show Success Message -->
        <?php if (!empty($successMsg)): ?>
            <p style="color: green; text-align:center; margin-bottom:10px;">
                <?php echo htmlspecialchars($successMsg); ?>
            </p>
        <?php endif; ?>

        <!-- Show Error Message -->
        <?php if (!empty($errorMsg)): ?>
            <p style="color: red; text-align:center; margin-bottom:10px;">
                <?php echo htmlspecialchars($errorMsg); ?>
            </p>
        <?php endif; ?>

        <!-- Sign Up Form -->
        <form method="POST" action="signUp.php">
            <div class="input-group">
                <label for="full_name">Full Name</label>
                <input type="text" id="full_name" name="full_name" placeholder="Enter your full name" required>
            </div>

            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Create a password" required>
            </div>

            <button class="btn" type="submit">Sign Up</button>

            <p class="bottom-text">Already have an account? <a href="signIn.php">Sign In</a></p>
        </form>
    </div>
</div>
</body>
</html>
