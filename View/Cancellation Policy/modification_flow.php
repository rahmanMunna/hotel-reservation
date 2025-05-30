<?php
session_start();
if (isset($_SESSION['status']) || isset($_COOKIE['status'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Modification</title>
        <link rel="stylesheet" href="../../asset/Styles/Cancellation Policy/modification_flow.css">
        <link rel="stylesheet" href="../../asset/Styles/Common Styles/sidebar.css">
        <link rel="stylesheet" href="../../asset/Styles/Common Styles/navbar.css">
        <!-- If we use module as type..In a module, handleIncrement is not global, so the HTML cannot access it.-->
        <style>
            #sidebar-main-content {
                display: flex;
            }
        </style>


    </head>

    <body>
        <?php include('../Common components/navbar.php'); ?>
        <div id="sidebar-main-content">
            <?php include('../Common components/sidebar.php'); ?>
            <main>
                <div id="guest-information">
                    <h3 class="guest-info-h2">Guest Name : <span>XYZ</span> </h3>
                    <h3 class="guest-info-h2">Booking Id : <span>#997970</span></h3>
                    <h3 class="guest-info-h2">Original Check-in Date : <span>Jun 2,2020</span></h3>
                    <h3 class="guest-info-h2">Original Check-out Date : <span>Jun 4,2020</span></h3>
                    <h3 class="guest-info-h2">Current Room Type : <span>Deluxe Suite</span></h3>
                    <h3 class="guest-info-h2">Number Of Guest : <span>2 Adults</span></h3>
                    <h3 class="guest-info-h2">Current Total : <span id="current-total">5000 TK</span></h3>
                    <h3 class="guest-info-h2">Current Cancellation Policy : <span>Flexible Rate</span></h3>
                </div>
                <!-- Modify -->
                <div>
                    <h2>Modify Changes</h2>
                    <table id="modify-changes">
                        <form method="post" onsubmit="return handleSubmit()" action="../../controller/php/modification_bookings_validation.php">
                            <tbody id="modify-changes-tbody">
                                <tr>
                                    <td>New Check-in Date</td>
                                    <td><input type="date" class="date" name="check-in-date" id="check-in-date"></td>
                                </tr>
                                <tr>
                                    <td>New Check-out Date</td>
                                    <td><input type="date" class="date" name="check-out-date" id="check-out-date"></td>
                                </tr>
                                <tr>
                                    <td>Room Type</td>
                                    <td>
                                        <select id="room-type" name="room-type" id="">
                                            <option value="">Select Room Type</option>
                                            <option value="Standard Room-1000">Standard Room-1000(per night)</option>
                                            <option value="Deluxe Suite-2000">Deluxe Suite-2000(per night)</option>
                                            <option value="Executive Suite-3000">Executive Suite-3000(per night)</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Guest Count Selector</td>
                                    <td>
                                        <!-- <input onclick="handleIncrement('adults')" type="button" value="+">
                                        <input onclick="handleDecrement('adults')" type="button" value="-"> -->
                                        <!-- <input type="number" disabled>Adults (<span name="adults" id="adults">0</span>) -->
                                         <input type="number" name="adults" id="adults">

                                        <!-- <input onclick="handleIncrement('children')" type="button" value="+">
                                        <input onclick="handleDecrement('children')" type="button" value="-"> Children -->
                                        <!-- (<span name="children" id="children">0</span>) -->
                                         <input type="number" name="children" id="children">
                                    </td>
                                </tr>

                            </tbody>
                            <tfoot>
                                <tr>

                                    <td>
                                        <!-- <input class="btn" type="button" value="Cancel Changes" name="" id=""> -->
                                    </td>
                                    <td>
                                        <input class="btn" type="submit" value="Save & Modify Booking" name="submit" id="">
                                    </td>
                                </tr>
                            </tfoot>
                        </form>
                    </table>
                </div>
                <!-- Pricing update -->
                <div>
                    <h2>Pricing Summary</h2>
                    <table id="pricing-summary" border="3">
                        <thead>
                            <tr>
                                <th>Item</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    Original Price
                                </td>
                                <td id="original-price">
                                    1000 TK
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    New Price
                                </td>
                                <td id="new-price">
                                    0 Tk
                                </td>
                            </tr>
                            <tr>'
                                <td>
                                    More to pay
                                </td>
                                <td id="more-to-pay">
                                    +0 Tk
                                </td>
                            </tr>
                            <tr>
                                <td>Refund</td>
                                <td id="refund">-0Tk</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p>
                <h3>"This rate becomes Non-Refundable after modification."</h3>
                </p>
            </main>

        </div>

        <script type="" src="../../asset/Javascript/Cancellation_policy/modification_flow.js"></script>

    </body>

    </html>

<?php
} else {
    header('Location: ../Authentication/Login/login.php');
}
?>