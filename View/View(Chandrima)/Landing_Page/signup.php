<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign Up - Hotel Reservation</title>
 <link rel="stylesheet" href="../../asset/Styles(Chandrima)/Landing_Page/style.css">
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
<script src="../../asset/Javascript(Chandrima)/Landing_Page/validation.js"></script>
</body>
</html>
