<?php
session_start();
if ($_SESSION['status'] || $_COOKIE['status']) {

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Guest Dashboard</title>
        <link rel="stylesheet" href="../../asset/Styles/Common Styles/sidebar.css">
        <link rel="stylesheet" href="../../asset/Styles/Common Styles/navbar.css">
        <link rel="stylesheet" href="../../asset/Styles/My Bookings/show_bookings_cards.css">
    </head>

    <body>
        <?php include('../Common components/navbar.php'); ?>

        <div onclick="" id="sidebar-main-content">
            <?php include('../Common components/sidebar_guest.php'); ?>
            <div id="bookings-div">
                
            </div>

        </div>

            <script src="../../asset/Javascript/My Bookings/displayAllBookings.js"></script>
            <script src="../../asset/Javascript/My Bookings/reservation_data.js"></script>
    </body>

    </html>

<?php
} else {
    header("Location: ../Authentication/Login/login.php");
}
?>