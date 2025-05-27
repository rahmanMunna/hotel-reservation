  <?php session_start();
  if (isset($_SESSION['status']) || isset($_COOKIE['status'])){

?>
<!DOCTYPE html>
<html>
<head>
    
    <title>Update Password</title>

       <link rel="stylesheet" href="../../../asset/Styles(Chandrima)/Profile_Management/style.css">
</head>
<body>
    <div class="container">
        <h2>Change Password</h2>
        <form onsubmit="return validatePasswordForm()">
            <label>New Password:</label>
            <input type="password" id="new_pass">
            <label>Confirm Password:</label>
            <input type="password" id="confirm_pass">
            <button type="submit">Update Password</button>
        </form>
    </div>
    <script src="../../../asset/Javascript(Chandrima)/Profile_Management/validation.js"></script>
</body>
</html>
<?php
    
} else {
    header('Location: ../../Authentication/Login/login.php');
    exit();
}
?>
