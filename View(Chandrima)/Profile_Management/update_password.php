<?php include('session.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/validation.js"></script>
    <title>Update Password</title>
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
</body>
</html>
