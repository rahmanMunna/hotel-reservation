  <?php session_start();
  if (isset($_SESSION['status']) || isset($_COOKIE['status'])){
 
?>
<!DOCTYPE html>
<html>
<head>
<title>Book a Room</title>
<link rel="stylesheet" href="../../../asset/Styles(Chandrima)/Room_types/review_system.css"> 
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
  <script src="../../../asset/Javascript(Chandrima)/Room_types/validate.js"></script>
</body>
</html>
<?php
} else {
    header('Location: ../../Authentication/Login/login.php');
    exit();
}
?>  
