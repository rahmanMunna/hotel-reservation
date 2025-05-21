<?php
include('session.php');
if ($_SESSION['role'] !== 'Admin') {
    header("Location: dashboard.php");
    exit();
}
  session_start();
  if (isset($_SESSION['status']) || isset($_COOKIE['status'])){
    
} else {
    header('Location: ../Authentication/Login/login.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Permission Settings</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <h2>Permission Settings</h2>
  <p>This screen is for managing role permissions (not yet functional).</p>
</div>
</body>
</html>
