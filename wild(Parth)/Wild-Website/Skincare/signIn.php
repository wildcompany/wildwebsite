<?php
session_start();
require_once "config.php";

$errorMsg = "";

ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email    = trim($_POST['email'] ?? "");
    $password = $_POST['password'] ?? "";

    if ($email === "" || $password === "") {
        $errorMsg = "Please enter both email and password.";
    } else {
        // Use email to fetch user details
        $sql  = "SELECT id, full_name, email, password 
                 FROM wild_users 
                 WHERE email = ? 
                 LIMIT 1";
        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if ($row = mysqli_fetch_assoc($result)) {
                // Direct comparison for plain text passwords
                if ($password === $row['password']) {
                    $_SESSION['user_id']   = $row['id'];
                    $_SESSION['user_name'] = $row['full_name']; // Using full_name instead of username
                    header("Location: skinIndex.php");
                    exit();
                } else {
                    $errorMsg = "Invalid email or password.";
                }
            } else {
                $errorMsg = "Invalid email or password.";
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
  <title>Sign In - Wild Skincare</title>
  <link rel="stylesheet" href="./CSS/signIn.css">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
</head>

<body>
<?php include 'navbar.php'; ?>

<div class="container">
    <div class="form-box">
        <h2>Welcome Back</h2>
        <p class="subtitle">Sign in to continue your Wild Skincare journey</p>

        <!-- Sign In Form -->
        <form method="POST" action="signin.php">
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Enter your email" required>
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Enter your password" required>
            </div>

            <!-- Show Error Message -->
            <?php if ($errorMsg): ?>
                <p style="color: red; text-align:center; margin-bottom:10px;">
                    <?php echo htmlspecialchars($errorMsg); ?>
                </p>
            <?php endif; ?>

            <button class="btn" type="submit">Sign In</button>

            <p class="bottom-text">Don't have an account? <a href="signUp.php">Sign Up</a></p>
        </form>
    </div>
</div>
</body>
</html>
