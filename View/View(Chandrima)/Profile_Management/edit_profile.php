  <?php session_start();
  if (isset($_SESSION['status']) || isset($_COOKIE['status'])){
    
 
?>
<!DOCTYPE html>
<html>
<head>
    
    <title>Edit Profile</title>
    <link rel="stylesheet" href="../../../asset/Styles(Chandrima)/Profile_Management/style.css">
</head>
<body>
    <div class="container">
        <h2>Edit Profile</h2>
        <form action="process_profile.php" method="POST" onsubmit="return validateProfileForm()">
            <label>Username:</label>
            <input type="text" name="username" id="username" value="<?php echo $_SESSION['username']; ?>">
            <label>Email:</label>
            <input type="email" name="email" id="email" value="<?php echo $_SESSION['email']; ?>">
            <button type="submit">Save Changes</button>
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
 
