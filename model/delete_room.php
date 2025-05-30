<?php
$roomId = $_POST['id'];

$location = "127.0.0.1";
$userName = "root";
$password = "";
$dbName = "hotel-reservation";

$connection = mysqli_connect("127.0.0.1", "root", "", "hotel-reservation");

// First, delete dependent reservations
mysqli_query($connection, "DELETE FROM reservations WHERE room_id = '$roomId'");

// Then, delete the room
$result = mysqli_query($connection, "DELETE FROM rooms WHERE id = '$roomId'");

if ($result) {
    echo "Deleted successfully";
} else {
    echo "Failed to delete room";
}
