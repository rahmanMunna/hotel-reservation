<?php
session_start();
if (isset($_SESSION['status'])) {
    // print_r($_SESSION);
    $userId = $_SESSION['userId'];
    $email = $_SESSION['email'];

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Welcome Home</title>
        <link rel="stylesheet" href="home.css">
        <style>
            #navbar {
                width: 50%;
                margin: auto;
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

            h3 {
                text-align: center;
                font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
                font-size: 30px;
            }

            #sidebar-main-content {
                display: flex;
                gap: 10px;
            }

            #main-content {
                width: 85%;
            }

            h2 {
                border: 1px solid;
                height: 100px;
                text-align: center;
                padding: 20px;
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                background-color: rgb(149, 183, 164);
                border-radius: 10px;

            }

            #card {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 20px;


            }

            span {
                background-color: rgb(212, 237, 223);
                padding: 5px;
                border-radius: 5px;
            }
        </style>
    </head>

    <body>
        <!-- Navbar -->

        <div id="navbar">
            <nav>
                <li>Home</li>
                <li>About</li>
                <li>Contact</li>
                <li>Login</li>
                <!-- <li></li> -->
            </nav>
        </div>


        <div id="sidebar-main-content">
            <!-- sidebar -->
            <div id="sidebar">
                <div>
                    <h3>
                        Admin
                    </h3>
                </div>

                <a href="../View/Concierge Request/service_catalog.php">
                    <button>Service Catalog</button>
                </a>
                <a href="../View/Availability Calendar/dynamic_calendar.php">
                    <button>See available Room</button>
                </a>
                <a href="../View/Group Booking/group_manager.php">
                    <button>Group Booking</button>
                </a>
                <a href="../View/Group Booking/group_block_tool.php">
                    <button>Group Booking Tool</button>
                </a>
                <a href="../View/Group Booking/event_planner.php">
                    <button>Event Planner</button>
                </a>
                <a href="../View/Billing Summary/folioViewer.php">
                    <button>Billing Summary</button>
                </a>
                <a href="../View/Cancellation Policy/termsDisplay.php">
                    <button>Cancellation Policy</button>
                </a>
                <a href="../View/Contact_Us_Form/contact_us.php">
                    <button>Contact Us</button>
                </a>

                <a href="../controller/php/logout.php">
                    <button>logout</button>
                </a>
            </div>
            <!-- main content -->
            <div id="main-content">
                <div id="card">
                    <h2>Total Number of Rooms : <span>30</span></h2>
                    <h2>Number of Available Rooms : <span>16</span></h2>
                    <h2>Number of employees : <span>16</span></h2>
                    <h2>Number of guest Present in the hotel : <span>16</span></h2>
                </div>
            </div>
        </div>
    </body>

    </html>
<?php
} else {
    header('location : ../View/Authentication/Login/login.html');
}
?>