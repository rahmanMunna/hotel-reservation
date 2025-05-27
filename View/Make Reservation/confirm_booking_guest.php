<?php
session_start();
if (isset($_SESSION['status']) || isset($_COOKIE['status'])) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $roomId = $_POST['roomId'];
        $check_in = $_POST['check_in'];
        $check_out = $_POST['check_out'];
    }
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <title>Confirm Booking page</title>
        <link rel="stylesheet" href="../../asset/Styles/Common Styles/sidebar.css">
        <link rel="stylesheet" href="../../asset/Styles/Common Styles/navbar.css">
        <link rel="stylesheet" href="../../asset/Styles/Make Reservation/make_reservation.css">

    </head>

    <body>
        <?php include('../Common components/navbar.php'); ?>

        <div id="sidebar-main-content">
            <?php include('../Common components/sidebar.php'); ?>
            <form onsubmit="return handleConfirmReservation()"
                method="post"
                action="../../controller/php/make_reservation_validation.php">
                <table>
                    <tbody>
                        <tr>
                            <td>Room ID</td>
                            <td>
                                <input type="text" name="room-id" id="room-id">
                            </td>
                        </tr>
                        <tr>
                            <td>Guest Name</td>
                            <td>
                                <input type="text" name="guest-name" id="guest-name">
                            </td>
                        </tr>
                        <tr>
                            <td>Phone</td>
                            <td>
                                <input type="number" name="phone" id="phone">
                            </td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>
                                <input type="email" name="email" id="email">
                            </td>
                        </tr>

                        <tr>
                            <td>Number of Guest : </td>
                            <td>
                                Adults : <input type="number" name="adults" id="adults">
                                Children : <input type="number" name="children" id="children">
                            </td>
                        </tr>
                        <tr>
                            <td>Booking Date</td>
                            <td>
                                <input type="date" name="booking-date" id="booking-date">
                            </td>
                        </tr>
                        <tr>
                            <td>Check-in-Date</td>
                            <td>
                                <input type="date" name="check-in-date" id="check-in-date">
                            </td>
                        </tr>
                        <tr>
                            <td>Check-out-Date</td>
                            <td>
                                <input type="date" name="check-out-date" id="check-out-date">
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p id="error-msg"></p>
                <input id="btn" type="submit" name="submit" value="Confirm Reservation">
            </form>

            <!-- display all rooms -->
        </div>


    </body>

    </html>

<?php
} else {
    header('Location: ../Authentication/Login/login.php');
    exit();
}
?>