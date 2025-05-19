<?php

function isAllLowerCase($text)
{
    return strtolower($text) === $text;
}

function isFirstCharacterNumber($text)
{
    return is_numeric($text[0]);
}

function isValidPassword($password)
{
    if (strlen($password) < 8) return false;

    $hasUpper = false;
    $hasLower = false;
    $hasSpecial = false;
    $hasNumber = false;

    $specialChars = "!@#$%&*()_+[]{}|<>?/";

    for ($i = 0; $i < strlen($password); $i++) {
        $char = $password[$i];

        if ($char >= 'A' && $char <= 'Z') {
            $hasUpper = true;
        } elseif ($char >= 'a' && $char <= 'z') {
            $hasLower = true;
        } elseif ($char >= '0' && $char <= '9') {
            $hasNumber = true;
        } elseif (strpos($specialChars, $char) !== false) {
            $hasSpecial = true;
        }

        if ($hasUpper && $hasLower && $hasNumber && $hasSpecial) {
            return true;
        }
    }

    return $hasUpper && $hasLower && $hasNumber && $hasSpecial;
}

session_start();
if (isset($_POST["submit"])) {

    $loginData = $_POST;
    $email = $loginData["email"];
    $userId = $loginData["userId"];
    $password = $loginData["password"];

    // admin fake data

    $guestEmail = "guest@gmail.com";
    $guestPassword = "1234";
    $guestID = '1234';

    //guest fake
    $adminEmail = "munna@gmail.com";
    $adminPassword = "1234";
    $adminID = '1234';

   

    if ($email == $adminEmail && $userId == $adminID && $password = $adminPassword) {


        $_SESSION['status'] = true;
        setcookie('status', 'true', time() + 5000, '/');
        header('Location: ../../View/Dashboard/admin.php');
        exit(); // Always use exit after a header redirect

    } else if ($email == $guestEmail && $userId == $guestID &&  $password == $guestPassword) {
        $_SESSION['status'] = true;
        setcookie('status', 'true', time() + 5000, '/');
        header('Location: ../../View/Dashboard/guest_dashboard.php');
        exit(); // Always use exit after a header redirect
    } else {
        header('Location: ../../View/Authentication/Login/login.php');
    }
} else {
    header('location: ../../View/Authentication/Login/login.php');
    exit();
}
