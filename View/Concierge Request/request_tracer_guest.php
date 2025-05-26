<?php
session_start();
if (isset($_SESSION['status']) || $_COOKIE['status']) {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Request Tracer</title>
        <link rel="stylesheet" href="../../asset/Styles/Common Styles/sidebar.css">
        <link rel="stylesheet" href="../../asset/Styles/Common Styles/navbar.css">
        <link rel="stylesheet" href="../../asset/Styles/Concierge Request/request_tracer.css">

        <style>
            #sidebar-main-content {
                display: flex;
                /* border: 1px solid; */
            }

            #main-content {
                width: 80%;
            }

            #back-btn {
                background-color: rgb(219, 225, 21);
                width: 10%;
            }

            #status-btn {
                width: 10%;

                text-align: center;
            }
           p{
            font-size: 20px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-weight: 700;
           }
           #card-heading{
            display: flex;
            justify-content: space-between;
           }
           #status-btn{
            font-size: 20px;
            font-family: Georgia, 'Times New Roman', Times, serif;
            background-color: brown;
            color: wheat;
           }
        </style>

    </head>

    <body>
        <?php include('../Common components/navbar.php'); ?>

        <div id="sidebar-main-content">
            <?php include('../Common components/sidebar_guest.php'); ?>
            <div id="main-content">
                <div id="heading">
                    <a style="text-decoration: none;" href="./service_catalog_guest.php">
                        <button id="back-btn">back</button>
                    </a>
                    <h2>Your Requested Order</h2>
                </div>

                <main>
                </main>
            </div>
        </div>

        <script>
            let requestedServices = [];

            let xttp = new XMLHttpRequest();
            xttp.open('get', '../../model/requests_data.php', true);
            xttp.send();
            xttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    requestedServices = JSON.parse(this.response);
                    console.log(requestedServices);
                    displayRequestOrders();
                }
            }

            function displayRequestOrders() {
                for (const requestedOrder of requestedServices) {

                    console.log(requestedOrder);

                    const main = document.getElementsByTagName('main');
                    // console.log(main)

                    const div = document.createElement('div');
                    div.setAttribute('class', 'order-card');

                    div.innerHTML =
                        `
                    <div id="card-heading">
                        <h2>Request_id : #${requestedOrder.req_id}</h2>
                        <h2>Request Time : ${requestedOrder.request_time}</h2>
                        <h2>User id : ${requestedOrder.user_id}</h2>

                    </div>
                    
                    <div class="price-status">
                        <p>
                            Room-id: ${requestedOrder.room_id}
                        </p>
                       
                        <p>
                            Quantity: ${requestedOrder.quantity}
                        </p>
                         <p>
                            price: ${requestedOrder.price_per_service}
                        </p>
                       
                       
                    </div>
                    <div class="">
                        <p>
                            Total Price: ${requestedOrder.total_price}
                        </p>
                        <button id="status-btn">Pending</button>
                    </div>
                
                    `
                    main[0].appendChild(div);


                }
            }

        </script>


        <!-- <script src="../../asset/Javascript/Concierge_Request/request_tracer.js"></script> -->
    </body>

    </html>

    <?php
} else {
    header("Location: ../Authentication/Login/login.php");
}
?>