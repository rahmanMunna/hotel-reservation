<?php
session_start();
if ($_FILES['avatar']['name']) {
    $target_dir = "uploads/";
    $file = $target_dir . basename($_FILES["avatar"]["name"]);
    if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $file)) {
        $_SESSION['avatar'] = $file;
    }
}
header("Location: view_profile.php");
 
  if (isset($_SESSION['status']) || isset($_COOKIE['status'])){
    
} else {
    header('Location: ../Authentication/Login/login.php');
    exit();
}
?>

