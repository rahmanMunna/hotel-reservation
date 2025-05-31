<?php
if (isset($_POST['submit'])) {

    $eventName = trim($_POST["event-name"]);
    $eventDate = trim($_POST["event-date"]);
    $eventTimeFrom = trim($_POST["event-time-from"]);
    $eventTimeTo = trim($_POST["event-time-to"]);
    $venue = trim($_POST["venue"]);
    $guests = trim($_POST["guests"]);
    $setupType = trim($_POST["setup-type"]);


    $isValid = true;

    if (
        $eventName === '' ||
        $eventDate === '' ||
        $eventTimeFrom === '' ||
        $eventTimeTo === '' ||
        $venue === '' ||
        $setupType === '' ||
        $guests === '' ||
        $guests <=0
    ) {
        $isValid = false;
    }

    if ($isValid) {
        header("Location: ../../View/successful_alert.php");
    } else {
        echo "Failed";
    }
}
