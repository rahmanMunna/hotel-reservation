<?php
session_start();
if (isset($_SESSION['status'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Group Manager</title>
        <link rel="stylesheet" href="../../asset/Styles/Common Styles/sidebar.css">
        <link rel="stylesheet" href="../../asset/Styles/Common Styles/navbar.css">
        <link rel="stylesheet" href="../../asset/Styles/Group booking/group_manager.css">

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
                <div id="group-info">
                    <table id="input-table">
                        <form method="post" onsubmit="return handleSubmit()" action="../../controller/php/group_booking_validation.php">
                            <tbody>
                                <tr>
                                    <td>Group name</td>
                                    <td>
                                        <input type="text" name="group-name" id="group-name">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Check-in Date</td>
                                    <td>
                                        <input type="date" name="check-in-date" id="check-in-date">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Check-out Date</td>
                                    <td>
                                        <input type="date" name="check-out-date" id="check-out-date">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Number Of Rooms</td>
                                    <td>
                                        <select name="number-of-rooms" id="number-of-rooms">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Number Of Guest</td>
                                    <td>
                                        <input type="number" placeholder="number of adults" name="number-of-adults" id="number-of-adults">
                                        <input type="number" placeholder="number of children" name="number-of-children" id="number-of-children">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><input type="email" name="email" id="email"></td>
                                </tr>
                                <tr>
                                    <td>Phone</td>
                                    <td><input type="number" name="phone" id="phone"></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td></td>
                                    <td>
                                        <input name="submit" type="submit" value="Submit">
                                    </td>
                                </tr>
                            </tfoot>
                        </form>

                    </table>

                    <p id="error-msg"></p>
                </div>

                <h1>Summary</h1>
                <div id="summary-div">
                    <!-- -->
                    <table border="2" id="summary-table">
                        <thead>
                            <th>Group Name</th>
                            <th>Check-in-date</th>
                            <th>Check-out-date</th>
                            <th>Number of rooms</th>
                            <th>Number of Adults</th>
                            <th>Number of Children</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <!-- <th>Name of all guests</th> -->
                        </thead>
                        <tbody id="summary-table-tbody">
                            <tr id="summary-table-tr">
                                <td class="summary-td">0</td>
                                <td class="summary-td">0</td>
                                <td class="summary-td">0</td>
                                <td class="summary-td">0</td>
                                <td class="summary-td">0</td>
                                <td class="summary-td">0</td>
                                <td class="summary-td">0</td>
                                <td class="summary-td">0</td>
                                <!-- <td class="summary-td">0</td> -->
                            </tr>
                        </tbody>
                    </table>
                </div>
            </main>

        </div>

        <script src="../../asset/Javascript/Group bookings/groupBookingValidation.js"></script>
        <script src="../../asset/Javascript/Group bookings/groupBookingSummaryTable.js"></script>
    </body>

    </html>

<?php
} else {
    echo "<h1 style='color:red'>Unauthorized Access!!</h1>";
}
?>