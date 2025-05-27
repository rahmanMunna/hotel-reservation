  <?php session_start();
  if (isset($_SESSION['status']) || isset($_COOKIE['status'])){

?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign Up - Hotel Reservation</title>
  <link rel="stylesheet" href="style.css">
  <script src="validation.js"></script>
</head>
<body>
<div class="navbar">
  <a href="landing.php">Home</a>
  <a href="about.php">About</a>
  <a href="signup.php">Sign Up</a>
</div>

<div class="section">
  <h2>Create an Account</h2>
  <form name="signupForm" onsubmit="return validateSignupForm();" method="post">
    <label>Username:</label>
    <input type="text" name="username" placeholder="Enter username">

    <label>Email:</label>
    <input type="email" name="email" placeholder="Enter email">

    <label>Password:</label>
    <input type="password" name="password" placeholder="Enter password">

    <button type="submit">Register</button>
  </form>
</div>
</body>
</html>
<?php   
} else {
    header('Location: ../../Authentication/Login/login.php');
    exit();
}
?>
