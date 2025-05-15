<?php
session_start();
if (!isset($_SESSION['status'])) {
    // header('Location: ../Authentication/Login/login.html');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../../asset/Styles/Common Styles/sidebar.css">
    <link rel="stylesheet" href="../../asset/Styles/Common Styles/navbar.css">
    <!-- <link rel="stylesheet" href="../../asset/Styles/Dashboard/adminDashboard.css"> -->
</head>

<body>

    <?php include('../Common components/navbar.php'); ?>

    <div id="sidebar-main-content">
        <?php include('../Common components/sidebar.php'); ?>

    </div>

</body>

</html>