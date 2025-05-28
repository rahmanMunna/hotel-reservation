<?php
session_start();
if(isset($_SESSION['guest-id'])){
    // print_r($_SESSION);
    $user_id = $_SESSION['guest-id'];
    echo "<h1>Your Id : $user_id</h1>";
    echo "Please Login with your id and password </br>";
    echo "<h2><a href='../../View/Authentication/Login/login.php'>Login</a></h2>";
}
else{
    echo "User-id not found";
    // print_r($_SESSION);
    // header('Location: ../../View/Authentication/SignUp/signup.html');
}

?>