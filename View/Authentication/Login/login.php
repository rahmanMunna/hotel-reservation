<?php
session_start();
if (!isset($_COOKIE['status'])) {
?>
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
            <table>
                <tbody>
                    <!-- <form method="post" action="../../../php/loginValidation.php" id="login-form"> -->
                    <form method="post" action="../../../controller/php/loginValidation.php" onsubmit="return handleLogin()"
                        id="login-form">
                        <tr>
                            <td>Email</td>
                            <td>
                                <input name="email" id="email" type="email" placeholder="enter your email" />
                            </td>
                        </tr>
                        <tr>
                            <td>User Id</td>
                            <td>
                                <input name="userId" id="userId" type="number" placeholder="enter your User id" />
                            </td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>
                                <input name="password" id="password" type="password" placeholder="enter your password" />
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input name="submit" id="submit-btn" type="submit" value="Login" />
                            </td>
                        </tr>
                    </form>
                </tbody>
            </table>
            <p style="text-align: center;" id="error-msg"></p>
            <div id="sign-up-div">
                <p>Don't have an account?</p>
                <a href="../SignUp/signup.html">Sign up</a>
            </div>
        </div>

        <!-- <script src="../../../asset/Javascript/Authentication/login.js"></script> -->
    </body>

    </html>

<?php
} else {
    header('Location: ../../Dashboard/admin.php');
}
?>