<?php
session_start();
if (isset($_SESSION['status'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Terms Display</title>
        <link rel="stylesheet" href="../../asset/Styles/Common Styles/sidebar.css">
        <link rel="stylesheet" href="../../asset/Styles/Cancellation Policy/termsDisplay.css">  
        <link rel="stylesheet" href="../../asset/Styles/Common Styles/navbar.css">
        <style>
            #sidebar-main-content{
                display: flex;
            }
        </style>

    </head>
    <?php include('../Common components/navbar.php'); ?>

    <body>
        <div id="sidebar-main-content">
            <?php include('../Common components//sidebar.php'); ?>
            <main>
                <!-- Booking Details -->
                <div>
                    <h2>Guest information</h2>
                    <div id="booking-details">
                        <h3>Guest Name : <span id="guest-name">XYZ</span> </h3>
                        <h3>Reservation Id : <span id="reservation-id">#8768879</span> </h3>
                        <h3>Room Type : <span id="room-type">Deluxe Suite</span> </h3>
                        <!-- <h3>Rate Type : <span id="">"Non-Refundable"</span> </h3> -->
                        <h3>Check-in Date : <span id="check-in-date">June 15,2024</span> </h3>
                        <h3>Booking Date : <span id="bookingDate">April 29,2024</span> </h3>
                    </div>
                </div>
                <p style="border: 1px solid;"></p>
                <!-- Cancellation Rules -->
                <div id="cancellation-rules">
                    <h2>Cancellation Rules (Terms and Condition)</h2>
                    <table border="2">
                        <thead>
                            <tr>
                                <th>Rate Type</th>
                                <th>Cancellation Rule</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Flexible Type</td>
                                <td>
                                    Free cancellation until 3 days before check-in. Then 1 night charge.
                                </td>
                            </tr>
                            <td>Non-Refundable</td>
                            <td>
                                No refund at any time after booking.
                            </td>
                            </tr>
                            <td>Early Bird Special</td>
                            <td>
                                50% refund if cancelled 30 days before stay; otherwise non-refundable.
                            </td>
                            </tr>
                        </tbody>
                    </table>
                    <p style="text-align: center;border: 1px solid;">
                    <h3 style=" text-align: center;color: rgb(231, 28, 28);">"Refunds will be processed within 7 business days."
                    </h3>
                    </p>

                </div>
                <p id="btns">
                    <a href="./calculate _penalty.php">
                        <button>Calculate Penalty</button>
                    </a>
                    <a href="./modification_flow.php">
                        <button>Modify Booking</button>
                    </a>
                </p>
            </main>

        </div>

        <script src="../../asset/Javascript/Cancellation_policy/termDisplay.js"></script>
    </body>

    </html>


<?php
} else {
    echo "<h1 style='color:red'>Unauthorized Access!!</h1>";
}
?>