<?php
session_start();
if (isset($_SESSION['status']) || isset($_COOKIE['status'])) {
    if (isset($_GET['reservation_id'])) {
        $reservationId = $_GET['reservation_id'];
    }
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
            #cancellation-policy-div{
               width: 80%;
               margin: auto;
               border: 1px solid;
               padding: 10px;
            }
            h1{
                text-align: center;
            }
        </style>

    </head>

    <body>
        <?php include('../Common components/navbar.php'); ?>

        <div id="sidebar-main-content">
            <?php include('../Common components/sidebar_guest.php'); ?>
            <main>
                <!-- Select date and note -->
                <div>
                    <div id="cancellation-policy-div">
                        <h1>Cancellation Policy</h1>
                        <h2>1.If booking Cancelled Before Check-in-Date, then you will get full refund.</h2>
                        <h2>2.If booking Cancelled After Check-in-Date, then you will get 1000 Tk penalty for each night.</h2>
                    </div>
                    <table>
                        <tbody>
                            <form method="post"
                                onsubmit="return handleSaveButton()"
                                action="../../controller/php/cancellation_validation.php">
                                <tr>
                                    <td>
                                        <label for="">Cancellation date</label>
                                    </td>
                                    <td>
                                        <input type="date" name="cancellation-date" id="cancellation-date" />
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
                                            name="reason-for-cancellation"
                                            id="reason-for-cancellation"></textarea>
                                    </td>
                                </tr>
                                <input type="hidden" name="reservation-id" value="<?php echo htmlspecialchars($reservationId); ?>" />
                                <tr>
                                    <td></td>
                                    <td>
                                        <input name="submit" type="submit" value="Save" />
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
                                <!-- <th>Penalty Fee</th>
                                <th>Refundable Amount</th> -->
                                <th>Notes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td id="set-cancellation-date">0</td>
                                <!-- <td id="panelaty-fee">1 night(2000)</td>
                                <td id="refundable-amount">600</td> -->
                                <td id="notes">0</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- <p style="text-align: center">
                    <!-- <a href="">
                        <button>Confirm Cancellation</button>
                    </a> -->
                    <!-- <a href="./modification_flow_guest.php">
                        <button>Modify Stay instead</button>
                    </a> -->
                    <!-- <a href="./termsDisplay_guest.php">
                        <button>Back to Terms</button>
                    </a> -->
        <!-- </p> -->
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