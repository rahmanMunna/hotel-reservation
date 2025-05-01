<?php
if (isset($_POST["submit"])) {
    $loginData = $_POST;
    $email = $loginData["email"];
    $userId = $loginData["userId"];
    $password = $loginData["password"];

    // echo "name : {$email} password : ${password}";
    if (isValidEmail($email)) {
        echo "Valid Email";
    } else {
        echo 'Invalid Email';
    }
} else {
    echo "Haven't submit yet";
}

function isValidEmail($email)
{
    if ($email != "") {
        $email = trim($email);
        if (strpos($email, '@') !== false) {
            list($localName, $domainName) = explode('@', $email);
            if ($domainName === 'gmail.com') {
                return true;
            }
        }
        else{
            return false;
        }
    }
    return false;
}
function isValidPassword($password) {}
