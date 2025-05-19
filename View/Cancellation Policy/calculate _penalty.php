<?php
session_start();
if (isset($_SESSION['status']) || isset($_COOKIE['status'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Calculate Penalty</title>
        <link rel="stylesheet" href="../../asset/Styles/Cancellation Policy/penalty_calculator.css" />
        <link rel="stylesheet" href="../../asset/Styles/Common Styles/sidebar.css">
        <link rel="stylesheet" href="../../asset/Styles/Common Styles/navbar.css">

        <style>
            #sidebar-main-content {
                display: flex;
            }
        </style>

    </head>

    <body>
        <?php include('../Common components/navbar.php'); ?>

        <div id="sidebar-main-content">
            <?php include('../Common components/sidebar_guest.php'); ?>
            <main>
                <div id="guest-information">
                    <h3>Booking Id : <span>#8768879</span></h3>
                    <h3>Total Amount paid : <span>800</span></h3>
                    <h3>Cancellation Policy Applied : <span>Flexible Rate</span></h3>
                </div>
                <!-- Select date and note -->
                <div>
                    <table>
                        <tbody>
                            <form onsubmit="return handleSaveButton()" action="">
                                <tr>
                                    <td>
                                        <label for="">Cancellation date</label>
                                    </td>
                                    <td>
                                        <input type="date" name="" id="cancellation-date" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="">Reason for Cancellation</label>
                                    </td>
                                    <td>
                                        <textarea
                                            rows="4"
                                            cols="30"
                                            placeholder=""
                                            name=""
                                            id="reason-for-cancellation"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <input type="submit" value="Save" />
                                    </td>
                                </tr>
                            </form>
                        </tbody>
                    </table>
                </div>
                <!-- Show penalty Details table -->
                <div>
                    <table border="2">
                        <thead>
                            <tr>
                                <th>Cancellation date</th>
                                <th>Penalty Fee</th>
                                <th>Refundable Amount</th>
                                <th>Notes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td id="set-cancellation-date">May 1,20</td>
                                <td id="panelaty-fee">1 night(2000)</td>
                                <td id="refundable-amount">600</td>
                                <td id="notes">After free period, penalty applies</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p style="text-align: center">
                    <a href="">
                        <button>Confirm Cancellation</button>
                    </a>
                    <a href="">
                        <button>Modify Stay instead</button>
                    </a>
                    <a href="./termsDisplay.html">
                        <button>Back to Terms</button>
                    </a>
                </p>
            </main>

        </div>


        <script src="../../asset/Javascript/Cancellation_policy/calculate_penalty.js"></script>

    </body>

    </html>


<?php
} else {
    header('Location: ../Authentication/Login/login.php');
}
?>