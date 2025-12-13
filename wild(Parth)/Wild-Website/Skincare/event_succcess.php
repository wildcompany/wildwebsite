<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registration Successful | Wild Skincare</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    body {
      margin: 0;
      font-family: 'Open Sans', sans-serif;
      background: #f6f9f6;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .success-card {
      background: #ffffff;
      max-width: 520px;
      width: 90%;
      padding: 40px 35px;
      text-align: center;
      border-radius: 14px;
      box-shadow: 0 15px 40px rgba(0,0,0,0.08);
    }

    .success-icon {
      font-size: 64px;
      color: #2e7d32; /* natural green */
      margin-bottom: 20px;
    }

    .success-card h1 {
      margin: 0 0 10px;
      font-size: 28px;
      color: #2e7d32;
    }

    .success-card p {
      color: #555;
      font-size: 16px;
      line-height: 1.6;
      margin-bottom: 30px;
    }

    .btn-group {
      display: flex;
      gap: 15px;
      justify-content: center;
      flex-wrap: wrap;
    }

    .btn {
      text-decoration: none;
      padding: 12px 22px;
      border-radius: 8px;
      font-weight: 600;
      font-size: 15px;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      transition: all 0.3s ease;
    }

    .btn-events {
      background: #2e7d32;
      color: #fff;
    }

    .btn-events:hover {
      background: #256628;
    }

    .btn-home {
      background: #e8f5e9;
      color: #2e7d32;
      border: 1px solid #2e7d32;
    }

    .btn-home:hover {
      background: #dff0e1;
    }

    @media (max-width: 480px) {
      .success-card {
        padding: 30px 20px;
      }
    }
  </style>
</head>

<body>

  <div class="success-card">
    <div class="success-icon">
      <i class="fa-solid fa-circle-check"></i>
    </div>

    <h1>Registration Confirmed</h1>

    <p>
      Thank you for registering with <strong>Wild Skincare</strong>.  
      Your spot has been successfully reserved.  
      We look forward to welcoming you to a meaningful, nature-inspired experience.
    </p>

    <div class="btn-group">
      <a href="events.php" class="btn btn-events">
        <i class="fa-solid fa-calendar-days"></i>
        Back to Events
      </a>

      <a href="index.php" class="btn btn-home">
        <i class="fa-solid fa-house"></i>
        Go to Home
      </a>
    </div>
  </div>

</body>
</html>
