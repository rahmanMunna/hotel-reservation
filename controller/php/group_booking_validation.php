<?php

if (isset($_POST['submit'])) {

    function isAllLowerCase($text)
    {
        return strtolower($text) === $text;
    }

    function isFirstCharNumber($text)
    {
        return is_numeric($text[0]);
    }

    $groupName = trim($_POST["group-name"]);
    $checkInDate = trim($_POST["check-in-date"]);
    $checkOutDate = trim($_POST["check-out-date"]);
    $numberOfRooms = trim($_POST["number-of-rooms"]);
    $numberOfAdults = trim($_POST["number-of-adults"]);
    $numberOfChildren = trim($_POST["number-of-children"]);
    $email = trim($_POST["email"]);
    $phone = trim($_POST["phone"]);

    $isValid = true;

    if (
        empty($groupName) || empty($checkInDate) || empty($checkOutDate) || empty($numberOfRooms) ||
        empty($numberOfAdults) || empty($numberOfChildren) || empty($email) || empty($phone)
    ) {
        $isValid = false;
    }

    //email validation
    if ($isValid) {
        if (!str_contains($email, '@')) {
            $isValid = false;
        } else {
            [$localPart, $domain] = explode('@', $email);
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

    //Number of adults must be > 0
    if ($isValid && ($numberOfChildren < 0 || $numberOfAdults <= 0)) {
        $isValid = false;
    }

    // Phone must be exactly 11 characters
    if ($isValid && strlen($phone) != 11) {
        $isValid = false;
    }

    //Check-in date must be before check-out date
    if ($isValid) {
        $checkInTimestamp = strtotime($checkInDate);
        $checkOutTimestamp = strtotime($checkOutDate);
        if (!$checkInTimestamp || !$checkOutTimestamp || $checkInTimestamp >= $checkOutTimestamp) {
            $isValid = false;
        }
    }

    //decision

    if ($isValid) {
        header('Location: ../../View/successful_alert.php');
    } else {
        echo "Failed";
    }
}
