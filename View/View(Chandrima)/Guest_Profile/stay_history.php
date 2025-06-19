  <?php session_start();
  if (isset($_SESSION['status']) || isset($_COOKIE['status'])){
    
?>
<!DOCTYPE html>
<html>
<head>
  <title>Stay History</title>
  <link rel="stylesheet" href="../../../asset/Styles(Chandrima)/Guest_Profile/style.css">
</head>
<body>
<div class="navbar">
  <a href="landing.php">Home</a>
  <a href="preference_center.php">Preferences</a>
  <a href="stay_history.php">Stay History</a>
  <a href="loyalty_dashboard.php">Loyalty</a>
</div>

<div class="container">
  <h2>Your Stay History</h2>
  <table>
    <tr>
      <th>Hotel</th><th>Check-In</th><th>Check-Out</th><th>Room Type</th>
    </tr>
    <tr>
      <td>Ocean View Resort</td><td>2024-12-01</td><td>2024-12-05</td><td>Suite</td>
    </tr>
    <tr>
      <td>City Light Inn</td><td>2024-06-10</td><td>2024-06-12</td><td>Deluxe</td>
    </tr>
  </table>
</div>
<script src="../../../asset/Javascript(Chandrima)/Guest_Profile/profile_validate.js"></script>
</body>
</html>
<?php

} else {
    header('Location: ../../Authentication/Login/login.php');
    exit();
}
?>
