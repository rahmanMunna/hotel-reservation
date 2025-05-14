<?php
$name = $_POST['name'];
$email = $_POST['email'];
$room = $_POST['room'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
?>

<!DOCTYPE html>
<html>
<head><title>Confirmation</title></head>
<body>
<h2>Booking Confirmed</h2>
<p>Thank you, <?= htmlspecialchars($name) ?>. You have booked a <?= ucfirst($room) ?> room from <?= $checkin ?> to <?= $checkout ?>.</p>
<p>A confirmation has been sent to <?= htmlspecialchars($email) ?>.</p>
</body>
</html>
