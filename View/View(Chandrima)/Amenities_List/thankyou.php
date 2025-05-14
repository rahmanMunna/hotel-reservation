<?php
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
?>

<!DOCTYPE html>
<html>
<head><title>Thank You</title></head>
<body>
<h2>Thank You, <?= $name ?>!</h2>
<p>Your inquiry has been received. A confirmation was sent to <?= $email ?>.</p>
</body>
</html>
