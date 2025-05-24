<?php
$location = "127.0.0.1";
$userName = "root";
$password = "";
$dbName = "hotel-reservation";

//connect to db
$connection =  mysqli_connect($location, $userName, $password, $dbName); // returns an object

$query = "SELECT req_id,room_id,user_id,request_time,status,quantity,price_per_service,total_price from services_requests";

$result = mysqli_query($connection, $query);

// $row = mysqli_fetch_assoc($result);
$data = [];
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}
// print_r($data);

//parse to json
header('Content-Type: application/json');
echo json_encode($data);

