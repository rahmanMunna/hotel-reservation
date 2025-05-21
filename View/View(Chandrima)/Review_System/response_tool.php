 <?php session_start();
  if (isset($_SESSION['status']) || isset($_COOKIE['status'])){
    
} else {
    header('Location: ../Authentication/Login/login.php');
    exit();
}
?>
<?php
// Hardcoded reviews for demonstration
$reviews = [
  [
    "name" => "Alice Brown",
    "rating" => 5,
    "comment" => "Perfect for business trips. Fast check-in and quiet rooms.",
    "type" => "business"
  ],
  [
    "name" => "Bob Johnson",
    "rating" => 4,
    "comment" => "Great for families. Kids loved the pool.",
    "type" => "family"
  ],
  [
    "name" => "Charlie Davis",
    "rating" => 3,
    "comment" => "Good location but room was small for a solo traveler.",
    "type" => "solo"
  ]
];

// Handle form selection
$selectedType = $_POST['travelerType'] ?? 'all';

// Function to display stars
function displayStars($rating) {
  return str_repeat("★", $rating) . str_repeat("☆", 5 - $rating);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Response Tool</title>
  <style>
    body { font-family: Arial, sans-serif; background: #f5f5f5; padding: 20px; }
    h2 { color: #333; }
    select { padding: 5px; margin-bottom: 20px; }
    .review { border-bottom: 1px solid #ccc; padding: 10px 0; }
    .review p { margin: 5px 0; }
  </style>
</head>
<body>

  <h2>Filter Reviews by Traveler Type</h2>
  <form method="POST" action="">
    <label for="travelerType">Select Traveler Type:</label>
    <select name="travelerType" id="travelerType" onchange="this.form.submit()">
      <option value="all" <?= $selectedType == "all" ? "selected" : "" ?>>All</option>
      <option value="business" <?= $selectedType == "business" ? "selected" : "" ?>>Business</option>
      <option value="family" <?= $selectedType == "family" ? "selected" : "" ?>>Family</option>
      <option value="solo" <?= $selectedType == "solo" ? "selected" : "" ?>>Solo</option>
      <option value="couple" <?= $selectedType == "couple" ? "selected" : "" ?>>Couple</option>
    </select>
  </form>

  <div id="reviews">
    <?php
    $found = false;
    foreach ($reviews as $review) {
      if ($selectedType === 'all' || $review['type'] === $selectedType) {
        $found = true;
        echo "<div class='review'>";
        echo "<p><strong>{$review['name']}</strong> – " . displayStars($review['rating']) . "</p>";
        echo "<p>{$review['comment']}</p>";
        echo "</div>";
      }
    }
    if (!$found) {
      echo "<p>No reviews found for this category.</p>";
    }
    ?>
  </div>

</body>
</html>
