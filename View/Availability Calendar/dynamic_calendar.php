<?php
// session_start();
if (isset($_SESSION['status'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dynamic Calendar</title>
        <link rel="stylesheet" href="../../asset/Styles/Availibility Calendar/dynamic_calendar.css">

        
    </head>

    <body>
        
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

        
        </main>
        <script src="../../asset/Javascript/Availability Calender/generate_calendar.js"></script>
        <!-- <script src="../../asset/Javascript/Availability Calender/rate_viewer.js"></script> -->
    </body>

    </html>


<?php
} else {
    echo "<h1 style='color:red'>Unauthorized Access!!</h1>";
}
?>