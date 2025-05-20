<?php
if (isset($_POST["submit"])) {
    $roomType = trim($_POST['room-type'] ?? '');
    $roomNo = trim($_POST['room-no'] ?? '');
    $bedType = trim($_POST['bed-type'] ?? '');
    $floor = trim($_POST['floor'] ?? '');
    $capacity = trim($_POST['capacity'] ?? '');
    $price = trim($_POST['price-per-night'] ?? '');
    $availability = trim($_POST['availability'] ?? '');
    $amenities = $_POST['amenities'] ?? [];

    $valid = true;

    // Check required fields
    if ($roomType === '' || $roomNo === '' || $bedType === '' || $floor === '' || $capacity === '' || $price === '' || $availability === '' || empty($amenities)) {
        $valid = false;
    }

    // Check numeric values positive
    if (!is_numeric($floor) || (float)$floor <= 0) {
        $valid = false;
    }
    if (!is_numeric($capacity) || (int)$capacity <= 0) {
        $valid = false;
    }
    if (!is_numeric($price) || (float)$price <= 0) {
        $valid = false;
    }

    if ($valid) {
        echo "Success";
    } else {
        echo "Failed";
        // Validation failed — handle accordingly (redirect, ignore, etc.)
    }
}
?>
