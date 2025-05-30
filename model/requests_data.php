<?php

session_start();
$user_id = $_SESSION['id'];
$location = "127.0.0.1";
$userName = "root";
$password = "";
$dbName = "hotel-reservation";



// Connect to DB
$connection = mysqli_connect($location, $userName, $password, $dbName);

$query = "SELECT *FROM services_requests where user_id = '$user_id'";
$result = mysqli_query($connection, $query);

// Prepare data array
$data = [];
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

// Return JSON
header('Content-Type: application/json');
echo json_encode($data);
