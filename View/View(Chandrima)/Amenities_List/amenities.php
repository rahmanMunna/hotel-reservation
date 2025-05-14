<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Facility Explorer</title>

<link rel="stylesheet" href="../../asset/Styles(Chandrima)/Amenities_List/style.css">

</head>
<body>
<div class="navbar">
  <a href="landing.php">Home</a>
  <a href="amenities.php">Amenities</a>
</div>

<div class="container">
  <h2>Explore Our Amenities</h2>

  <label for="amenityFilter">Filter by Type:</label>
  <select id="amenityFilter" onchange="filterAmenities()">
    <option value="all">All</option>
    <option value="pool">Pool</option>
    <option value="spa">Spa</option>
    <option value="gym">Gym</option>
  </select>

  <div class="amenity-list">
    <!-- Pool -->
    <div class="amenity-card pool">
      <h3>Infinity Pool</h3>
      <img src="src/pool.jpg" alt="Pool">
      <p>Open from 6:00 AM to 9:00 PM</p>
      <p>Olympic size, heated, rooftop view</p>
      <span class="availability">Available Now</span>
    </div>

    <!-- Spa -->
    <div class="amenity-card spa">
      <h3>Luxury Spa</h3>
      <img src="src/spa.jpg" alt="Spa">
      <p>Open from 10:00 AM to 8:00 PM</p>
      <p>Full body massage, steam therapy</p>
      <span class="availability">Limited Slots</span>
    </div>

    <!-- Gym -->
    <div class="amenity-card gym">
      <h3>Fitness Center</h3>
      <img src="src/gym.jpg" alt="Gym">
      <p>24/7 Access</p>
      <p>Cardio, Weights, Personal Trainer</p>
      <span class="availability">Open</span>
    </div>
  </div>
</div>
<script src="../../asset/Javascript(Chandrima)/Amenities_List/filter_amenities.js"></script>
</body>
</html>
