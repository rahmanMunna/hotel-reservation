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
    <title>Add Employee</title>
    <link rel="stylesheet" href="../../asset/Styles/Common Styles/sidebar.css">
    <link rel="stylesheet" href="../../asset/Styles/Manage Employee/employee_info_table.css">
</head>

<body>

    <?php include('../Common components/navbar.php'); ?>

    <div id="sidebar-main-content">
        <?php include('../Common components/sidebar.php'); ?>

        <!-- main content -->

        <!-- Add employee -->
        <div id="add-employee">
            <table>
                <form action='../../controller/php/addEmployee.php' method="post" onsubmit="return addEmployee()">
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
                                <select name="role" id="role">
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
                        <tr>
                            <td>Joining Date</td>
                            <td><input type="date" name="joiningDate" id="joiningDate"></td>
                        </tr>

                    </tbody>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" value="Add">
                            </td>
                        </tr>
                    </tfoot>
                </form>
            </table>
        </div>

        <!-- Error-msg -->
         <div>
            <p id="error-msg"></p>
         </div>
    </div>

    <!-- <script src="../../asset/Javascript/Manage Employee/loadEmployeesInfo.js"></script> -->
    <script src="../../asset/Javascript/Manage Employee/addEmployee.js"></script>

</body>

</html>