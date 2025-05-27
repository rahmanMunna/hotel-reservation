<?php
if (isset($_POST['submit'])) {

    $firstName = trim($_POST["firstName"]);
    $lastName = trim($_POST["lastName"]);
    $email = trim($_POST["email"]);
    $phone = trim($_POST["phone"]);
    $dob = trim($_POST["dob"]);
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];




    //Redirect to sign up page
    // function redirectBack()
    // {
    //     header('Location: ../View/Authentication/SignUp/signup.html');
    // }

    // // Check for empty fields
    // if (
    //     $firstName === '' || $lastName === '' || $email === '' ||
    //     $phone === '' || $dob === '' || $password === '' || $confirmPassword === ''
    // ) {
    //     redirectBack();
    // }

    // // Email validation
    // if (strpos($email, '@') === false) {
    //     redirectBack();
    // }

    // $emailParts = explode('@', $email, 2);
    // if (count($emailParts) !== 2) {
    //     redirectBack();
    // }

    // list($localPart, $domain) = $emailParts;

    // if ($domain !== 'gmail.com') {
    //     redirectBack();
    // }

    // if ($localPart !== strtolower($localPart)) {
    //     redirectBack();
    // }

    // $firstChar = $localPart[0] ?? '';
    // if ($firstChar >= '0' && $firstChar <= '9') {
    //     redirectBack();
    // }

    // if (strpos($localPart, ' ') !== false) {
    //     redirectBack();
    // }

    // // Password validation
    // function isValidPassword($password)
    // {
    //     if (strlen($password) < 8) return false;

    //     $hasUpper = false;
    //     $hasLower = false;
    //     $hasSpecial = false;
    //     $hasNumber = false;

    //     $specialChars = "!@#$";

    //     for ($i = 0; $i < strlen($password); $i++) {
    //         $char = $password[$i];

    //         if ($char >= 'A' && $char <= 'Z') $hasUpper = true;
    //         else if ($char >= 'a' && $char <= 'z') $hasLower = true;
    //         else if (strpos($specialChars, $char) !== false) $hasSpecial = true;
    //         else if ($char >= '0' && $char <= '9') $hasNumber = true;

    //         if ($hasUpper && $hasLower && $hasSpecial && $hasNumber) {
    //             return true;
    //         }
    //     }

    //     return false;
    // }

    // if (!isValidPassword($password)) {
    //     redirectBack();
    // }

    // // Confirm password check
    // if ($password !== $confirmPassword) {
    //     redirectBack();
    // }

    // // Phone validation
    // if (strlen($phone) !== 11) {
    //     redirectBack();
    // }

    // if ($phone[0] !== '0' || $phone[1] !== '1') {
    //     redirectBack();
    // }

    $role = "guest";
    $user = "g-12";

    // echo "First Name: " . $firstName . "<br>";
    // echo "Last Name: " . $lastName . "<br>";
    // echo "Email: " . $email . "<br>";
    // echo "Phone: " . $phone . "<br>";
    // echo "Date of Birth: " . $dob . "<br>";
    // echo "Password: " . $password . "<br>";
    // echo "Confirm Password: " . $confirmPassword . "<br>";

    // session_start();
    // $_SESSION['user'] = [
    //     'user_id' => $_POST[''],
    //     'email' => $_POST['email'],
    //     'phone' => $_POST['phone'],
    //     'first_name' => $_POST['firstName'],
    //     'last_name' => $_POST['lastName'],
    //     'dob' => $_POST['dob'],
    //     'role' => 'user',
    //     'password' => $_POST['password'],
    // ];

    // Redirect to insert file
    header("Location: insert.php");
    exit;



    $query = "INSERT INTO `users` 
        (`user_id`, `email`, `phone`, `first_name`, `last_name`, `dob`, `role`, `password`) 
        VALUES ('g-12', '$email', '$phone', '$firstName', '$lastName', '$dob', '$role', '$password')";



    $location = "127.0.0.1";
    $userName = "root";
    $password = "";
    $dbName = "hotel-reservation";

    // Connect to DB
    $connection = mysqli_connect($location, $userName, $password, $dbName);
    $result = mysqli_query($connection, $query);

    if ($result) {
        echo "successfully inserted";
    } else {
        echo "Unsuccessful";
    }




    //Set success cookie and redirect
    // $_SESSION['status'] = true;
    // setcookie('status', 'true', time() + 5000, '/');
    // header('../../View/Dashboard/guest_dashboard.php');
    // exit();

    // function insertToDb() {}
} else {
    header("Location: ../../View/Authentication/SignUp/signup.html");
    exit;
}
