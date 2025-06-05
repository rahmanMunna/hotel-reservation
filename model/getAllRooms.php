<?php

$location = "127.0.0.1";
$userName = "root";
$password = "";
$dbName = "hotel-reservation";

//connect to db
$connection =  mysqli_connect($location, $userName, $password, $dbName); // returns an object

$query = "SELECT * FROM `rooms`";

$result = mysqli_query($connection, $query);

// $row = mysqli_fetch_assoc($result);
$data = [];
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}
// print_r($data);


echo json_encode($data);

