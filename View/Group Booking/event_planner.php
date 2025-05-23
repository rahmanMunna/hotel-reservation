<?php
session_start();
if (isset($_SESSION['status'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Event Planner</title>

        <link rel="stylesheet" href="../../asset/Styles/Common Styles/sidebar.css">
        <link rel="stylesheet" href="../../asset/Styles/Common Styles/navbar.css">
        <link rel="stylesheet" href="../../asset/Styles/Group booking/event_planner.css">

        <style>
            #sidebar-main-content{
                display: flex;
            }
        </style>
    </head>

    <body>

        <?php include('../Common components/navbar.php'); ?>

        <div id="sidebar-main-content">
            <?php include('../Common components/sidebar.php'); ?>

            <div id="main-content">
                <!-- Header Section -->
                <header>
                    <div id="event-info-div">
                        <table border="2">
                            <tbody>
                                <tr>
                                    <td>Group Name :</td>
                                    <td>
                                        <input type="text" name="" id="group-name" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Group Contact</td>
                                    <td>
                                        <input type="number" name="" id="number" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Contact Name</td>
                                    <td>
                                        <input type="text" name="" id="name" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Event Date :</td>
                                    <td>
                                        <b>From</b> <input type="date" name="" id="from-date" />
                                        <b>To </b> <input type="date" name="" id="to-date" />
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <button class="btn" onclick="handleAddButton()">Add</button>
                    </div>
                    <div>

                    </div>
                </header>

                <!-- Event Summary Section -->
                <section class="summary">
                    <h2>Event Summary</h2>
                    <table border="1">
                        <tbody>
                            <tr>
                                <td>
                                    <b>Group Name:</b>
                                </td>
                                <td id="set-group-name"></td>
                            </tr>

                            <tr>
                                <td>
                                    <b>Group Contact:</b>
                                </td>

                                <td id="set-group-contact"></td>
                            </tr>

                            <tr>
                                <td>Contact Name</td>
                                <td id="set-contact-name"></td>
                            </tr>

                            <tr>
                                <td>Event Date</td>
                                <td id="set-event-date"></td>
                            </tr>

                            <tr>
                                <td>
                                    <b>Total Event : </b>
                                </td>
                                <td id="total-event"></td>
                            </tr>
                        </tbody>
                    </table>
                </section>

                <!-- Event Schedule Table -->
                <section id="event-schedule">
                    <h2>Event Schedule</h2>
                    <table border="1">
                        <thead>
                            <tr>
                                <th>Event Name</th>
                                <th>Date</th>
                                <th>Starting Time</th>
                                <th>Ending Time</th>
                                <th>Venue/Room</th>
                                <th>Guests</th>
                                <th>Setup Type</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="event-schedule-tbody">

                            <!-- Additional events can be listed here -->
                        </tbody>
                    </table>
                    <!-- <button>Add Event</button> -->
                </section>

                <!-- Event Details Form -->
                <section class="event-form">
                    <h2>Add/Edit Event</h2>
                    <form method="post" action="../../controller/php/event_planner_validation.php" onsubmit="return handleSubmit()">
                        <table>
                            <tr>
                                <td><label for="event-name">Event Name:</label></td>
                                <td><input type="text" id="" name="event-name" /></td>
                            </tr>
                            <tr>
                                <td><label for="event-date">Date:</label></td>
                                <td><input type="date" id="" name="event-date" /></td>
                            </tr>
                            <tr>
                                <td><label for="event-time">Time:</label></td>
                                <td>
                                    From : <input type="time" id="" name="event-time-from" />
                                    To : <input type="time" id="" name="event-time-to" />
                                </td>
                            </tr>
                            <tr>
                                <td><label for="venue">Venue/Room:</label></td>
                                <td>
                                    <select id="" name="venue">
                                        <option id="select-venue" value="">Select Venue</option>
                                        <option value="grand-ballroom">Grand Ballroom</option>
                                        <option value="executive-boardroom">Executive Boardroom</option>
                                        <option value="poolside-terrace">Poolside Terrace</option>
                                        <option value="garden-lawn">Garden Lawn</option>
                                        <option value="sky-lounge">Sky Lounge</option>
                                        <option value="vip-suite">VIP Suite</option>
                                        <option value="conference-hall">Conference Hall</option>
                                        <option value="banquet-hall-b">Banquet Hall B</option>
                                        <option value="exhibition-space">Exhibition Space</option>
                                        <option value="pre-function-area">Pre-Function Area</option>
                                        <!-- Additional venues can be added here -->
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="guests">Number of Guests:</label></td>
                                <td><input type="number" id="" name="guests" /></td>
                            </tr>
                            <tr>
                                <td><label for="setup-type">Setup Type:</label></td>
                                <td>
                                    <select id="" name="setup-type">
                                        <option value="">Select Setup</option>
                                        <option value="banquet">Banquet</option>
                                        <option value="classroom">Classroom</option>
                                        <option value="u-shape">U-Shape</option>
                                        <!-- Additional setup types can be added here -->
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2" style="text-align: right">
                                    <button id="save-event"  type="submit" name="submit">Save Event</button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </section>
            </div>

        </div>

        <script src="../../asset/Javascript/Group bookings/event_planner.js"></script>
    </body>

    </html>


<?php
} else {
    echo "<h1 style='color:red'>Unauthorized Access!!</h1>";
}
?>