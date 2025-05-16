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
        <style>
            #sidebar-main-content {
                display: flex;
                border: 1px solid;
            }
            #reservation-table{
                width: 30%;
                border: 1px solid;
            }
            #rooms-cards{
                margin-left: auto;
                width: 50%;
                display: grid;
                grid-template-columns: repeat(2,1fr);
                gap: 10px;
            }
            .room-card{
                border: 1px solid;
                /* height: 30vh; */
            }
        </style>

    </head>

    <body>
        <?php include('../Common components/navbar.php'); ?>

        <div id="sidebar-main-content">
            <?php include('../Common components/sidebar.php'); ?>
            <div id="reservation-table">
                <form action="">
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
                                    <select name="" id="">
                                        <option value="">Select Bed Type</option>
                                        <option value="Single">Single</option>
                                        <option value="Double">Double</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Number of Guest : </td>
                                <td>
                                    Adults : <input type="number" name="" id="children"> <br>
                                    Children : <input type="number" name="" id="Adult">
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
                    <input type="submit" value="Confirm Reservation">
                </form>
            </div>

            <!-- display all rooms -->
            <div id="rooms-cards">
            </div>
        </div>

        <script src="../../asset/Javascript/Rooms/displayAllRooms.js"></script>
    </body>

    </html>

<?php
} else {
    header('Location: ../Authentication/Login/login.php');
    exit();
}
?>