<?php
if (isset($_POST['submit'])) {

    $checkInDate = trim($_POST["check-in-date"]);
    $checkOutDate = trim($_POST["check-out-date"]);
    $roomType = trim($_POST["room-type"]);
    $adults = $_POST["adults"];
    $children = $_POST["children"];

    $isValid = true;

    // Check for empty fields
    if (empty($checkInDate) || empty($checkOutDate) || empty($roomType) || $adults === "" || $children === "") {
        echo "<p style='color:red;'>All fields are required.</p>";
        $isValid = false;
    }

    // Check if adults and children are numeric
    if ($isValid && (!is_numeric($adults) || !is_numeric($children))) {
        echo "<p style='color:red;'>Adults and children must be numeric.</p>";
        $isValid = false;
    }

    // Check if adults and children are non-negative
    if ($isValid && ($adults <= 0 || $children < 0)) {
        echo "<p style='color:red;'>Adults and children cannot be negative.</p>";
        $isValid = false;
    }

    // Check if check-in date is before check-out date
    if ($isValid) {
        $checkIn = strtotime($checkInDate);
        $checkOut = strtotime($checkOutDate);

        if ($checkIn === false || $checkOut === false) {
            echo "<p style='color:red;'>Invalid date format.</p>";
            $isValid = false;
        } elseif ($checkIn >= $checkOut) {
            echo "<p style='color:red;'>Check-in date must be before check-out date.</p>";
            $isValid = false;
        }
    }

    // Final decision
    if ($isValid) {
        header('Location: ../../View/successful_alert.php');
        exit;
    }
}
?>
