<?php
session_start();
if ($_SESSION['status'] || $_COOKIE['status']) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Delete Account</title>
        <link rel="stylesheet" href="../../asset/Styles/Common Styles/sidebar.css">
        <link rel="stylesheet" href="../../asset/Styles/Common Styles/navbar.css">
        <!-- <link rel="stylesheet" href="../../asset/Styles/My Bookings/show_bookings_cards.css"> -->
        <style>
            #sidebar-main-content {
                display: flex;
            }

            #delete-account-div,
            input {
                font-size: 30px;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                padding: 10px;
            }
            #submit-btn:hover{
                cursor: pointer;
                /* background-color: wheat;
                width: 100%; */
            }
        </style>
    </head>

    <body>
        <?php include('../Common components/navbar.php'); ?>

        <div onclick="" id="sidebar-main-content">
            <?php include('../Common components/sidebar_guest.php'); ?>
            <div id="delete-account-div">
                <table>
                    <form action="../../controller/php/delete_account_validation.php" method="post" onsubmit="return handleDeleteAccount()">
                        <tbody>
                            <tr>
                                <td>Your Password : </td>
                                <td>
                                    <input type="password" name='password' id="password" placeholder="enter your Password">
                                </td>
                            </tr>
                            <tr>
                                <td>Retype Password : </td>
                                <td>
                                    <input type="password" name='retype-password' id="retype-password" placeholder="retype your Password">
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td id="submit-btn">
                                    <input type="submit" name="submit" value="Delete  Account">
                                </td>
                            </tr>

                        </tbody>
                    </form>
                </table>
            </div>

        </div>
            <script src="../../asset/Javascript/Delete Account/validation.js"></script>
    </body>

    </html>

<?php
} else {
    header("Location: ../Authentication/Login/login.php");
}
?>