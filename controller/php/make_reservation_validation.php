<?php
if (isset($_POST["submit"])) {
    // Receiving and trimming form data
    $roomId = $_POST["room-id"];
    $roomNo = $_POST["room-no"];
    $guestName = trim($_POST['guest-name']);
    // $phone = trim($_POST['phone']);
    // $email = trim($_POST['email']);
    $bookingDate = trim($_POST['booking-date']);
    $checkInDate = trim($_POST['check-in-date']);
    $checkOutDate = trim($_POST['check-out-date']);
    $adults = trim($_POST['adults']);
    $children = trim($_POST['children']);



    session_start();
    $user_id = $_SESSION['id'];

    // $formData = [$roomId, $guestName, $phone, $email, $bookingDate, $checkInDate, $checkOutDate, $adults, $children];
    $formData = [$roomId, $guestName, $bookingDate, $checkInDate, $checkOutDate, $adults, $children];
    // print_r($formData);

    // Validate: check for empty fields
    $hasEmpty = false;
    foreach ($formData as $field) {
        if (strlen($field) === 0) {
            $hasEmpty = true;
            break;
        }
    }

    // Validate email
    // $emailValid = false;
    // if (str_contains($email, '@')) {
    //     list($localPart, $domain) = explode('@', $email, 2);
    //     if (
    //         $domain === "gmail.com" &&
    //         ctype_lower($localPart) &&
    //         !is_numeric($localPart[0]) &&
    //         !str_contains($localPart, ' ')
    //     ) {
    //         $emailValid = true;
    //     }
    // }

    // Validate phone
    // $phoneValid = (strlen($phone) === 11);

    // Validate guests
    $guestsValid = (is_numeric($adults) && $adults > 0 && is_numeric($children) && $children >= 0);

    // Validate dates

    $datesValid = strtotime($checkInDate) < strtotime($checkOutDate);

    function generateReservationId($connection)
    {
        $query = "SELECT reservation_id FROM reservations ORDER BY id DESC LIMIT 1";
        $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_assoc($result);

        //check if the data retrieved successfully
        if ($row) {
            $last_reservation_id = $row['reservation_id'];
            // Explode and increment
            $new_reservation_id = "res-" . ((int)explode('-', $last_reservation_id)[1] + 1);
        }
        else{
            $new_reservation_id = "res-1";
        }
        return $new_reservation_id;
    }

    function insertToDb($user_id, $roomId, $roomNo, $guestName, $adults, $children, $bookingDate, $checkInDate, $checkOutDate)
    {
        $location = "127.0.0.1";
        $userName = "root";
        $password = "";
        $dbName = "hotel-reservation";

        // Connect to DB
        $connection = mysqli_connect($location, $userName, $password, $dbName);

        $reservation_id = generateReservationId($connection);
        $number_of_guest = (int)$adults + (int)$children;

        $query = "INSERT INTO 
                    `reservations` (`id`, `reservation_id`, `user_id`, `room_id`, `booking_type`, `guest_name`, `room_no`, `num_of_guest`, `status`, `booking_date`, `check_in_date`, `check_out_date`,`penalty`,`refund`) 
                    VALUES (NULL, '$reservation_id', '$user_id', '$roomId', 'Single', '$guestName', '$roomNo', '$number_of_guest', 'booked', '$bookingDate', '$checkInDate', '$checkOutDate','0','0');";


        $result = mysqli_query($connection, $query);
        if ($result) {
            header("Location: ../../View/successful_alert.php");
        } else {
            echo "Failed to insert";
        }
    }

    // Only proceed if all validations pass
    if (
        !$hasEmpty &&
        // $emailValid &&
        // $phoneValid &&
        $guestsValid &&
        $datesValid
    ) {
        insertToDb($user_id, $roomId, $roomNo, $guestName, $adults, $children, $bookingDate, $checkInDate, $checkOutDate);
    } else {
        echo "fill the data";
    }
}
