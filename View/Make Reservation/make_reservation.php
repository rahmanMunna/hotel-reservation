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
                <form onsubmit="return handleConfirmReservation()" action="">
                    <table>
                        <tbody>
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
                                <td>Room Type</td>
                                <td>
                                    <select name="" id="room-type">
                                        <option value="">Select a room type</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Bed Type</td>
                                <td>
                                    <select name="" id="bed-type">
                                        <option value="">Select Bed Type</option>
                                        <option value="Single">Single</option>
                                        <option value="Double">Double</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Number of Guest : </td>
                                <td>
                                    Adults : <input type="number" name="" id="adults">
                                    Children : <input type="number" name="" id="children">
                                </td>
                            </tr>
                            <tr>
                                <td>Booking Date</td>
                                <td>
                                    <input type="date" name="" id="booking-date">
                                </td>
                            </tr>
                            <tr>
                                <td>Check-in-Date</td>
                                <td>
                                    <input type="date" name="" id="check-in-date">
                                </td>
                            </tr>
                            <tr>
                                <td>Check-out-Date</td>
                                <td>
                                    <input type="date" name="" id="check-out-date">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p id="error-msg"></p>
                    <input id="btn" type="submit" value="Confirm Reservation">
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
        <script src="../../asset/Javascript/Rooms/validation.js"></script>
    </body>

    </html>

<?php
} else {
    header('Location: ../Authentication/Login/login.php');
    exit();
}
?>