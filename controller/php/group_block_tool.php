<?php

if (isset($_POST['submit'])) {

    $groupName = $_POST['group-name'];
    $groupContactName = $_POST['name'];
    $groupContactPhone = $_POST['phone'];
    $groupContactEmail = $_POST['email'];

    // Booking Information
    $checkInDate = $_POST['check-in-date'];
    $checkOutDate = $_POST['check-out-date'];
    $numberOfGuest = $_POST['number-of-guest'];
    $paymentOption = $_POST['select-payment-options'];

    $isValid = true;

    function isAllLowerCase($text)
    {
        return strtolower($text) === $text;
    }

    function isFirstCharNumber($text)
    {
        return is_numeric($text[0]);
    }

    if (
        $groupName === '' ||
        $groupContactName === '' ||
        $groupContactPhone === '' ||
        $groupContactEmail === '' ||
        $checkInDate === '' ||
        $checkOutDate === '' ||
        $paymentOption === '' ||
        $numberOfGuest === '' ||
        !is_numeric($numberOfGuest) ||
        $numberOfGuest <= 0
    ) {
        $isValid = false;
    }

    //email validation
    if ($isValid) {
        if (!str_contains($groupContactEmail, '@')) {
            $isValid = false;
        } else {
            [$localPart, $domain] = explode('@', $groupContactEmail);
            if (
                $domain !== 'gmail.com' ||
                !isAllLowerCase($localPart) ||
                isFirstCharNumber($localPart) ||
                str_contains($localPart, ' ')
            ) {
                $isValid = false;
            }
        }
    }



    //Check-in date must be before check-out date
    if ($isValid) {
        $checkIn = strtotime($checkInDate);
        $checkOut = strtotime($checkOutDate);
        if (!$checkIn || !$checkOut || $checkIn >= $checkOut) {
            $isValid = false;
        }
    }

    // Phone must be exactly 11 characters
    if ($isValid && strlen($groupContactPhone) != 11) {
        $isValid = false;
    }


    //decision
    if ($isValid) {
        header("Location: ../../View/successful_alert.php");
    } else {
        echo "Invalid";
    }
}
