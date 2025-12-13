<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Appointment Confirmed | EIL</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
  
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: #f0f4fa;
      color: #333;
    }

    .success-wrapper {
      max-width: 900px;
      margin: 80px auto;
      background: #ffffff;
      padding: 50px 40px;
      border-radius: 22px;
      box-shadow: 0 6px 30px rgba(0,0,0,0.12);
      text-align: center;
      animation: fadeIn 0.6s ease-in-out;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to   { opacity: 1; transform: translateY(0px); }
    }

    .success-icon {
      width: 100px;
      height: 100px;
      background: #e3f8ec;
      border-radius: 50%;
      margin: 0 auto 25px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .success-icon span {
      font-size: 55px;
      color: #1e8e4a;
      font-weight: bold;
    }

    h1 {
      font-size: 32px;
      font-weight: 600;
      color: #003366;
      margin-bottom: 10px;
    }

    p.message {
      color: #555;
      font-size: 15px;
      margin-bottom: 35px;
      line-height: 1.7;
    }

    .highlight-box {
      background: #eef5ff;
      padding: 20px 30px;
      border-radius: 18px;
      margin-bottom: 40px;
      font-size: 15px;
      line-height: 1.6;
    }

    .highlight-box strong {
      color: #003366;
    }

    .btn-group {
      display: flex;
      justify-content: center;
      gap: 20px;
      flex-wrap: wrap;
      margin-top: 30px;
    }

    .btn {
      text-decoration: none;
      padding: 14px 32px;
      border-radius: 30px;
      font-size: 15px;
      font-weight: 500;
      transition: 0.3s;
      display: inline-block;
    }

    .btn-primary {
      background: #003366;
      color: #fff;
    }
    .btn-primary:hover {
      background: #0059b3;
    }

    .btn-secondary {
      background: #e7eefb;
      color: #003366;
    }
    .btn-secondary:hover {
      background: #d4e1f9;
    }

    .btn-tertiary {
      background: #eaf6ee;
      color: #1e8e4a;
    }
    .btn-tertiary:hover {
      background: #d5f0e0;
    }
  </style>
</head>
<body>

  <div class="success-wrapper">
    
    <div class="success-icon">
      <span>✓</span>
    </div>

    <h1>Your Appointment Request is Successfully Submitted</h1>

    <p class="message">
      Thank you for reaching out to the Emotional Intelligence in Leadership team.  
      Our support staff will review your request and contact you on your registered email shortly.
    </p>

    <div class="highlight-box">
      For any urgent concerns, feel free to email us at  
      <strong>support@eil.com</strong> or explore our <strong>Subscription</strong> options for premium content.
    </div>

    <div class="btn-group">
      <a href="index.html" class="btn btn-primary">Go to Home</a>
      <a href="subscription.html" class="btn btn-secondary">Go to Subscription Page</a>
      <a href="appointment.html" class="btn btn-tertiary">Book Another Appointment</a>
    </div>

  </div>

</body>
</html>
