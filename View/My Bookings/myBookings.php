<?php
session_start();
if ($_SESSION['status'] || $_COOKIE['status']) {
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Guest Dashboard</title>
        <link rel="stylesheet" href="../../asset/Styles/Common Styles/sidebar.css">
        <link rel="stylesheet" href="../../asset/Styles/Common Styles/navbar.css">
        <link rel="stylesheet" href="../../asset/Styles/My Bookings/show_bookings_cards.css">
    </head>

    <body>
        <?php include('../Common components/navbar.php'); ?>

        <div onclick="" id="sidebar-main-content">
            <?php include('../Common components/sidebar_guest.php'); ?>
            <div id="bookings-div">

            </div>

        </div>
        <script>
            let reservations = [];
            let xttp = new XMLHttpRequest();
            xttp.open('get', '../../model/reservations_data.php', true);
            xttp.send();
            xttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    reservations = JSON.parse(this.response);
                     console.log(reservations);
                     displayBookingsHistory();

                }
            }

            function displayBookingsHistory() {
                const parentBookingsDiv = document.getElementById('bookings-div');
                reservations.forEach(reservation => {
                    const div = document.createElement('div');
                    div.classList.add('booking-card');
                    div.innerHTML =
                        `
                        <div>
                            <p>Reservation ID: <span>#${reservation.reservation_id}</span></p>
                            <p>Room id: <span>#${reservation.room_id}</span></p>
                            <p>Booking Type: <span>${reservation.booking_type}</span></p>
                        </div>
                        <div>
                            <p>Check-in Date: <span>${reservation.check_in_date}</span></p>
                            <p>Check-out Date: <span>${reservation.check_out_date}</span></p>
                        </div>
                        <div>
                            <p>Status <span>${reservation.status}</span></p>
                            <p>Number of Guests: <span>${reservation.num_of_guest}</span></p>
                        </div>
                        <div>
                            <p>Room No: <span>#${reservation.room_no}</span></p>
                            <p>Guest name: <span>${reservation.guest_name}</span></p>
                        </div>
                        <button>Cancel</button>
                        `
                    parentBookingsDiv.appendChild(div);

                })

            }

           



        </script>

        <!-- <script src="../../asset/Javascript/My Bookings/displayAllBookings.js"></script> -->
        <!-- <script src="../../asset/Javascript/My Bookings/reservation_data.js"></script> -->
    </body>

    </html>

    <?php
} 
else {
    header("Location: ../Authentication/Login/login.php");
}
?>