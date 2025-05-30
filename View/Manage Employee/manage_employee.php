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

        <!-- Edit/Delete -->

        <div id="add-employee">
            <table>
                <form onsubmit="return editInfo()" action="">
                    <tbody>
                        <tr>
                            <td>First Name</td>
                            <td><input type="text" name="firstName" id="firstName"></td>
                        </tr>
                        <tr>
                            <td>Last Name</td>
                            <td><input type="text" name="lastName" id="lastName"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="email" name="email" id="email"></td>
                        </tr>
                        <tr>
                            <td>Phone</td>
                            <td><input type="number" name="phone" id="phone"></td>
                        </tr>
                        <tr>
                            <td>DOB</td>
                            <td><input type="date" name="dob" id="dob"></td>
                        </tr>
                        <tr>
                            <td>Role</td>
                            <td>
                                <select name="" id="role">
                                    <option value="">Select a role</option>
                                    <option value="Manager">Manager</option>
                                    <option value="Receptionist">Receptionist</option>
                                    <option value="Chef">Chef</option>
                                    <option value="Front Desk">Front Desk</option>
                                    <option value="House Keeping">House Keeping</option>
                                    <option value="Staff">Staff</option>
                                </select>
                            </td>
                        </tr>

                    </tbody>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" value="Edit">
                            </td>
                        </tr>
                    </tfoot>
                </form>
            </table>
        </div>

    </div>

    <script src="../../asset/Javascript/Manage Employee/loadEmployeesInfo.js"></script>
    <script src="../../asset/Javascript/Manage Employee/editInfo.js"></script>

</body>

</html>