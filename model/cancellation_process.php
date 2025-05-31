<?php
$reservationId = $_GET['reservation-id'];
$cancellationDate = $_GET['cancellation-date'];

$location = "127.0.0.1";
$userName = "root";
$password = "";
$dbName = "hotel-reservation";

// Connect to DB
$connection = mysqli_connect($location, $userName, $password, $dbName);
$query = "SELECT check_in_date from reservations where reservation_id = '$reservationId' ";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($result);
$dbCheck_in_date = $row['check_in_date'];

$cancellationTime = strtotime($cancellationDate);
$checkOutTime = strtotime($dbCheck_in_date);

if ($cancellationTime < $checkOutTime) {
    $query = "UPDATE `reservations` 
          SET `status` = 'cancelled', `refund` = '100' 
          WHEE `reservation_id` = '$reservationId'";

    $result = mysqli_query($connection, $query);
    if ($result) {
        echo "Cancelled";
    } else {
        echo "Failed";
    }
} else {
    $diffInSeconds = $cancellationTime - $checkOutTime;
    $daysDifference = abs(round($diffInSeconds / (60 * 60 * 24)));
    $penalty  = $daysDifference * 1000;

    $query = "UPDATE `reservations` 
          SET `status` = 'cancelled', `penalty` = '$penalty' 
          WHERE `reservation_id` = '$reservationId'";

    $result = mysqli_query($connection, $query);
    if ($result) {
        echo "Cancelled";
    } else {
        echo "Failed";
    }
    // echo $penalty;
}
