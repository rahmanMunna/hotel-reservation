<?php
session_start();
if (isset($_POST["submit"])) {

    $loginData = $_POST;
    // $email = $loginData["email"];
    $userId = $loginData["userId"];
    $password = $loginData["password"];

    $location = "127.0.0.1";
    $userName = "root";
    $DbPassword = "";
    $dbName = "hotel-reservation";

    $query = "SELECT password,role,id from users WHERE user_id = '$userId'";
    // Connect to DB
    $connection = mysqli_connect($location, $userName, $DbPassword, $dbName);
    $result = mysqli_query($connection, $query);
    if ($row = mysqli_fetch_assoc($result)) {
        $dbPass = $row['password'];
        $role = $row['role'];

        if ($dbPass == $password) {
            $_SESSION['status'] = true;
            $_SESSION['user-id'] = $userId;
            $_SESSION['id'] = $row['id'];
            setcookie('status', 'true', time() + 5000, '/');
            if ($role == 'admin') {
                header('Location: ../../View/Dashboard/admin.php');
                
            } else if ($role == 'guest') {
                header('Location: ../../View/Dashboard/guest_dashboard.php');
                
            }
        } else {
            header('Location: ../../View/Authentication/Login/login.php');
        }
    } else {

        header('Location: ../../View/Authentication/Login/login.php');
    }
} else {
    // echo "Invalid Credentials";
    header('location: ../../View/Authentication/Login/login.php');
   
}
