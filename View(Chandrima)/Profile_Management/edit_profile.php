<?php include('session.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <script src="validation.js"></script>
    <title>Edit Profile</title>
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
</body>
</html>
