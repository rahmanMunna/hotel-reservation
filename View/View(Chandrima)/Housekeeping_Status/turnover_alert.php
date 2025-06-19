  <?php session_start();
  if (isset($_SESSION['status']) || isset($_COOKIE['status'])){
 
?>

<!DOCTYPE html>
<html>
<head>
  <title>Turnover Alerts</title>
   
</head>
<body>
  <h2>Turnover Alerts</h2>
  <ul>
    <?php
    foreach ($_SESSION['rooms'] as $room) {
      if ($room['status'] == 'Cleaning') {
        echo "<li>Room {$room['room']} is currently being cleaned.</li>";
      }
    }
    ?>
  </ul>
</body>
</html>
<?php
} else {
    header('Location: ../../Authentication/Login/login.php');
    exit();
}
?>
 
