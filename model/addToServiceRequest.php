<?php
session_start();

// print_r($_POST);
$user_id = $_SESSION['id'];
$service_id = $_POST['service_id'];
$price = $_POST["price"];
$time = $_POST["onlyDate"];


// $user_id = "g-11";
// $service_id = "fd-1";
// $price = 100;
// $time = "2025-02-12";

$room_id = "rm-1";
$status = "pending";

$location = "127.0.0.1";
$userName = "root";
$password = "";
$dbName = "hotel-reservation";

// Connect to DB
$connection = mysqli_connect($location, $userName, $password, $dbName);

function generateRequestId($connection)
{
    $query = "SELECT request_id FROM services_requests ORDER BY id DESC LIMIT 1";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        $last_request_id = $row['request_id'];
        // Explode and increment
        $new_request_id = "req-" . ((int)explode('-', $last_request_id)[1] + 1);
    } else {
        // If no previous ID, start from 1
        $new_request_id = "-1";
    }

    return $new_request_id;
}

$req_id = generateRequestId($connection);


$query = "INSERT INTO `services_requests` 
        (`id`, `user_id`, `room_id`, `service_id`, `request_id`, `request_time`, `status`, `total_price`) 
        VALUES (NULL, '$user_id', 'rm-1', '$service_id', '$req_id', '$time', '$status', '$price')";

$result = mysqli_query($connection, $query);
if ($result) {
    echo "Successfully Inserted";
} else {
    echo "Failed";
}
