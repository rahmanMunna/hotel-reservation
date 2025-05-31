<?php
if (isset($_POST["submit"])) {

    function isAllLowerCase($text)
    {
        return strtolower($text) === $text;
    }

    function isFirstCharNumber($text)
    {
        return is_numeric($text[0]);
    }

    // Get trimmed inputs
    $firstName = trim($_POST["firstName"]);
    $lastName = trim($_POST["lastName"]);
    $email = trim($_POST["email"]);
    $phone = trim($_POST["phone"]);
    $dob = trim($_POST["dob"]);
    $role = trim($_POST["role"]);
    $joiningDate = trim($_POST["joiningDate"]);


    $isValid = true;


    if (
        empty($firstName) || empty($lastName) || empty($email) || empty($phone) ||
        empty($dob) || empty($role) || empty($joiningDate)
    ) {
        $isValid = false;
    }


    if ($isValid) {
        if (!str_contains($email, '@')) {
            $isValid = false;
        } else {
            [$localPart, $domain] = explode('@', $email);
            if (
                $domain !== 'gmail.com' ||
                !isAllLowerCase($localPart) ||
                isFirstCharNumber($localPart) ||
                str_contains($localPart, ' ')
            ) {
                $isValid = false;
            }
        }
    }


    if ($isValid) {
        if (strlen($phone) !== 11 || substr($phone, 0, 2) !== '01') {
            $isValid = false;
        }
    }

    // header('Location: ../../View/successful_alert.php');

    //decision
    if ($isValid) {
        header('Location: ../../View/successful_alert.php');
        
    }else{
        echo "failed";
    } 
}
