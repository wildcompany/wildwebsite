<?php
session_start();
$errorMsg = '';

if (isset($_GET['error'])) {
    if ($_GET['error'] === 'required') {
        $errorMsg = 'Email and password are required.';
    } elseif ($_GET['error'] === 'invalid') {
        $errorMsg = 'Invalid email or password. Please try again.';
    }
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login for Video Access</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <style>
    body {
      margin: 0;
      padding: 0;
      background: #f4f7ff;
      font-family: 'Poppins', sans-serif;
    }
    .container {
      width: 100%;
      max-width: 420px;
      margin: 80px auto;
      background: #ffffff;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 8px 25px rgba(0,0,0,0.08);
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      font-size: 24px;
      font-weight: 600;
      color: #1e2a4a;
    }

    .alert {
      margin-bottom: 18px;
      padding: 10px 12px;
      border-radius: 8px;
      font-size: 14px;
    }

    .alert-error {
      background: #fee2e2;
      color: #b91c1c;
      border: 1px solid #fecaca;
    }

    label {
      display: block;
      margin-bottom: 6px;
      font-weight: 500;
      color: #333;
      font-size: 14px;
    }

    input {
      width: 100%;
      padding: 12px;
      margin-bottom: 18px;
      border: 1px solid #cdd5e0;
      border-radius: 8px;
      font-size: 15px;
      outline: none;
      transition: 0.2s;
    }

    input:focus {
      border-color: #3b82f6;
      box-shadow: 0 0 0 2px rgba(59,130,246,0.25);
    }

    button {
      width: 100%;
      background: #4a61dd;
      color: white;
      padding: 12px;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      transition: 0.2s;
    }

    button:hover {
      background: #394cd4;
    }

    .login-link {
      text-align: center;
      margin-top: 18px;
      font-size: 14px;
    }

    .login-link a {
      color: #4a61dd;
      font-weight: 600;
      text-decoration: none;
    }

    .login-link a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Login for Video Access</h2>

  <?php if ($errorMsg): ?>
    <div class="alert alert-error">
      <?php echo htmlspecialchars($errorMsg); ?>
    </div>
  <?php endif; ?>

  <form method="POST" action="/Wild/EIL_Website/pages/login_for_video_access.php">

      <input type="email" name="email" placeholder="Enter your email" required>

      <label>Password</label>
      <input type="password" name="password" placeholder="Enter your password" required>

      <button type="submit">Login</button>
  </form>

  <div class="login-link">
    Don’t have an account? <a href="signup.php">Create one</a>
  </div>
</div>

</body>
</html>
