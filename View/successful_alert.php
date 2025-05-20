<?php
if (!isset($_SESSION['status']) || !isset($_COOKIE['status'])) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Successful</title>
</head>
<body>
    <h1>success</h1>
</body>
</html>

<?php
}
else{
    header('Location: ../View/Authentication/Login/login.php');
}

?>