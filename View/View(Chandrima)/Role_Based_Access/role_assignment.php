 <?php session_start();
  if (isset($_SESSION['status']) || isset($_COOKIE['status'])){
    
} else {
    header('Location: ../Authentication/Login/login.php');
    exit();
}
?>

<?php
include('session.php');
if ($_SESSION['role'] !== 'Admin') {
    header("Location: dashboard.php");
    exit();
}

$users = json_decode(file_get_contents('data/users.json'), true);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($users as &$user) {
        if ($user['username'] === $_POST['user']) {
            $user['role'] = $_POST['role'];
        }
    }
    file_put_contents('data/users.json', json_encode($users, JSON_PRETTY_PRINT));
    header("Location: role_assignment.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Assign Roles</title>
  <link rel="stylesheet" href="style.css">
  <script src="validation.js"></script>
</head>
<body>
<div class="container">
  <h2>Assign Role to Users</h2>
  <form method="POST" onsubmit="return validateRoleForm();">
    <label>Select User:</label>
    <select name="user">
      <?php foreach ($users as $u) echo "<option value='{$u['username']}'>{$u['username']}</option>"; ?>
    </select>

    <label>Assign Role:</label>
    <select name="role">
      <option value="">--Select Role--</option>
      <option value="Admin">Admin</option>
      <option value="Editor">Editor</option>
      <option value="User">User</option>
    </select>

    <button type="submit">Assign</button>
  </form>
</div>
</body>
</html>
