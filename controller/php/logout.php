<?php

// setcookie('status', 'true', time() - 10, '/');
session_start();
session_destroy();

header('Location: ../../View/Authentication/Login/login.html');
