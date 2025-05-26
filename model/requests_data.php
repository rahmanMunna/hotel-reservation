<?php
$location = "127.0.0.1";
$userName = "root";
$password = "";
$dbName = "hotel-reservation";

// Connect to DB
$connection = mysqli_connect($location, $userName, $password, $dbName);

$query = "SELECT req_id, room_id, user_id, request_time, status, quantity, price_per_service, total_price FROM services_requests";
$result = mysqli_query($connection, $query);

// Prepare data array
$data = [];
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

// Return JSON
header('Content-Type: application/json');
echo json_encode($data);
?>
