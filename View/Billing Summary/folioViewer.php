<?php

session_start();
if (isset($_SESSION['status'])  || $_COOKIE['status']) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Folio Viewer</title>

        <!-- <link rel="stylesheet" href="../../asset/Styles/Billing Summary/folioViewer.css"> -->
        <link rel="stylesheet" href="../../asset/Styles/Common Styles/sidebar.css">
        <link rel="stylesheet" href="../../asset/Styles/Common Styles/navbar.css">
        <style>
            #sidebar-main-content {
                display: flex;
            }

            #guest-info-summary {
                display: flex;
                gap: 20px;

            }

            #btn-div {
                display: flex;
                justify-content: center;
                gap: 10px;
                align-items: end;

            }

            body {
                background-color: #f4f4f4;

            }

            #guest-info-summary {
                display: flex;
                gap: 20px;

            }

            main {
                width: 80%;
                margin: auto;
            }

            #folio-table,
            div {
                width: 100%;
                margin: auto;
                font-size: 30px;
                font-family: Arial, Helvetica, sans-serif;
            }

            #summary-table {
                width: 10%;
                margin-left: auto;
                border: 2px solid;
                font-size: 20px;
                margin-bottom: 30px;

            }

            th {
                text-align: start;
            }

            td {
                /* text-align: center; */
                color: #6e34bed4;
            }

            tr:hover {
                background-color: rgb(120, 146, 167);
                color: wheat;
                cursor: pointer;
                transition: background-color .2s ease, color .2 ease;

            }

            td:hover {
                background-color: rgb(120, 146, 167);
                color: wheat;
                cursor: pointer;
                transition: background-color .2s ease, color .2 ease;

            }

            #btn-div {
                margin-top: 20px;
                display: flex;
                justify-content: center;
                gap: 10px;
                align-items: end;
                /* height: 30px; */


            }

            .btn {
                font-size: 25px;
                color: rgb(119, 27, 27);
                background-color: #ded7dc;
                border-radius: 10px;
                height: 40%;
                padding: 10px;
            }

            .btn:hover {
                background-color: aquamarine;
                cursor: pointer;
                color: black;
                transform: scale(1.04);
                transition: transform .3s ease background-color .3s ease;
            }

            span {
                background-color: antiquewhite;
                padding: 5px;
                border-radius: 10px;

            }

            #guest-info {
                display: grid;
                grid-template-columns: repeat(5, 1fr);
                margin: auto;
                border: 1px solid;
                margin-bottom: 30px;
                padding: 10px;
                font-size: large;

            }

            #sort-by {
                text-align: end;
                margin-bottom: 30px;
            }

            select {
                font-size: 30px;
                font-family: Georgia, 'Times New Roman', Times, serif;
                padding: 10px;

            }


            /* Responsive design */
            @media (max-width : 500px) {
                #guest-info {
                    grid-template-columns: repeat(2, 1fr);
                    font-size: 14px;
                    width: 100%;
                    margin-left: 0px;
                }

                #folio-table,
                div {
                    width: 100%;
                    font-size: 12px;
                }



                select {
                    font-size: 12px;
                    padding: 5px;
                }
            }
        </style>
    </head>

    <body>
        <?php include('../Common components/navbar.php'); ?>
        <div id="sidebar-main-content">
            <?php include('../Common components/sidebar_guest.php'); ?>
            <main>
                <div id="guest-info-summary">
                    <div id="guest-info">
                        <h4>Guest Name : <span>XYZ</span></h4>
                        <h4>Room Id : <span>1111</span></h4>
                        <h4>Booking Id : <span>129381</span></h4>
                        <h4>Number Of Guest : <span>4</span></h4>
                        <h4>Check-in Date : <span>20 May,2025</span></h4>
                        <h4>Check-out Date : <span>20 May,2025</span></h4>
                    </div>
                    <table id="summary-table">
                        <thead>
                            <tr>
                                <th>Description</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Total</td>
                                <td>1000</td>
                            </tr>
                            <tr>
                                <td>Discount</td>
                                <td>1000</td>
                            </tr>
                            <tr>
                                <td>Tax</td>
                                <td>1000</td>
                            </tr>

                            <tr>
                                <td>Grand Total</td>
                                <td>1000</td>
                            </tr>
                            <tr>
                                <td>Paid</td>
                                <td>1000</td>
                            </tr>
                            <tr>
                                <td>
                                    <hr>
                                </td>
                                <td>
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td>Balance</td>
                                <td>1000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>


                <div id="sort-by">
                    <select name="" id="">
                        <option value="">Sort by</option>
                        <option value="Category">Category</option>
                        <option value="Date">Date</option>
                        <option value="Paid">Paid</option>
                        <option value="Unpaid">Unpaid</option>
                    </select>
                </div>
                <!-- Folio table -->
                <table id="folio-table">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Amount</th>
                            <th>Paid</th>
                        </tr>
                    </thead>
                    <tbody id="folio-table-tbody">
                    </tbody>
                </table>



                <div id="btn-div">
                    <a href="./charge_breakdown.php">
                        <button class="btn" id="view-break-down" name="">View Break Down</button>
                    </a>
                    <a href="./split_charges.php">
                        <button class="btn" id="split-payment">Split Payment</button>
                    </a>
                    <a href="./receipt_generator.php">
                        <button class="btn" id="generate-pdf">Generate Receipt</button>
                    </a>
                </div>
            </main>

        </div>

        <script src="../../asset/Javascript/Billing Summary/folioViewer.js"></script>
        <!-- <script src="./split_charges.js"></script> -->
    </body>

    </html>


<?php
} else {
    echo "<h1 style='color:red'>Unauthorized Access!!</h1>";
}
?>