<?php
session_start();
if (isset($_POST["submit"])) {

    $loginData = $_POST;
    $email = $loginData["email"];
    $userId = $loginData["userId"];
    $password = $loginData["password"];

    $adminEmail = "munna@gmail.com";
    $adminPassword = "1234";
    $adminID = '1234';

    // echo "name : {$email} password : ${password}";

    if ($email == $adminEmail && $userId == $adminID && $adminPassword == $password) {

        // $_SESSION['userId'] = $userId;
        // $_SESSION['email'] = $email;
        $_SESSION['status'] = true;
        setcookie('status', 'true', time() + 5000, '/');
        header('Location:../../View/Dashboard/admin.php');
        exit(); // Always use exit after a header redirect

    } else {
        header('Location: ../../View/Authentication/Login/login.php');
    }

} else {
    header('location: ../../View/Authentication/Login/login.php');
    exit();
}
