<?php
session_start();
// Check if 'status' cookie is set
if (isset($_COOKIE['status'])) {
    // Redirect based on session role
    if (isset($_SESSION['admin'])) {
        header('Location: ../../Dashboard/admin.php');
        exit(); 
    } else if (isset($_SESSION['guest'])) {
        header('Location: ../../Dashboard/guest_dashboard.php');
        exit();
    }
}
?>

<!-- Only shows the login form if the cookie is NOT set -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login form</title>
    <link rel="stylesheet" href="../../../asset/Styles/Authentication/login.css" />
</head>
<body>
    <div id="form-div">
        <h1>Login</h1>
        <form method="post" action="../../../controller/php/loginValidation.php" onsubmit="return handleLogin()" id="login-form">
            <table>
                <tbody>
                    <!-- <tr>
                        <td>Email</td>
                        <td>
                            <input name="email" id="email" type="email" placeholder="enter your email" required />
                        </td>
                    </tr> -->
                    <tr>
                        <td>User Id</td>
                        <td>
                            <input name="userId" id="userId" type="" placeholder="enter your User id" required />
                        </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>
                            <input name="password" id="password" type="password" placeholder="enter your password" required />
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input name="submit" id="submit-btn" type="submit" value="Login" />
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
        <p style="text-align: center;" id="error-msg"></p>
        <div id="sign-up-div">
            <p>Don't have an account?</p>
            <a href="../SignUp/signup.html">Sign up</a>
        </div>
    </div>

    <script src="../../../asset/Javascript/Authentication/login.js"></script>
</body>
</html>
