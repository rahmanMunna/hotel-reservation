<?php

session_start();
if (isset($_SESSION['status'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Split Charges</title>
    </head>

    <body>
        <main>
            <h1>Guest Folio - Split Charges </h1>
            <div>
                <input type="checkbox" value='Enabled' />Split Charges

            </div>
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
            </div>
            <button onclick="handleConfirm()">Confirm</button>

            <h1>Summary Table</h1>
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
        </main>
        <script src="../../Javascript/Billing Summary/split_charges.jss"></script>
    </body>

    </html>


<?php
} else {
    echo "<h1 style='color:red'>Unauthorized Access!!</h1>";
}
?>