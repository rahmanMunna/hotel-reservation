   <?php session_start();
  if (isset($_SESSION['status']) || isset($_COOKIE['status'])){
    
} else {
    header('Location: ../Authentication/Login/login.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>About - Hotel Reservation</title>
  <link rel="stylesheet" href="../../asset/Styles(Chandrima)/Landing_Page/style.css">
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(to right, #e0f7fa, #f0f4f8);
      color: #2c3e50;
    }

    .navbar {
      background-color: #34495e;
      overflow: hidden;
      display: flex;
      justify-content: center;
      padding: 15px 0;
    }

    .navbar a {
      color: #ecf0f1;
      text-decoration: none;
      margin: 0 20px;
      font-size: 16px;
      padding: 10px 20px;
      border-radius: 5px;
      transition: background 0.3s;
    }

    .navbar a:hover {
      background-color: #1abc9c;
    }

    .section {
      max-width: 800px;
      margin: 80px auto;
      background: #fff;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    h2 {
      font-size: 28px;
      margin-bottom: 20px;
      color: #2c3e50;
    }

    p {
      font-size: 18px;
      line-height: 1.6;
      color: #555;
    }
  </style>
</head>
<body>
<div class="navbar">
  <a href="landing.php">Home</a>
  <a href="about.php">About</a>
  <a href="signup.php">Sign Up</a>
</div>

<div class="section">
  <h2>About Our System</h2>
  <p>This hotel reservation system helps you find and book hotels with ease. It is designed to prioritize user experience, comfort, and accessibility. Whether you're planning a quick getaway or a luxury stay, our system makes the booking process seamless and intuitive.</p>
</div>

<script src="../../asset/Javascript(Chandrima)/Landing_Page/validation.js"></script>
</body>
</html>
 

 
