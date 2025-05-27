<?php
$reservationId = $_GET['reservation-id'];
$cancellationDate = $_GET['cancellation-date'];
$query = "SELECT check_in_date from reservations where reservation_id = '$reservationId' ";


$location = "127.0.0.1";
$userName = "root";
$password = "";
$dbName = "hotel-reservation";

// Connect to DB
$connection = mysqli_connect($location, $userName, $password, $dbName);
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($result);
$dbCheck_in_date = $row['check_in_date'];

$cancellationTimestamp = strtotime($cancellationDate);
$checkOutTimestamp = strtotime($dbCheck_in_date);

if ($cancellationTimestamp < $checkOutTimestamp) {
    $query = "UPDATE `reservations` SET `status` = 'cancelled' WHERE `reservations`.`reservation_id` = '$reservationId' ";
    $result = mysqli_query($connection, $query);
    if ($result) {
        echo "Cancelled";
    } else {
        echo "Failed";
    }
} else {
    $diffInSeconds = $cancellationTimestamp - $checkOutTimestamp;
    $daysDifference = abs(round($diffInSeconds / (60 * 60 * 24)));
    $penalty  = $daysDifference * 1000;
    echo $penalty;
}
