<?php

session_start();
if (isset($_SESSION['status'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Receipt Generator</title>
        <link rel="stylesheet" href="../../Styles/Billing Summary/receipt_generator.css">
    </head>

    <body>
        <header>
            <div>
                <div style="display: flex; justify-content: space-between;align-items: center;">
                    <h3>Hotel Logo</h3>
                    <h3>🌟 Sunrise Resort & Spa
                        123 Ocean Drive, Miami, FL</h3>
                </div>
                <p style="text-align: end;">
                    Contact info : 📧 info@sunriseresort.com | ☎ (555) 123-4567
                </p>
            </div>
        </header>
        <main>
            <div id="guest-info">
                <h3 id="guest-name">Guest Name : </h3>
                <h3 id="room-number">Room Number : 80</h3>
                <h3 id="reservation-id">Reservation Id : #58458</h3>
                <h3 id="check-in-date">Check in Date : 99-99-9999</h3>
                <h3 id="check-out-date">Check out Date : 99-99-9999</h3>
                <h3 id="number-of-nights">Number Of Nights : 3</h3>
            </div>
            <div id="charges">
                <h2>
                    Charges</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Description</th>
                            <th>Quantity</th>
                            <th>Unit Price</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody id="charges-tbody">
                        <!-- js populate this based on data -->
                    </tbody>
                </table>
            </div>
            <div id="payment-summary">
                <h2>Payment Summary</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Field</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody id="payment-summary-tbody">
                        <!-- js will populate this section  -->
                    </tbody>
                </table>
            </div>
            <div id="btns">
                <button id="email-receipt">Email Receipt</button>
                <!-- <button id="print">Print</button> -->
                <button id="download-pdf">Download PDF</button>
            </div>
        </main>
        <footer>
            <h3>"Thank you for staying with us. We hope to see you again!"</h3>
            <h3>"All charges are final unless disputed within 24 hours."”</h3>
        </footer>
        <script src="./reciept_generator.js"></script>
    </body>


    </html>


<?php
} else {
    echo "<h1 style='color:red'>Unauthorized Access!!</h1>";
}
?>