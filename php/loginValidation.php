<?php

if (isset($_POST["submit"])) {
    $loginData = $_POST;
    $email = $loginData["email"];
    $userId = $loginData["userId"];
    $password = $loginData["password"];

    $userEmail = "munna@gmail.com";
    $userPassword = "Example#1234";
    $id = '1234';

    // echo "name : {$email} password : ${password}";

    if ($email == $userEmail && $userId == $id && $userPassword == $password) {
        setcookie('status', 'true', time() + 5000, '/');
        header('Location: ../View/home.html');
        exit(); // Always use exit after a header redirect

    } else {
        header('Location: ../View/Authentication/Login/login.html');
    }


} else {
    header('Location: ../View/Authentication/Login/login.html');
}

?>