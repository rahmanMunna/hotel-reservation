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
    <link rel="stylesheet" href="../../asset/Styles/Manage Employee/employee_info_table.css">
</head>

<body>

    <?php include('../Common components/navbar.php'); ?>

    <div id="sidebar-main-content">
        <?php include('../Common components/sidebar.php'); ?>

        <!-- main content -->

        <!-- employee info table -->
        <div id="employee-info-div">
            <table id="employee-info-table" border="2">
                <thead>
                    <th>Employee Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Dob</th>
                    <th>Employee Role</th>
                    <th>joined in</th>
                    <th>Action</th>
                </thead>
                <tbody id="employee-info-tbody">
                </tbody>
            </table>

        </div>
    </div>

    <script src="../../asset/Javascript/Manage Employee/loadEmployeesInfo.js"></script>
    <!-- <script src="../../asset/Javascript/Manage Employee/addEmployee.js"></script> -->

</body>

</html>