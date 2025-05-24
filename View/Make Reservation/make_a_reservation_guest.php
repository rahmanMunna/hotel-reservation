<?php
session_start();
if ($_SESSION['status'] || (isset($_COOKIE['status']) && $_COOKIE['status'])) {

    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Guest Dashboard</title>
        <link rel="stylesheet" href="../../asset/Styles/Common Styles/sidebar.css">
        <link rel="stylesheet" href="../../asset/Styles/Common Styles/navbar.css">
        <link rel="stylesheet" href="../../asset/Styles/Make a reservation/generate_calender.css">

        <style>
            #sidebar-main-content {
                width: 100%;
                display: flex;
                gap: 10px;
                /* border: 1px solid; */
            }

            #main-content {
                width: 40%;
            }

            #check-in-out-date {
                display: flex;
                gap: 10px;
            }

            #error-msg {
                text-align: center;
                font-size: 22px;
                /* background-color: wheat; */
                padding: 5px;
                /* border: 1px solid; */
            }

            #room-cards {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                width: 40%;
                gap: 10px;
                height: 50rem;


            }

            .card {
                border: 1px solid;
                padding: 10px;

            }
        </style>
    </head>

    <body>
        <?php include('../Common components/navbar.php'); ?>

        <div onclick="" id="sidebar-main-content">
            <?php include('../Common components/sidebar_guest.php'); ?>
            <div id="main-content">
                <!-- Dynamic Calendar -->
                <div id="dynamic-calendar">
                    <div id="btn-month-info">
                        <button class="prev-next-btn" onclick="displayPreviousMonthCalendar()">
                            < </button>
                                <span class="2025-4" id="year-month">2025,May</span>
                                <button class="prev-next-btn" onclick="displayNextMonthCalendar()">></button>
                    </div>
                    <div id="dates-day">
                        <p id="0" class="days">Sun</p>
                        <p id="1" class="days">Mon</p>
                        <p id="2" class="days">Tue</p>
                        <p id="3" class="days">Wed</p>
                        <p id="4" class="days">Thu</p>
                        <p id="5" class="days">Fri</p>
                        <p id="6" class="days">Sat</p>

                        <!-- p.dates{$}*30 -->
                        <p class="dates"></p>
                        <p class="dates"></p>
                        <p class="dates"></p>
                        <p class="dates"></p>
                        <p class="dates"></p>
                        <p class="dates"></p>
                        <p class="dates"></p>
                        <p class="dates"></p>
                        <p class="dates"></p>
                        <p class="dates"></p>
                        <p class="dates"></p>
                        <p class="dates"></p>
                        <p class="dates"></p>
                        <p class="dates"></p>
                        <p class="dates"></p>
                        <p class="dates"></p>
                        <p class="dates"></p>
                        <p class="dates"></p>
                        <p class="dates"></p>
                        <p class="dates"></p>
                        <p class="dates"></p>
                        <p class="dates"></p>
                        <p class="dates"></p>
                        <p class="dates"></p>
                        <p class="dates"></p>
                        <p class="dates"></p>
                        <p class="dates"></p>
                        <p class="dates"></p>
                        <p class="dates"></p>
                        <p class="dates"></p>
                        <p class="dates"></p>
                        <p class="dates"></p>
                        <p class="dates"></p>
                        <p class="dates"></p>
                        <p class="dates"></p>
                        <p class="dates"></p>
                        <p class="dates"></p>
                        <p class="dates"></p>
                        <p class="dates"></p>
                        <p class="dates"></p>
                        <p class="dates"></p>
                        <p class="dates"></p>

                    </div>
                </div>
                <!-- Select-check-in-out -->
                <div id="select-check-in-out">
                    <div>
                        <div id="check-in-out-date">
                            <h3>Check-in Date : <span id="">
                                    <input onchange="handleCheckInDate()" type="date" name="" id="check-in-date">
                                </span> </h3>
                            <h3>Check-out Date : <span id="">
                                    <input onchange="handleCheckOutDate()" type="date" name="" id="check-out-date">
                                </span> </h3>
                            <h3>Nights : <span id="night-count">0</span>
                            </h3>
                        </div>
                        <p id="error-msg"></p>


                    </div>
                </div>
            </div>

            <!-- display Available Rooms -->
            <div id="room-cards">

            </div>

        </div>

        <script>




        </script>

        <script src="../../asset/Javascript/Make Reservation/generate_dynamic_calender.js"></script>
        <script src="../../asset/Javascript/Make Reservation/displayAvailableRooms.js"></script>
    </body>

    </html>

    <?php
} else {
    header("Location: ../Authentication/Login/login.php");
}
?>