<?php
session_start();
if ($_SESSION['status'] || $_COOKIE['status']) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Delete A Room</title>
        <link rel="stylesheet" href="../../asset/Styles/Common Styles/sidebar.css">
        <link rel="stylesheet" href="../../asset/Styles/Common Styles/navbar.css">
        <!-- <link rel="stylesheet" href="../../asset/Styles/My Bookings/show_bookings_cards.css"> -->
        <style>
            #sidebar-main-content {
                display: flex;
            }

            #delete-room-div,
            input {
                font-size: 30px;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                padding: 10px;
            }

            #submit-btn:hover {
                cursor: pointer;
                /* background-color: wheat;
                width: 100%; */
            }

            th,
            td {
                padding: 5px;
            }
        </style>
    </head>

    <body>
        <?php include('../Common components/navbar.php'); ?>

        <div onclick="" id="sidebar-main-content">
            <?php include('../Common components/sidebar.php'); ?>
            <div id="delete-room-div">
                <table border=2>
                    <thead id="tbody">
                        <th>id</th>
                        <th>Room_id</th>
                        <th>Room_no</th>
                        <th>Room_Type</th>
                        <th>Bed_Type</th>
                        <th>Capacity</th>
                        <th>Price_per_night</th>
                        <th>Is Available</th>
                        <th>Floor</th>
                        <th>Amenities</th>
                        <th>Action</th>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>

        </div>
        <script>
            let rooms = [];
            let xttp = new XMLHttpRequest();
            xttp.open('get', '../../model/getAllRooms.php', true);
            xttp.send();
            xttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    rooms = JSON.parse(this.response);
                    displayAllRooms();
                    console.log(rooms);
                }
            }


            function displayAllRooms() {
                const tbody = document.getElementById('tbody');
                rooms.forEach(room => {
                    const tr = document.createElement('tr');
                    tr.innerHTML =
                        `
                    <td>${room.id}</td>
                    <td>${room.room_id}</td>
                    <td>${room.room_no}</td>
                    <td>${room.room_type}</td>
                    <td>${room.bed_type}</td>
                    <td>${room.capacity}</td>
                    <td>${room.price_per_night}</td>
                    <td>${room.is_available}</td>
                    <td>${room.floor}</td>
                    <td>${room.amenties}</td>
                    `
                    const button = document.createElement('button');
                    button.innerHTML = "Delete";
                    button.addEventListener('click', () => deleteRoom(room.id));
                    tr.appendChild(button);
                    tbody.appendChild(tr);


                })
            }

            function deleteRoom(id) {
                const xttp = new XMLHttpRequest();
                xttp.open('post', '../../model/delete_room.php', true);
                xttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xttp.send('id=' + id);

                xttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        console.log(this.response);
                    }
                }
            }
        </script>
    </body>

    </html>

<?php
} else {
    header("Location: ../Authentication/Login/login.php");
}
?>