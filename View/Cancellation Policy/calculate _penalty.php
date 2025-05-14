<?php
session_start();
if (isset($_SESSION['status'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Calculate Penalty</title>
        <link
            rel="stylesheet"
            href="../../asset/Styles/Cancellation Policy/penalty_calculator.css" />
        <style>
            #navbar {
                width: 50%;
                margin: auto;
                margin-bottom: 30px;
                /* background-color: gainsboro; */

            }

            nav {
                display: flex;
                gap: 30px;
                list-style: none;
                font-size: 30px;
                justify-content: center;


            }

            li {
                padding: 10px;
                border-radius: 10px;
            }

            li:hover {
                background-color: rgb(212, 237, 223);
                cursor: pointer;
                font-weight: bolder;
                /* color: wheat; */
            }
        </style>
    </head>

    <body>
        <div id="navbar">
            <nav>
                <a href="../home.php">
                    <li>Home</li>
                </a>
                <li>About</li>
                <li>Contact</li>
                <li>Login</li>
                <!-- <li></li> -->
            </nav>
        </div>
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

        <script src="../../asset/Javascript/Cancellation_policy/calculate_penalty.js"></script>

    </body>

    </html>


<?php
} else {
    echo "<h1 style='color:red'>Unauthorized Access!!</h1>";
}
?>