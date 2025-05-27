  <?php session_start();
  if (isset($_SESSION['status']) || isset($_COOKIE['status'])){

?>
<!DOCTYPE html>
<html>
<head>
  <title>Hotel Reservation - Welcome</title>
   <link rel="stylesheet" href="../../../asset/Styles(Chandrima)/Landing_Page/style.css">
</head>
<body>
<div class="navbar">
  <a href="landing.php">Home</a>
  <a href="about.php">About</a>
  <a href="signup.php">Sign Up</a>
</div>

<div class="section" id="home">
  <h1>Welcome to Our Hotel Reservation System</h1>
  <p>Book hotels instantly, securely, and easily.</p>
  <a href="signup.php" class="cta">Get Started</a>
</div>

<div class="section" id="features">
  <h2>Features</h2>
  <ul>
    <li>Instant Booking</li>
    <li>User Dashboard</li>
    <li>Admin Controls</li>
  </ul>
</div>

<div class="section" id="testimonials">
  <h2>What Our Users Say</h2>
  <p>"Very easy to use!" – A. Customer</p>
  <p>"Fast and reliable booking." – B. Guest</p>
</div>
<script src="../../../asset/Javascript(Chandrima)/Landing_Page/validation.js"></script>
</body>
</html>

 <?php   
} else {
    header('Location: ../../Authentication/Login/login.php');
    exit();
}
?>
 
