<?php
session_start();
if (isset($_SESSION['status']) || isset($_COOKIE['status'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <title>Admin Dashboard</title>
        <link rel="stylesheet" href="../../asset/Styles/Common Styles/sidebar.css">
        <link rel="stylesheet" href="../../asset/Styles/Common Styles/navbar.css">
        <!-- <link rel="stylesheet" href="../../asset/Styles/Dashboard/adminDashboard.css"> -->
        <style>
            #sidebar-main-content {
                display: flex;
                width: 100%;
            }

            #cards {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 5px;
                width: 100%;
                margin-left: 5px;

            }

            .card {
                border: 1px solid;
                font-size: 30px;
                padding: 20px;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                height: 20vh;
                text-align: center;
                align-items: center;
                border-radius: 10px;
                background-color: gainsboro;
            }
            #room-info-table{
                margin-top: 5px;
                margin-left: 5px;
                width: 100%;
            }
            td,th{
                font-size: 25px;
                padding: 15px;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            }
            tr:hover{
                background-color: wheat;
                cursor: pointer;
            }
            h2{
                font-size: 30px;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                text-align: center;
            }
        </style>
    </head>

    <body>

        <?php include('../Common components/navbar.php'); ?>

        <div id="sidebar-main-content">
            <?php include('../Common components/sidebar.php'); ?>
            <div id="main-content">
                <div id="cards">
                    <div class="card">Number of Rooms <br>
                        <span>4</span>
                    </div>
                    <div class="card">Number of Available Rooms <br>

                        <span>6</span>
                    </div>
                    <div class="card">Number of Services <br>
                        <span>6</span>
                    </div>
                </div>
                <h2>Room Details</h2>
                <div id="room-info-table">
                    <table border=2>
                        <thead>
                            <th>Room Id</th>
                            <th>Room No</th>
                            <th>Room Type</th>
                            <th>Bed Type</th>
                            <th>Capacity</th>
                            <th>Floor</th>
                            <th>Price per Nights</th>
                            <th>Amenities</th>
                        </thead>
                        <tbody id="room-details-tbody"></tbody>
                    </table>
                </div>
            </div>
        </div>
        <script src="../../asset/Javascript/Rooms/displayAllRooms.js"></script>
    </body>

    </html>

<?php
} else {
    header('Location: ../Authentication/Login/login.php');
    exit();
}
?>