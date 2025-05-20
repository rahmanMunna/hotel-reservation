<?php

session_start();
if (isset($_SESSION['status']) || isset($_COOKIE['status'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Split Charges</title>
        <link rel="stylesheet" href="../../asset/Styles/Common Styles/sidebar.css">
        <link rel="stylesheet" href="../../asset/Styles/Common Styles/navbar.css">
        <link rel="stylesheet" href="../../asset/Styles/Billing Summary/split_charges.css">
    </head>

    <body>

        <?php include('../Common components/navbar.php'); ?>

        <div id="sidebar-main-content">
            <?php include('../Common components/sidebar_guest.php'); ?>
            <main>
                <h1>Guest Folio - Split Charges </h1>

                <div id="split-charges-div">
                    <table border="2" id="split-charges-table">
                        <thead>
                            <tr id="table-header">
                                <th>No</th>
                                <th>Date</th>
                                <th>Description</th>
                                <th>Amount</th>
                                <!--  -->
                            </tr>
                        </thead>
                        <tbody id="table-body">
                        </tbody>
                    </table>
                    <button id="confirm-btn" onclick="handleConfirm()">Confirm</button>
                </div>


                <h1>Summary Table</h1>
                <div id="summary-table-div">
                    <table id="summary-table" border="2">
                        <thead id="summary-table-header">
                            <tr>
                                <th>Guest</th>
                                <th>Balance</th>

                            </tr>
                        </thead>
                        <tbody id="summary-table-body">

                        </tbody>
                    </table>
                </div>
            </main>

        </div>


        <script src="../../asset/Javascript/Billing Summary/split_charges.js"></script>
    </body>

    </html>


<?php
} else {
    header('Location: ../Authentication/Login/login.php');
}
?>