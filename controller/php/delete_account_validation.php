<?php
session_start();
if (isset($_POST['submit']))
    $password = $_POST['password'];
$retype_password = $_POST['retype-password'];
$id = $_SESSION['id'];

$location = "127.0.0.1";
$userName = "root";
$password = "";
$dbName = "hotel-reservation";

// Connect to DB
$connection = mysqli_connect($location, $userName, $password, $dbName);

function existingPassword($connection)
{
    $query = 'SELECT PASSWORD FROM `users` WHERE id ="$id"';
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);

    return $row['password'];
}

if ($password == "" || $retype_password == "" || ($password != $retype_password)) {
    header('Location: ../../View/Delete Account/delete_account.php');
    // echo "Enter all the field";
} else {
    $existPassword = existingPassword($connection);

    if ($existingPassword == $password) {
        $query = "'DELETE FROM users WHERE `users`.`id` = $id'";
        $result = mysqli_query($connection, $query);

        if ($result) {
            header('Location: ../../controller/php/logout.php');
        } else {
            echo "Failed";
        }
    }
    else{
        header('Location: ../../View/Delete Account/delete_account.php');
    }
}
