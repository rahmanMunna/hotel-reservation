<?php
if (isset($_POST["submit"])) {
    $roomType = trim($_POST['room-type']);
    $roomNo = trim($_POST['room-no']);
    $bedType = trim($_POST['bed-type']);
    $floor = trim($_POST['floor']);
    $capacity = trim($_POST['capacity']);
    $price = trim($_POST['price-per-night']);
    $availability = trim($_POST['availability']);

    //move to permanent destination
    $src = $_FILES['room-img']['tmp_name'];
    $des = "../../asset/uploaded_file" . $_FILES['room-img']['name'];

    if (move_uploaded_file($src, $des)) {
        echo "Success";
    } else {
        echo "Error!";
    }

    $selectedAmenities = [];

    // Check each checkbox by name
    if (isset($_POST['wifi'])) {
        $selectedAmenities[] = $_POST['wifi'];
    }

    if (isset($_POST['ac'])) {
        $selectedAmenities[] = $_POST['ac'];
    }

    if (isset($_POST['tv'])) {
        $selectedAmenities[] = $_POST['tv'];
    }

    if (isset($_POST['minibar'])) {
        $selectedAmenities[] = $_POST['minibar'];
    }

    if (isset($_POST['room_service'])) {
        $selectedAmenities[] = $_POST['room_service'];
    }

    if (isset($_POST['balcony'])) {
        $selectedAmenities[] = $_POST['balcony'];
    }

    if (isset($_POST['bathroom'])) {
        $selectedAmenities[] = $_POST['bathroom'];
    }

    if (isset($_POST['closet'])) {
        $selectedAmenities[] = $_POST['closet'];
    }


    $valid = true;

    // Check required fields
    if ($roomType === '' || $roomNo === '' || $bedType === '' || $floor === '' || $capacity === '' || $price === '' || $availability === '' || count($selectedAmenities) === 0) {
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
        $available = 0;
        if ($availability == 'available') {
            $available = 1;
        }
        $amenitiesAre = "";
        foreach ($selectedAmenities as $amenities) {
            $amenitiesAre = $amenities . "," . $amenitiesAre;
        }
        $query = "INSERT INTO `rooms`
        (`id`, `room_no`, `room_type`, `bed_type`, `capacity`, `price_per_night`, `is_available`, `floor`, `amenties`) 
        VALUES (null, '$roomNo', '$roomType', '$bedType', '$capacity', '$price', '$available', '$floor', '$amenitiesAre')";

        $location = "127.0.0.1";
        $userName = "root";
        $password = "";
        $dbName = "hotel-reservation";

        // Connect to DB
        $connection = mysqli_connect($location, $userName, $password, $dbName);
        $result = mysqli_query($connection, $query);

        if ($result) {
            echo "Successful";
        } else {
            echo "Failed";
        }

        header('Location: ../../View/successful_alert.php');
    } else {
        echo "Failed";
    }
}
