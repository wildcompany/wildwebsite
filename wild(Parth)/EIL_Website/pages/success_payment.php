<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Payment Successful | WILD – Emotional Intelligence</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: #f3f5ff;              /* light background similar to checkout */
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
    }

    .success-wrapper {
      max-width: 480px;
      width: 100%;
      background: #ffffff;
      padding: 40px 32px;
      border-radius: 18px;
      box-shadow: 0 20px 40px rgba(15, 23, 42, 0.15);
      text-align: center;
    }

    .success-icon {
      width: 70px;
      height: 70px;
      border-radius: 50%;
      background: #e0f8eb;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 20px;
      font-size: 34px;
      color: #0f9d58;
    }

    h1 {
      font-size: 26px;
      font-weight: 600;
      color: #111827;
      margin-bottom: 10px;
    }

    .subtext {
      font-size: 14px;
      color: #4b5563;
      margin-bottom: 28px;
      line-height: 1.6;
    }

    .highlight {
      font-weight: 500;
      color: #1d4ed8;
    }

    .actions {
      display: flex;
      gap: 12px;
      justify-content: center;
      flex-wrap: wrap;
    }

    .btn-primary,
    .btn-ghost {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      padding: 10px 20px;
      border-radius: 999px;
      font-size: 14px;
      font-weight: 500;
      text-decoration: none;
      cursor: pointer;
      border: 1px solid transparent;
      transition: all 0.18s ease;
    }

    .btn-primary {
      background: #1d4ed8;   /* primary blue */
      color: #ffffff;
      border-color: #1d4ed8;
    }

    .btn-primary:hover {
      background: #1e40af;
      border-color: #1e40af;
      transform: translateY(-1px);
      box-shadow: 0 8px 18px rgba(37, 99, 235, 0.35);
    }

    .btn-ghost {
      background: #ffffff;
      color: #1f2933;
      border-color: #d1d5db;
    }

    .btn-ghost:hover {
      background: #f3f4f6;
    }

    .small-note {
      margin-top: 18px;
      font-size: 12px;
      color: #9ca3af;
    }
  </style>
</head>
<body>

  <div class="success-wrapper">
    <div class="success-icon">✓</div>

    <h1>Payment Successful</h1>
    <p class="subtext">
      Your payment details have been recorded successfully.
      You now have <span class="highlight">Premium Monthly Access</span> to the EIL content.
    </p>

    <div class="actions">
      <!-- Adjust links according to your structure -->
      <a href="index.html" class="btn-primary">Go to Home</a>
      <a href="subscription.html" class="btn-ghost">View Subscription</a>
    </div>

    <p class="small-note">You can close this window if you reached this page during testing.</p>
  </div>

</body>
</html>
