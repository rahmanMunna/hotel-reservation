<?php

session_start();
if (isset($_POST["submit"])) {

    $loginData = $_POST;
    // $email = $loginData["email"];
    $userId = $loginData["userId"];
    $password = $loginData["password"];

    // guest fake data

    // $guestEmail = "guest@gmail.com";
    // $guestPassword = "Guest#1234";
    // $guestID = '1234';

    //admin fake data
    // $adminEmail = "admin@gmail.com";
    // $adminPassword = "Admin#1234";
    // $adminID = '1234';



    $location = "127.0.0.1";
    $userName = "root";
    $DbPassword = "";
    $dbName = "hotel-reservation";

    $query = "SELECT password,role from users WHERE user_id = '$userId'";
    // Connect to DB
    $connection = mysqli_connect($location, $userName, $DbPassword, $dbName);
    $result = mysqli_query($connection, $query);
    if ($row = mysqli_fetch_assoc($result)) {
        $dbPass = $row['password'];
        $role = $row['role'];

        if ($dbPass == $password) {
            $_SESSION['status'] = true;
            setcookie('status', 'true', time() + 5000, '/');
            if ($role == 'admin') {
                header('Location: ../../View/Dashboard/admin.php');
                exit();
            } else if ($role == 'guest') {
                header('Location: ../../View/Dashboard/guest_dashboard.php');
                exit();
            }
        } else {
            echo "not matched";
        }
    } else {
        echo "INvalid User id";
        // header('Location: ../../View/Authentication/Login/login.php');
    }





    // if ($email == $adminEmail && $userId == $adminID && $password = $adminPassword) {
    //     
    //     $_SESSION['admin'] = true;
    //     
    // } else if ($email == $guestEmail && $userId == $guestID &&  $password == $guestPassword) {
    //     $_SESSION['status'] = true;
    //     $_SESSION['guest'] = true;
    //     setcookie('status', 'true', time() + 5000, '/');
    //     
    // } else {
    //     
    // }
} else {
    // echo "Invalid Credentials";
    header('location: ../../View/Authentication/Login/login.php');
    exit();
}
