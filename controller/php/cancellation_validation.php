<?php
if (isset($_POST['submit'])) {
    $reservationId = $_POST['reservation-id'];
    $cancellationDate = $_POST['cancellation-date'];
    $reason = $_POST['reason-for-cancellation'];

    $isValid = true;
    if (empty($cancellationDate) || empty($reason)) {
        $isValid = false;
    }

    if ($isValid) {
        header("Location: ../../model/cancellation_process.php?reservation-id=$reservationId&cancellation-date=$cancellationDate");
    } else {
        echo "Fill all the  field";
    }
}
