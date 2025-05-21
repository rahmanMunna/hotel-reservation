<?php

session_start();
if (isset($_POST["submit"])) {

    $loginData = $_POST;
    $email = $loginData["email"];
    $userId = $loginData["userId"];
    $password = $loginData["password"];

    // guest fake data

    $guestEmail = "guest@gmail.com";
    $guestPassword = "Guest#1234";
    $guestID = '1234';

    //admin fake data
    $adminEmail = "admin@gmail.com";
    $adminPassword = "Admin#1234";
    $adminID = '1234';

   

    if ($email == $adminEmail && $userId == $adminID && $password = $adminPassword) {


        $_SESSION['status'] = true;
        $_SESSION['admin'] = true;
        setcookie('status', 'true', time() + 5000, '/');
        header('Location: ../../View/Dashboard/admin.php');
        exit(); 

    } else if ($email == $guestEmail && $userId == $guestID &&  $password == $guestPassword) {
        $_SESSION['status'] = true;
        $_SESSION['guest'] = true;
        setcookie('status', 'true', time() + 5000, '/');
        header('Location: ../../View/Dashboard/guest_dashboard.php');
        
    } else {
        header('Location: ../../View/Authentication/Login/login.php');
    }
} else {
    // echo "Invalid Credentials";
    header('location: ../../View/Authentication/Login/login.php');
    exit();
}
