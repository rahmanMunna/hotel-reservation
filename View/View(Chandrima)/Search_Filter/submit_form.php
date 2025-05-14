<?php
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

if (!$name || !$email || !$message) {
    echo "Error: Please fill all fields.";
} else {
    echo "Thank you $name, we received your message!";
    // In real use, send an email here.
}
?>
