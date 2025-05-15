<?php
session_start();
if (isset($_SESSION['status'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dynamic Calendar</title>
        <link rel="stylesheet" href="../../asset/Styles/Availibility Calendar/dynamic_calendar.css">

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

            <!-- Dynamic Calendar -->
            <div id="dynamic-calendar">
                <div id="btn-month-info">
                    <button onclick="displayPreviousMonthCalendar()">
                        < </button> <span class="2025-4" id="year-month">2025,May</span>
                            <button onclick="displayNextMonthCalendar()">></button>
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
                    <div>
                        <h3>Check-in Date : <span id="">
                                <input type="date" name="" id="check-in-date">
                            </span> </h3>
                        <h3>Check-out Date : <span id="">
                                <input onchange="handleCheckOutDate()" type="date" name="" id="check-out-date">
                            </span> </h3>
                    </div>
                    <h3>Nights : <span id="night-count">0</span>
                        <!-- <button onclick="setNightCount('-')" class="plus-or-minus">-</button>
                    <button onclick="setNightCount('+')" class="plus-or-minus">+</button> -->
                    </h3>
                    <!-- <h3>Total : <span id="total"></span>0</h3> -->
                </div>
            </div>
            <!-- Rate Viewer -->
            <div id="rate-viewer">
                <div hidden id="summary-table">
                    <h2>Stay Dates:
                        <span id="stay-date"></span>
                    </h2>
                    <h2>Rate</h2>
                    <table border="2" id="rate-view-table">

                    </table>
                    <h2>Available Room</h2>
                    <table border="2" id="available-room">
                        <thead>
                            <tr>
                                <th>Room No</th>
                                <th>Category</th>
                                <th>Price/night</th>
                                <th>Amenities</th>
                                <th>Capacity</th>
                                <th>Smoking Allowed</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>

        </main>
        <script src="../../asset/Javascript/Availability Calender/generate_calendar.js"></script>
        <script src="../../asset/Javascript/Availability Calender/rate_viewer.js"></script>
    </body>

    </html>


<?php
} else {
    echo "<h1 style='color:red'>Unauthorized Access!!</h1>";
}
?>