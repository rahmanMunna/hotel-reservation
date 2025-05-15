<?php
session_start();
if (isset($_SESSION['status'])) {
    // print_r($_SESSION);
    // $userId = $_SESSION['userId'];
    // $email = $_SESSION['email'];

?>
  
<?php
} else {
    header('Location : ../Authentication/Login/login.html');
}
?>