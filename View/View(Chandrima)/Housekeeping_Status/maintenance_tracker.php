<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $_SESSION['maintenance'][] = $_POST['issue'];

}
  if (isset($_SESSION['status']) || isset($_COOKIE['status'])){
  

?>
 

<!DOCTYPE html>
<html>
<head>
  <title>Maintenance Tracker</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <h2>Report Maintenance Issue</h2>
  <form method="post" onsubmit="return validateIssueForm()">
    <textarea name="issue" id="issue" placeholder="Describe the issue..." required></textarea>
    <button type="submit">Report</button>
  </form>

  <h3>Reported Issues</h3>
  <ul>
    <?php if (!empty($_SESSION['maintenance'])): ?>
      <?php foreach ($_SESSION['maintenance'] as $issue): ?>
        <li><?= htmlspecialchars($issue) ?></li>
      <?php endforeach; ?>
    <?php endif; ?>
  </ul>

  <script src="../../../asset/Javascript(Chandrima)/Housekeeping_Status/validate_maintenance.js"></script>
</body>
</html>
<?php
} else {
    header('Location: ../../Authentication/Login/login.php');
    exit();
}
?>
 
