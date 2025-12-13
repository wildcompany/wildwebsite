<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Event Request Received | WILD – Emotional Intelligence</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: #f3f5ff;
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
    }

    .success-card {
      width: 100%;
      max-width: 520px;
      background: #ffffff;
      padding: 45px 38px;
      border-radius: 18px;
      box-shadow: 0 18px 40px rgba(15, 23, 42, 0.15);
      text-align: center;
      animation: fadeIn 0.4s ease-out;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(15px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .icon-box {
      width: 70px;
      height: 70px;
      border-radius: 50%;
      background: #d1fae5;
      color: #059669;
      font-size: 34px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 20px;
    }

    h1 {
      font-size: 26px;
      font-weight: 600;
      color: #111827;
      margin-bottom: 12px;
    }

    p {
      font-size: 14px;
      color: #4b5563;
      margin-bottom: 26px;
      line-height: 1.6;
    }

    .btn-section {
      display: flex;
      justify-content: center;
      gap: 12px;
      flex-wrap: wrap;
    }

    .btn-primary, .btn-secondary {
      padding: 10px 20px;
      border-radius: 999px;
      font-size: 14px;
      font-weight: 500;
      text-decoration: none;
      border: 1px solid transparent;
      cursor: pointer;
      transition: all 0.2s ease;
      display: inline-flex;
      align-items: center;
      justify-content: center;
    }

    .btn-primary {
      background: #1d4ed8;
      color: #ffffff;
      border-color: #1d4ed8;
    }

    .btn-primary:hover {
      background: #1e40af;
      border-color: #1e40af;
      transform: translateY(-2px);
      box-shadow: 0 10px 20px rgba(37, 99, 235, 0.35);
    }

    .btn-secondary {
      background: #ffffff;
      color: #1f2937;
      border: 1px solid #d1d5db;
    }

    .btn-secondary:hover {
      background: #f3f4f6;
    }

  </style>
</head>
<body>

  <div class="success-card">
    <div class="icon-box">✓</div>

    <h1>Request Submitted Successfully</h1>

    <p>
      Thank you for requesting a customized event.  
      Our team will review your details and get back to you shortly with next steps.
    </p>

    <div class="btn-section">
      <a href="events.html" class="btn-primary">Back to Events</a>
      <a href="index.html" class="btn-secondary">Return Home</a>
    </div>
  </div>

</body>
</html>
