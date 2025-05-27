  <?php session_start();
  if (isset($_SESSION['status']) || isset($_COOKIE['status'])){
    
} else {
    header('Location: ../../Authentication/Login/login.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Turnover Alerts</title>
  <link rel="stylesheet" href="css/style.css">
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
 
