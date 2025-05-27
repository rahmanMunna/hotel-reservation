 <?php session_start();
  if (isset($_SESSION['status']) || isset($_COOKIE['status'])){
    
 
?>

<?php include('session.php'); ?>
<?php
// Example session data
$_SESSION['username'] = 'johndoe';
$_SESSION['email'] = 'john@example.com';
$_SESSION['avatar'] = 'uploads/avatar1.jpg';
?>

<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" href="../../../asset/Styles(Chandrima)/Profile_Management/style.css">
    <title>View Profile</title>
</head>
<body>
    <div class="container">
        <h2>Profile</h2>
        <img src="<?php echo $_SESSION['avatar']; ?>" class="avatar">
        <p><strong>Username:</strong> <?php echo $_SESSION['username']; ?></p>
        <p><strong>Email:</strong> <?php echo $_SESSION['email']; ?></p>
        <a href="edit_profile.php">Edit Profile</a> |
        <a href="update_password.php">Change Password</a> |
        <a href="change_avatar.php">Change Avatar</a>
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
 