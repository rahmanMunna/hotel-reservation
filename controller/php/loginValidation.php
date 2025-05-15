<?php
session_start();
if (isset($_POST["submit"])) {
    $_SESSION['status'] = true;
    header('location: ../../View/Dashboard/adminDashboard.php');
    exit();
    // $loginData = $_POST;
    // $email = $loginData["email"];
    // $userId = $loginData["userId"];
    // $password = $loginData["password"];

    // $userEmail = "munna@gmail.com";
    // $userPassword = "Example#1234";
    // $id = '1234';

    // echo "name : {$email} password : ${password}";

    // if ($email == $userEmail && $userId == $id && $userPassword == $password) {
    //     $_SESSION['status'] = true;
    //     $_SESSION['userId'] = $userId;
    //     $_SESSION['email'] = $email;
    //     setcookie('status', 'true', time() + 5000, '/');
    //     
    //     exit(); // Always use exit after a header redirect

    // } else {
    //     header('Location: ../../View/Authentication/Login/login.html');
    // }
    
    // header('Location : ../../View/Dashboard/adminDashboard.php');
    
} else {
    header('location: ../../View/Authentication/Login/login.html');
    exit();
}
