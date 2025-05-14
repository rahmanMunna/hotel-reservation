<?php
session_start();
if (isset($_SESSION['status'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Group Block Tool</title>
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
            <form onsubmit="return handleSubmit()" action="">
                <table>
                    <tbody>
                        <tr>
                            <td>Group Name</td>
                            <td>
                                <input type="text" name="" id="group-name" />
                            </td>
                        </tr>

                        <tr>
                            <td>Group Contact Person</td>
                            <td>
                                <hr />
                            </td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td>
                                <input
                                    type="text"
                                    name=""
                                    id="name"
                                    placeholder="Enter Your Name" />
                            </td>
                        </tr>
                        <tr>
                            <td>Phone</td>
                            <td>
                                <input
                                    type="number"
                                    name=""
                                    id="phone"
                                    placeholder="Enter your phone number" />
                            </td>
                        </tr>
                        <tr>
                            <td>email</td>
                            <td>
                                <input
                                    type="email"
                                    name=""
                                    id="email"
                                    placeholder="Enter your email" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <hr />
                            </td>
                            <td>
                                <hr />
                            </td>
                        </tr>

                        <tr>
                            <td>Check-in-date</td>
                            <td>
                                <input type="date" name="" id="check-in-date" />
                            </td>
                        </tr>
                        <tr>
                            <td>Check-out-date</td>
                            <td>
                                <input type="date" name="" id="check-out-date" />
                            </td>
                        </tr>
                        <tr>
                            <td>Total Nights</td>
                            <td id="total-nights"></td>
                        </tr>
                        <tr>
                            <td>Number of Guest</td>
                            <td>
                                <input type="number" name="" id="number-of-guest" />
                            </td>
                        </tr>
                    </tbody>
                </table>

                <table border="2">
                    <thead>
                        <th>Room Type</th>
                        <th>Qty Requested</th>
                        <th>Price Per Night</th>
                        <th>Available Rooms</th>
                        <th>Notes</th>
                        <th>Add/Remove</th>
                    </thead>
                    <tbody id="tbody">
                        <!-- <tr>
              <td>
                <select
                  onchange="handleRoomType(this.value)"
                  name=""
                  id="room-types"
                >
                  <option value="">Select Room Type</option>
                  <option value="Deluxe King">Deluxe King</option>
                  <option value="Double Queen">Double Queen</option>
                </select>
              </td>
              <td>
                <input type="number" name="" id="qty-requested" />
              </td>
              <td class="price-per-night"></td>
              <td class="available-rooms"></td>
              <td class="notes"></td>
              <td>
                <button>Add</button>
                <button>Remove</button>
              </td>
            </tr> -->
                    </tbody>
                </table>
                <br />
                <hr />
                <button onclick="handleAddRow()">Add Row</button>
                <br />
                <br />
                <!-- Summary Table -->
                <table border="2">
                    <thead>
                        <th>Total Room Blocked</th>
                        <th>Total Estimated Cost</th>
                        <th>Deadline for Individual Reservations (cutoff date)</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td id="total-room-blocked"></td>
                            <td id="total-estimated-cost"></td>
                            <td id="cutoff-date"></td>
                        </tr>
                    </tbody>
                </table>
                <br />
                <label for="">Select Payment Options</label>
                <select name="" id="select-payment-options">
                    <option value="">Select a payment Option</option>
                    <option value="Pay on Arrival">Pay on Arrival</option>
                    <option value="Prepaid">Prepaid</option>
                    <option value="Group Pays for All / Individual Guests Pay">
                        Group Pays for All
                    </option>
                    <option value="Individual Guests Pay">Individual Guests Pay</option>
                </select>
                <br />
                <br />

                <input type="submit" value="Submit" />
            </form>
        </main>
        <script src="../../asset/Javascript/Group bookings/group_block_tool.js"></script>
    </body>

    </html>


<?php
} else {
    echo "<h1 style='color:red'>Unauthorized Access!!</h1>";
}
?>