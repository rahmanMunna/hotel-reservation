<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Preference Center</title>
  <link rel="stylesheet" href="style.css">
  <script src="profile_validate.js" defer></script>
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
</body>
</html>
