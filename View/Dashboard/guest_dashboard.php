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
    </head>

    <body>
        <?php include('../Common components/navbar.php'); ?>

        <div id="sidebar-main-content">
            <?php include('../Common components/sidebar_guest.php'); ?>

        </div>

    </body>

    </html>

<?php
} else {
    header("Location: ../Authentication/Login/login.php");
}
?>