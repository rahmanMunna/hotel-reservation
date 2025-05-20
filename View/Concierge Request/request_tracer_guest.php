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

        <script type="module" src="../../asset/Javascript/Concierge_Request/request_tracer.js"></script>
    </body>

    </html>

<?php
} else {
    header("Location: ../Authentication/Login/login.php");
}
?>