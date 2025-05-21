<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
 session_start();
  if (isset($_SESSION['status']) || isset($_COOKIE['status'])){
    
} else {
    header('Location: ../Authentication/Login/login.php');
    exit();
}

?>
