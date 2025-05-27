  <?php session_start();
  if (isset($_SESSION['status']) || isset($_COOKIE['status'])){
 
?>
<!DOCTYPE html>
<html>
<head>
  <title>Room Gallery</title>
  <link rel="stylesheet" href="../../../asset/Styles(Chandrima)/Room_types/review_system.css"> 
</head>
<body>
<div class="navbar">
  <a href="landing.php">Home</a>
  <a href="rooms.php">Rooms</a>
</div>

<div class="container">
  <h2>Available Rooms</h2>

  <label for="roomFilter">Filter by Category:</label>
  <select id="roomFilter" onchange="filterRooms()">
    <option value="all">All</option>
    <option value="standard">Standard</option>
    <option value="deluxe">Deluxe</option>
    <option value="suite">Suite</option>
  </select>

  <div class="room-list">
    <!-- Standard Room -->
    <div class="room-card standard">
      <h3>Standard Room</h3>
      <img src="src/standard.jpg" alt="Standard Room">
      <p>Amenities: Free Wi-Fi, TV, Queen Bed</p>
      <a href="tours/standard-tour.html" target="_blank">360° Tour</a>
    </div>

    <!-- Deluxe Room -->
    <div class="room-card deluxe">
      <h3>Deluxe Room</h3>
      <img src="src/deluxe.jpg" alt="Deluxe Room">
      <p>Amenities: Wi-Fi, King Bed, Mini Bar, Balcony</p>
      <a href="tours/deluxe-tour.html" target="_blank">360° Tour</a>
    </div>

    <!-- Suite Room -->
    <div class="room-card suite">
      <h3>Suite</h3>
      <img src="src/suite.jpg" alt="Suite">
      <p>Amenities: Jacuzzi, Living Area, King Bed, View</p>
      <a href="tours/suite-tour.html" target="_blank">360° Tour</a>
    </div>
  </div>
</div>
   <script src="../../../asset/Javascript(Chandrima)/Room_types/filter.js"></script>
</body>
</html>
<?php
} else {
    header('Location: ../../Authentication/Login/login.php');
    exit();
}
?> 
