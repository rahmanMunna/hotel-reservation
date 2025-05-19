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
        <link rel="stylesheet" href="../../asset/Styles/Billing Summary/charge_breakdown.css">
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
                <a href="./receipt_generator.php">
                    <button>Generate Receipt</button>
                </a>
            </p>

        </main>
        <script src="../../asset/Javascript/Billing Summary/charge_breakdown.js"></script>
    </body>

    </html>


<?php
} else {
    echo "<h1 style='color:red'>Unauthorized Access!!</h1>";
}
?>