<?php

if (isset($_POST['submit'])) {
    $firstName = trim($_POST["firstName"] ?? '');
    $lastName = trim($_POST["lastName"] ?? '');
    $email = trim($_POST["email"] ?? '');
    $phone = trim($_POST["phone"] ?? '');
    $dob = trim($_POST["dob"] ?? '');
    $password = $_POST["password"] ?? '';
    $confirmPassword = $_POST["confirmPassword"] ?? '';

    // Redirect helper
    function redirectBack()
    {
        header('Location: ../View/Authentication/SignUp/signup.html');
        exit;
    }

    // Check for empty fields
    if (
        $firstName === '' || $lastName === '' || $email === '' ||
        $phone === '' || $dob === '' || $password === '' || $confirmPassword === ''
    ) {
        redirectBack();
    }

    // Email validation
    if (strpos($email, '@') === false) {
        redirectBack();
    }

    $emailParts = explode('@', $email, 2);
    if (count($emailParts) !== 2) {
        redirectBack();
    }

    list($localPart, $domain) = $emailParts;

    if ($domain !== 'gmail.com') {
        redirectBack();
    }

    if ($localPart !== strtolower($localPart)) {
        redirectBack();
    }

    $firstChar = $localPart[0] ?? '';
    if ($firstChar >= '0' && $firstChar <= '9') {
        redirectBack();
    }

    if (strpos($localPart, ' ') !== false) {
        redirectBack();
    }

    // Password validation
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

            if ($char >= 'A' && $char <= 'Z') $hasUpper = true;
            else if ($char >= 'a' && $char <= 'z') $hasLower = true;
            else if (strpos($specialChars, $char) !== false) $hasSpecial = true;
            else if ($char >= '0' && $char <= '9') $hasNumber = true;

            if ($hasUpper && $hasLower && $hasSpecial && $hasNumber) {
                return true;
            }
        }

        return false;
    }

    if (!isValidPassword($password)) {
        redirectBack();
    }

    // Confirm password check
    if ($password !== $confirmPassword) {
        redirectBack();
    }

    // Phone validation
    if (strlen($phone) !== 11) {
        redirectBack();
    }

    if ($phone[0] !== '0' || $phone[1] !== '1') {
        redirectBack();
    }

    // Set success cookie and redirect
    $_SESSION['status'] = true;
    // setcookie('status', 'true', time() + 5000, '/');
    header('Location: ../View/home.html');
    exit;
} else {
    header('Location: ../View/Authentication/SignUp/signup.html');
    exit;
}
