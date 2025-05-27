
<?php
  session_start();
  if (isset($_SESSION['status']) || isset($_COOKIE['status'])){
    
 

$name = $_POST['name'];
$email = $_POST['email'];
$room = $_POST['room'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
?>

<!DOCTYPE html>
<html>
<head><title>Confirmation</title></head>
<link rel="stylesheet" href="../../../asset/Styles(Chandrima)/Room_types/review_system.css"> 
<body>
<h2>Booking Confirmed</h2>
<p>Thank you, <?= htmlspecialchars($name) ?>. You have booked a <?= ucfirst($room) ?> room from <?= $checkin ?> to <?= $checkout ?>.</p>
<p>A confirmation has been sent to <?= htmlspecialchars($email) ?>.</p>
   <script src="../../../asset/Javascript(Chandrima)/Room_types/validate.js"></script>
</body>
</html>
<?php
} else {
    header('Location: ../../Authentication/Login/login.php');
    exit();
}
?> 
