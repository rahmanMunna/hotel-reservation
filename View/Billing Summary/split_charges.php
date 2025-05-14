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
        <script src="../../asset/Javascript/Billing Summary/split_charges.js"></script>
    </body>

    </html>


<?php
} else {
    echo "<h1 style='color:red'>Unauthorized Access!!</h1>";
}
?>