<?php

session_start();
if (isset($_SESSION['status'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Folio Viewer</title>
        <link rel="stylesheet" href="../../Styles/Billing Summary/folioViewer.css">
    </head>

    <body>
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
                    <button id="view-break-down" name="">View Break Down</button>
                </a>
                <a href="./split_charges.php">
                    <button id="split-payment">Split Payment</button>
                </a>
                <a href="./receipt_generator.php">
                    <button id="generate-pdf">Generate Receipt</button>
                </a>
            </div>
        </main>
        <script src="./folioViewer.js"></script>
        <!-- <script src="./split_charges.js"></script> -->
    </body>

    </html>


<?php
} else {
    echo "<h1 style='color:red'>Unauthorized Access!!</h1>";
}
?>