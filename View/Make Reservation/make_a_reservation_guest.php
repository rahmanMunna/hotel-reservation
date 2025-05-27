<?php
session_start();
if ($_SESSION['status'] || (isset($_COOKIE['status']) && $_COOKIE['status'])) {

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Guest Dashboard</title>
        <link rel="stylesheet" href="../../asset/Styles/Common Styles/sidebar.css">
        <link rel="stylesheet" href="../../asset/Styles/Common Styles/navbar.css">
        <link rel="stylesheet" href="../../asset/Styles/Make Reservation/make_reservation.css">

        <style>
            #sidebar-main-content {
                width: 100%;
                display: flex;
                gap: 10px;
                /* border: 1px solid; */
            }

            #main-content {
                width: 40%;
            }

            #check-in-out-date {
                display: flex;
                gap: 10px;
            }

            #error-msg {
                text-align: center;
                font-size: 22px;
                /* background-color: wheat; */
                padding: 5px;
                /* border: 1px solid; */
            }

            #room-cards {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                width: 40%;
                gap: 10px;
                height: 50rem;


            }

            .card {
                border: 1px solid;
                padding: 10px;

            }
        </style>
    </head>

    <body>
        <?php include('../Common components/navbar.php'); ?>

        <div onclick="" id="sidebar-main-content">
            <?php include('../Common components/sidebar_guest.php'); ?>
            <div id="main-content">

                <form onsubmit="return handleConfirmReservation()"
                    method="post"
                    action="../../controller/php/make_reservation_validation.php">
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
                                    <input onchange="handleCheckInDate()" type="date" name="check-in-date" id="check-in-date">
                                </td>
                            </tr>
                            <tr>
                                <td>Check-out-Date</td>
                                <td>
                                    <input onchange="handleCheckOutDate()" type="date" name="check-out-date" id="check-out-date">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3>Nights :
                                </td>
                                <td>
                                    <h3><span id="night-count">0</span></h3>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Room ID:
                                </td>
                                <td>
                                    <input readonly type="text" name="room-id" id="room-id">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Room NO
                                </td>
                                <td>
                                    <input readonly type="text"  name="room-no" id="room-no">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p id="error-msg"></p>
                    <input id="btn" type="submit" name="submit" value="Confirm Reservation">
                </form>
               
            </div>

            <!-- display Available Rooms -->
            <div id="room-cards">

            </div>

        </div>



        <script src="../../asset/Javascript/Make Reservation/displayAvailableRooms.js"></script>
        <script src="../../asset/Javascript/Make Reservation/booking_operation.js"></script>
        <script src="../../asset/Javascript/Make Reservation/validation_confirm_booking.js"></script>

    </body>

    </html>

<?php
} else {
    header("Location: ../Authentication/Login/login.php");
}
?>