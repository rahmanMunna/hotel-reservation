<?php
if (isset($_POST["submit"])) {
    // Receiving and trimming form data
    $roomId = $_POST["room-id"];
    $guestName = trim($_POST['guest-name']);
    $phone = trim($_POST['phone']);
    $email = trim($_POST['email']);
    $bookingDate = trim($_POST['booking-date']);
    $checkInDate = trim($_POST['check-in-date']);
    $checkOutDate = trim($_POST['check-out-date']);
    $adults = trim($_POST['adults']);
    $children = trim($_POST['children']);

    $formData = [$roomId, $guestName, $phone, $email, $bookingDate, $checkInDate, $checkOutDate, $adults, $children];
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
    $emailValid = false;
    if (str_contains($email, '@')) {
        list($localPart, $domain) = explode('@', $email, 2);
        if (
            $domain === "gmail.com" &&
            ctype_lower($localPart) &&
            !is_numeric($localPart[0]) &&
            !str_contains($localPart, ' ')
        ) {
            $emailValid = true;
        }
    }

    // Validate phone
    $phoneValid = (strlen($phone) === 11);

    // Validate guests
    $guestsValid = (is_numeric($adults) && $adults > 0 && is_numeric($children) && $children >= 0);

    // Validate dates

    $datesValid = strtotime($checkInDate) < strtotime($checkOutDate);

    // Only proceed if all validations pass
    if (
        !$hasEmpty &&
        $emailValid &&
        $phoneValid &&
        $guestsValid &&
        $datesValid
    ) {
        header("Location: ../../View/successful_alert.php");
    }
    else{
        echo "Failed";
    }
}
