<?php
session_start();
if (isset($_POST['submit'])) {

    $user_password = $_POST['password'];
    $retype_password = $_POST['retype-password'];
    $id = $_SESSION['id'];

    //db info
    $location = "127.0.0.1";
    $userName = "root";
    $password = "";
    $dbName = "hotel-reservation";

    // Connect to DB
    $connection = mysqli_connect($location, $userName, $password, $dbName);

    function existingPassword($connection, $id)
    {
        $query = "SELECT password from users where id = '$id' ";
        $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_assoc($result);

        return $row['password'];
    }


    if ($user_password == "" || $retype_password == "" || ($user_password != $retype_password)) {
        header('Location: ../../View/Delete Account/delete_account.php');
        // echo "Enter all the field";
    } else {
        $existPassword = existingPassword($connection, $id);

        if ($existPassword == $user_password) {
            $query = "delete from reservations where `user_id` = '$id' ";
            $result = mysqli_query($connection, $query);

            $query = "delete from services_requests where `user_id` = '$id' ";
            $result = mysqli_query($connection, $query);

            $query = "delete from users where `id` = '$id' ";
            $result = mysqli_query($connection, $query);

            if ($result) {
                header('Location: ../../controller/php/logout.php');
            } else {
                echo "Failed";
            }
        } else {
            echo "last line";
            // header('Location: ../../View/Delete Account/delete_account.php');
        }
    }
}
