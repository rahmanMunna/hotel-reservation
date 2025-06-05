<?php
// index.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Hotel Reservation - Home</title>
  <style>
    body { font-family: Arial; margin: 0; padding: 0; }
    header { background: #333; color: #fff; padding: 20px; text-align: center; }
    nav a { margin: 0 15px; color: white; text-decoration: none; }
    section { padding: 50px 20px; text-align: center; }
    .cta {
      background: #28a745;
      color: white;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 5px;
    }
    form input {
      padding: 10px;
      width: 250px;
    }
    form button {
      padding: 10px 20px;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <header>
    <h1>Welcome to Hotel Cymon</h1>
    <nav>
      <a href="../Room_types/booking.php">Room_Type</a>
      <a href="../Search_Filter/search.php">Search</a>
      <a href="../../../controller/php/logout.php">Logout</a>
      <a href="../Amenities_List/inquiry.php">Inquiry</a>
      <a href="../Review_System/response_tool.php">Rating</a>
    </nav>
  </header>

  <section>
    <h2>Your Comfort, Our Priority</h2>
    <p>Book rooms in top-rated hotels at the best price.</p>

    <!-- This button redirects to login -->
    <a href="../../Authentication/Login/login.php" class="cta">Get Started</a>
  </section>

  <section id="signup">
    <h2>Sign Up</h2>
    <form id="signupForm" action="signup_process.php" method="post">
      <input type="text" name="name" id="name" placeholder="Full Name" required><br><br>
      <input type="email" name="email" id="email" placeholder="Email Address" required><br><br>
      <input type="password" name="password" id="password" placeholder="Password" required><br><br>
      <button type="submit">Register</button>
    </form>
  </section>

  <script src="../../asset/Javascript/Authentication/login.js"></script>
</body>
</html>
