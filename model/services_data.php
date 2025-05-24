<?php
$location = "127.0.0.1";
$userName = "root";
$password = "";
$dbName = "hotel-reservation";

// Connect to DB
$connection = mysqli_connect($location, $userName, $password, $dbName);

$query = "SELECT * FROM `services`";
$result = mysqli_query($connection, $query);

$data = [];
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

// Group by category
$grouped = [];
foreach ($data as $service) {
    $category = $service['category'];
    if (!isset($grouped[$category])) {
        $grouped[$category] = [];
    }

    $grouped[$category][] = [
        'id' => $service['service_id'],
        'name' => $service['service_name'],
        'description' => $service['description'],
        'price' => (float)$service['price'],
    ];
}

// Format to servicesData array
$servicesData = [];
foreach ($grouped as $category => $items) {
    $servicesData[] = [
        'category' => $category,
        'items' => $items,
    ];
}

// print_r($servicesData);

echo json_encode($servicesData);


