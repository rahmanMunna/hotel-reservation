<?php
session_start();
if (!isset($_SESSION['status']) || !isset($_COOKIE['status'])) {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <title>Admin Dashboard</title>

        <link rel="stylesheet" href="../../asset/Styles/Common Styles/navbar.css">
        <link rel="stylesheet" href="../../asset/Styles/Common Styles/sidebar.css">
        <link rel="stylesheet" href="../../asset/Styles/Concierge Request/service_catalog.css">

        <!-- <link rel="stylesheet" href="../../asset/Styles/Dashboard/adminDashboard.css"> -->
    </head>

    <body>

        <?php include('../Common components/navbar.php'); ?>

        <div id="sidebar-main-content">
            <?php include('../Common components/sidebar_guest.php'); ?>
            <div id="service-catalog">
                <a id="" style="text-decoration: none;" href="./request_tracer_guest.php">See Order Details</a>
                <div id="services">

                </div>
            </div>

        </div>
        <!-- <script>
            let servicesData = [];
            let xttp = new XMLHttpRequest();
            xttp.open('get', '../../model/services_data.php', true);
            xttp.send();
            xttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    servicesData = JSON.parse(this.response);
                    console.log(servicesData);

                }
            }
        </script> -->
        <script type="module" src="../../asset/Javascript/Concierge_Request/services.js"></script>


    </body>

    </html>

    <?php
} else {
    header('Location: ../Authentication/Login/login.php');
    exit();
}
?>