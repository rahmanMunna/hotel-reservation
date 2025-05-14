<?php include('session.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
   <link rel="stylesheet" href="../../asset/Styles(Chandrima)/Role_Based_Access/style.css">
</head>
<body>
<div class="container">
  <h2>Welcome, <?php echo $_SESSION['username']; ?> (<?php echo $_SESSION['role']; ?>)</h2>

  <?php if ($_SESSION['role'] === 'Admin') { ?>
    <a href="role_assignment.php">Assign Roles</a><br>
    <a href="permission_settings.php">Permission Settings</a><br>
  <?php } ?>

  <?php if ($_SESSION['role'] === 'Editor') { ?>
    <p>You can edit content.</p>
  <?php } ?>

  <?php if ($_SESSION['role'] === 'User') { ?>
    <p>You can view your reservations.</p>
  <?php } ?>

  <a href="logout.php">Logout</a>
</div>
 <script src="../../asset/Javascript(Chandrima)/Role_Based_Access/validation.js"></script>
</body>
</html>
