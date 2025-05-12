<?php

setcookie('status', 'true', time() - 10, '/');
header('Location: ../View/Authentication/Login/login.html');
// header('location: ../View/Authentication/Login.login.html');

?>