<?php
session_start();
// Sample room status data
$_SESSION['rooms'] = [
  ['room' => '101', 'status' => 'Ready'],
  ['room' => '102', 'status' => 'Cleaning'],
  ['room' => '103', 'status' => 'Maintenance']
];
  
  if (isset($_SESSION['status']) || isset($_COOKIE['status'])){
    
?>

<!DOCTYPE html>
<html>
<head>
  <title>Room Status Board</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <h2>Room Status Board</h2>
  <table>
    <tr><th>Room</th><th>Status</th></tr>
    <?php foreach ($_SESSION['rooms'] as $room): ?>
      <tr>
        <td><?= htmlspecialchars($room['room']) ?></td>
        <td><?= htmlspecialchars($room['status']) ?></td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>
</html>
<?php
} else {
    header('Location: ../../Authentication/Login/login.php');
    exit();
}
?>
 
