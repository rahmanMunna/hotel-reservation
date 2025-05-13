<?php
session_start();
if (isset($_SESSION['status'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Charge Break Down</title>
        <link rel="stylesheet" href="../../Styles/Billing Summary/charge_breakdown.css">
    </head>

    <body>
        <main>

            <div id="search">
                <section id="search-by-service">
                    <input type="search" placeholder="search by service name" name="" id="">
                    <input type="button" value="Search">
                </section>
                <section style="text-align: end;" id="filter-by-category">
                    <select style="font-size: 20px; padding: 5px;" name="" id="">
                        <option value="">Filter by Category</option>
                        <option value="Room">Room</option>
                        <option value="Food">Food</option>
                        <option value="Laundry">Laundry</option>
                    </select>
                </section>
            </div>

            <table border="1">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Item/Service</th>
                        <th>Quantity</th>
                        <th>Unit Price</th>
                        <th>Total</th>
                        <th>Category</th>
                        <th>Source</th>
                    </tr>
                </thead>
                <tbody id="charge-breakdown-tbody">

                </tbody>
            </table>
            <p>
                <a href="./receipt_generator.html">
                    <button>Generate Receipt</button>
                </a>
            </p>

        </main>
        <script src="../../Javascript/Billing Summary/charge_breakdown.js"></script>
    </body>

    </html>


<?php
} else {
    echo "<h1 style='color:red'>Unauthorized Access!!</h1>";
}
?>