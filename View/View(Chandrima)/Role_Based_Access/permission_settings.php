<?php
include('session.php');
if ($_SESSION['role'] !== 'Admin') {
    header("Location: dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Permission Settings</title>
 <link rel="stylesheet" href="../../asset/Styles(Chandrima)/Role_Based_Access/style.css">
</head>
<body>
<div class="container">
  <h2>Permission Settings</h2>
  <p>This screen is for managing role permissions (not yet functional).</p>
</div>
<script src="../../asset/Javascript(Chandrima)/Role_Based_Access/validation.js"></script>
</body>
</html>
