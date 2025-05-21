<?php
session_start();
if (isset($_SESSION['status'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Group Block Tool</title>
        <link rel="stylesheet" href="../../asset/Styles/Common Styles/sidebar.css">
        <link rel="stylesheet" href="../../asset/Styles/Common Styles/navbar.css">
        <link rel="stylesheet" href="../../asset/Styles/Group booking/group_block_tool.css">
        <style>
            #sidebar-main-content {
                display: flex;
                width: 100%;
            }

            #main-content {
                width: 70%;
            }
        </style>

    </head>

    <body>

        <?php include('../Common components/navbar.php'); ?>

        <div id="sidebar-main-content">
            <?php include('../Common components/sidebar.php'); ?>

            <!-- Main content -->
            <div id="main-content">
                <div>
                    <h1 id="heading">Room Block Tool</h1>
                </div>
                <main>

                    <form method="post" onsubmit="return handleSubmit()" action="../../controller/php/group_block_tool.php">
                        <div id="guest-info-table">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Group Name</td>
                                        <td>
                                            <input type="text" name="group-name" id="group-name" />
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Group Contact Person</td>
                                        <td>
                                            <hr />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Name</td>
                                        <td>
                                            <input
                                                type="text"
                                                name="name"
                                                id="name"
                                                placeholder="Enter Your Name" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Phone</td>
                                        <td>
                                            <input
                                                type="number"
                                                name="phone"
                                                id="phone"
                                                placeholder="Enter your phone number" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>email</td>
                                        <td>
                                            <input
                                                type="email"
                                                name="email"
                                                id="email"
                                                placeholder="Enter your email" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <hr />
                                        </td>
                                        <td>
                                            <hr />
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Check-in-date</td>
                                        <td>
                                            <input type="date" name="check-in-date" id="check-in-date" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Check-out-date</td>
                                        <td>
                                            <input type="date" name="check-out-date" id="check-out-date" />
                                        </td>
                                    </tr>
                                    <!-- <tr>
                                        <td>Total Nights</td>
                                        <td id="total-nights"></td>
                                    </tr> -->
                                    <tr>
                                        <td>Number of Guest</td>
                                        <td>
                                            <input type="number" name="number-of-guest" id="number-of-guest" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="">Select Payment Options :</label>
                                        </td>
                                        <td>
                                            <select name="select-payment-options" id="select-payment-options">
                                                <option value="">Select a payment Option</option>
                                                <option value="Pay on Arrival">Pay on Arrival</option>
                                                <option value="Prepaid">Prepaid</option>
                                                <option value="Group Pays for All / Individual Guests Pay">
                                                    Group Pays for All
                                                </option>
                                                <option value="Individual Guests Pay">Individual Guests Pay</option>
                                            </select>
                                        </td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br>
                        <input class="btn" name="submit" type="submit" value="Submit" />

                        <!-- <div id="input-table">
                            <table border="2">
                                <thead>
                                    <th>Room Type</th>
                                    <th>Qty Requested</th>
                                    <th>Price Per Night</th>
                                    <th>Available Rooms</th>
                                    <th>Notes</th>
                                    <th>Add/Remove</th>
                                </thead>
                                <tbody id="tbody">
                                </tbody>
                            </table>
                        </div> -->


                        <!-- <button class="btn" onclick="handleAddRow()">Add Row</button> -->

                        <!-- Summary Table -->
                        <!-- <div id="summary-table">
                            <table border="2">
                                <thead>
                                    <th>Total Room Blocked</th>
                                    <th>Total Estimated Cost</th>
                                    <th>Deadline for Individual Reservations (cutoff date)</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td id="total-room-blocked"></td>
                                        <td id="total-estimated-cost"></td>
                                        <td id="cutoff-date"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> -->

                        <!-- <br />
                        <br />
                        <br /> -->


                    </form>
                </main>
            </div>

        </div>


        <!-- <script src="../../asset/Javascript/Group bookings/group_block_tool.js"></script> -->
    </body>

    </html>


<?php
} else {
    echo "<h1 style='color:red'>Unauthorized Access!!</h1>";
}
?>