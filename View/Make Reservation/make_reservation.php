<?php
session_start();
if (isset($_SESSION['status']) || isset($_COOKIE['status'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <title>Admin Dashboard</title>
        <link rel="stylesheet" href="../../asset/Styles/Common Styles/sidebar.css">
        <link rel="stylesheet" href="../../asset/Styles/Common Styles/navbar.css">
        <link rel="stylesheet" href="../../asset/Styles/Make Reservation/make_reservation.css">

    </head>

    <body>
        <?php include('../Common components/navbar.php'); ?>

        <div id="sidebar-main-content">
            <?php include('../Common components/sidebar.php'); ?>
            <div id="reservation-table">
                <form onsubmit="return handleConfirmReservation()"
                    method="post"
                    action="../../controller/php/make_reservation_validation.php">
                    <table>
                        <tbody>
                            <tr>
                                <td>Room ID</td>
                                <td>
                                    <input type="number" name="room-no" id="room-no">
                                </td>
                            </tr>
                            <tr>
                                <td>Room No</td>
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
            </div>

            <!-- display all rooms -->
            <div id="room-info-table">
                <table border=2>
                    <thead>
                        <th>Room Id</th>
                        <th>Room No</th>
                        <th>Room Type</th>
                        <th>Bed Type</th>
                        <th>Capacity</th>
                        <th>Floor</th>
                        <th>Price per Nights</th>
                        <th>Amenities</th>
                    </thead>
                    <tbody id="room-details-tbody"></tbody>
                </table>
            </div>
        </div>

        <script src="../../asset/Javascript/Rooms/displayAllRooms.js"></script>
        <script src="../../asset/Javascript/Make Reservation/validation.js"></script>
    </body>

    </html>

<?php
} else {
    header('Location: ../Authentication/Login/login.php');
    exit();
}
?>