<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Book a Room</title>
  <link rel="stylesheet" href="style.css">
  <script src="validate.js" defer></script>
</head>
<body>
<div class="navbar">
  <a href="landing.php">Home</a>
  <a href="rooms.php">Rooms</a>
  <a href="booking.php">Book</a>
</div>

<div class="container">
  <h2>Room Booking</h2>
  <form name="bookingForm" onsubmit="return validateBookingForm();" method="POST" action="confirm.php">
    <label>Name:</label>
    <input type="text" name="name">

    <label>Email:</label>
    <input type="email" name="email">

    <label>Room Type:</label>
    <select name="room">
      <option value="">Select</option>
      <option value="standard">Standard</option>
      <option value="deluxe">Deluxe</option>
      <option value="suite">Suite</option>
    </select>

    <label>Check-in Date:</label>
    <input type="date" name="checkin">

    <label>Check-out Date:</label>
    <input type="date" name="checkout">

    <button type="submit">Confirm Booking</button>
  </form>
</div>
</body>
</html>
