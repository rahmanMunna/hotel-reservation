<?php
session_start();
if ($_SESSION['status'] || $_COOKIE['status']) {

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add New Room</title>
        <link rel="stylesheet" href="../../asset/Styles/Common Styles/sidebar.css">
        <link rel="stylesheet" href="../../asset/Styles/Common Styles/navbar.css">
        <!-- <link rel="stylesheet" href="../../asset/Styles/Manage Employee/employee_info_table.css"> -->
        <style>
            #sidebar-main-content {
                display: flex;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }

            #add-room {
                width: 70%;
                font-size: 20px;
                margin-left: 30px;
                border: 2px solid;
                padding: 10px;
            }

            input,
            select,
            option {
                font-size: 20px;
            }
        </style>
    </head>

    <body>
        <?php include('../Common components/navbar.php'); ?>

        <div id="sidebar-main-content">
            <?php include('../Common components/sidebar.php'); ?>
            <!-- Add Room -->
            <div id="add-room">
                <table>
                    <form action="../../controller/php/addRoom.php"
                        method="post"
                        onsubmit="return handleAddRoom()"
                        enctype="multipart/form-data">
                        <tbody>
                            <tr>
                                <td>Room Type</td>
                                <td>
                                    <select name="room-type" id="room-type">
                                        <option value="">Select Room Type</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Room No</td>
                                <td><input type="text" name="room-no" id="room-no" placeholder="eg: R-101"></td>
                            </tr>
                            <tr>
                                <td>Bed Type</td>
                                <td>
                                    <select name="bed-type" id="bed-type">
                                        <option value="">Select Bed Type</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Floor</td>
                                <td><input type="number" name="floor" id="floor" placeholder="type floor number"></td>
                            </tr>
                            <tr>
                                <td>Capacity</td>
                                <td><input type="number" name="capacity" id="capacity" placeholder="enter number"></td>
                            </tr>
                            <tr>
                                <td>Price Per Night</td>
                                <td>
                                    <input type="number" name="price-per-night" id="price-per-night" placeholder="in Tk">
                                </td>
                            </tr>
                            <tr>
                                <td>Availability</td>
                                <td>
                                    <select name="availability" id="availability">
                                        <option value="">Select an option</option>
                                        <option value="Available">Available</option>
                                        <option value="Not available">Not available</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>Select Image : </td>
                                <td>
                                    <input type="file" name="room-img" id="room-img">
                                </td>

                            </tr>

                            <tr>
                                <!-- <td>Select Amenities</td> -->
                                <td></td>
                                <td>
                                    <label style="color: blue;font-size:25px" for="">Select Amenities :</label><br>

                                    <input type="checkbox" class="amenity-checkbox" name="wifi" id="wifi" value="wifi">
                                    <label for="wifi">Wi-Fi</label><br>

                                    <input type="checkbox" class="amenity-checkbox" name="ac" id="ac" value="ac">
                                    <label for="ac">Air Conditioning</label><br>

                                    <input type="checkbox" class="amenity-checkbox" name="tv" id="tv" value="tv">
                                    <label for="tv">Flat-Screen TV</label><br>

                                    <input type="checkbox" class="amenity-checkbox" name="minibar" id="minibar" value="minibar">
                                    <label for="minibar">Minibar</label><br>

                                    <input type="checkbox" class="amenity-checkbox" name="room_service" id="room_service" value="room_service">
                                    <label for="room_service">Room Service</label><br>

                                    <input type="checkbox" class="amenity-checkbox" name="balcony" id="balcony" value="balcony">
                                    <label for="balcony">Private Balcony</label><br>

                                    <input type="checkbox" class="amenity-checkbox" name="bathroom" id="bathroom" value="bathroom">
                                    <label for="bathroom">Private Bathroom</label><br>

                                    <input type="checkbox" class="amenity-checkbox" name="closet" id="closet" value="closet">
                                    <label for="closet">Closet/Wardrobe</label><br>


                                </td>
                            </tr>

                        </tbody>
                        <tfoot>
                            <tr>
                                <td></td>
                                <td>
                                    <input type="submit" name="submit" value="Add">
                                </td>
                            </tr>
                        </tfoot>
                    </form>
                </table>
                <p id="error-msg"></p>
            </div>

        </div>

        <script src="../../asset/Javascript/Rooms/addNewRoom.js"></script>
    </body>

    </html>



<?php
} else {
    header("Location: ../Authentication/Login/login.php");
}
?>