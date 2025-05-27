   <?php session_start();
  if (isset($_SESSION['status']) || isset($_COOKIE['status'])){
    

?>
<!DOCTYPE html>
<html>
<head>
  <title>Preference Center</title>
  <link rel="stylesheet" href="../../../asset/Styles(Chandrima)/Guest_Profile/style.css">
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      background-color: #f0f4f8;
    }

    .navbar {
      background-color: #2c3e50;
      overflow: hidden;
      padding: 10px 0;
      text-align: center;
    }

    .navbar a {
      color: #ecf0f1;
      text-decoration: none;
      margin: 0 20px;
      font-size: 16px;
      padding: 8px 15px;
      border-radius: 4px;
    }

    .navbar a:hover {
      background-color: #1abc9c;
    }

    .container {
      max-width: 600px;
      margin: 40px auto;
      background-color: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    h2 {
      text-align: center;
      color: #2c3e50;
      margin-bottom: 30px;
    }

    form {
      display: flex;
      flex-direction: column;
    }

    label {
      margin-bottom: 8px;
      font-weight: bold;
      color: #34495e;
    }

    select, textarea {
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 14px;
      width: 100%;
      box-sizing: border-box;
    }

    textarea {
      resize: vertical;
    }

    button {
      background-color: #1abc9c;
      color: white;
      padding: 12px;
      font-size: 16px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #16a085;
    }
  </style>
</head>
<body>
<div class="navbar">
  <a href="landing.php">Home</a>
  <a href="preference_center.php">Preferences</a>
  <a href="stay_history.php">Stay History</a>
  <a href="loyalty_dashboard.php">Loyalty</a>
</div>

<div class="container">
  <h2>Preference Center</h2>
  <form name="preferenceForm" onsubmit="return validatePreferences();" method="POST" action="save_preferences.php">
    <label>Preferred Floor:</label>
    <select name="floor">
      <option value="">Select</option>
      <option value="low">Low Floor</option>
      <option value="high">High Floor</option>
    </select>

    <label>Preferred View:</label>
    <select name="view">
      <option value="">Select</option>
      <option value="sea">Sea View</option>
      <option value="city">City View</option>
    </select>

    <label>Special Requests:</label>
    <textarea name="requests" rows="4" placeholder="e.g., Allergies, Accessibility needs..."></textarea>

    <button type="submit">Save Preferences</button>
  </form>
</div>
<script src="../../../asset/Javascript(Chandrima)/Guest_Profile/profile_validate.js"></script>
</body>
</html>
<?php
} else {
    header('Location: ../..Authentication/Login/login.php');
    exit();
}
?>
 
