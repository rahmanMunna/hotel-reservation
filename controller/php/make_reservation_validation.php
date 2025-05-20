<?php
if (isset($_POST["submit"])) {
    // Receiving and trimming form data
    $guestName = trim($_POST['guest-name'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $roomType = trim($_POST['room-type'] ?? '');
    $bedType = trim($_POST['bed-type'] ?? '');
    $bookingDate = trim($_POST['booking-date'] ?? '');
    $checkInDate = trim($_POST['check-in-date'] ?? '');
    $checkOutDate = trim($_POST['check-out-date'] ?? '');
    $adults = trim($_POST['adults'] ?? '');
    $children = trim($_POST['children'] ?? '');

    // Validate: check for empty fields
    $formData = [$guestName, $phone, $email, $roomType, $bedType, $bookingDate, $checkInDate, $checkOutDate, $adults, $children];
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
    $phoneValid = (strlen($phone) === 11 && ctype_digit($phone));

    // Validate guests
    $guestsValid = (is_numeric($adults) && $adults > 0 && is_numeric($children) && $children >= 0);

    // Validate dates
    $checkIn = strtotime($checkInDate);
    $checkOut = strtotime($checkOutDate);
    $today = strtotime(date('Y-m-d'));
    $datesValid = ($checkIn >= $today && $checkOut > $checkIn);

    // Only proceed if all validations pass
    if (
        !$hasEmpty &&
        $emailValid &&
        $phoneValid &&
        $guestsValid &&
        $datesValid
    ) {
        echo "Success";
    }
}
