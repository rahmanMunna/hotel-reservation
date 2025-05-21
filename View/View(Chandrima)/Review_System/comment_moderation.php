 <?php session_start();
  if (isset($_SESSION['status']) || isset($_COOKIE['status'])){
    
} else {
    header('Location: ../Authentication/Login/login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Comment Moderation</title>
  <style>
    body { font-family: Arial, sans-serif; background: #fffaf0; padding: 20px; }
    h2 { color: #333; }
    .review { border-bottom: 1px solid #ccc; padding: 10px 0; }
    .review p { margin: 5px 0; }
    .response { margin-left: 20px; background: #f9f9f9; padding: 10px; border-left: 3px solid #28a745; }
  </style>
</head>
<body>
  <h2>Customer Reviews</h2>

  <?php
    // Sample data - in real use, this would come from a database
    $reviews = [
      [
        "name" => "John Doe",
        "rating" => 4,
        "comment" => "Great service and comfortable rooms.",
        "response" => "Thank you for your feedback, John! We're glad you enjoyed your stay."
      ],
      [
        "name" => "Jane Smith",
        "rating" => 3,
        "comment" => "Room was clean but the Wi-Fi was slow.",
        "response" => "We apologize for the inconvenience, Jane. We're working to improve our internet services."
      ]
    ];

    // Function to display stars
    function displayStars($rating) {
      $stars = str_repeat("★", $rating);
      $stars .= str_repeat("☆", 5 - $rating);
      return $stars;
    }

    // Output reviews
    foreach ($reviews as $review) {
      echo "<div class='review'>";
      echo "<p><strong>{$review['name']}</strong> – " . displayStars($review['rating']) . "</p>";
      echo "<p>{$review['comment']}</p>";
      echo "<div class='response'>";
      echo "<p><strong>Manager Response:</strong> {$review['response']}</p>";
      echo "</div>";
      echo "</div>";
    }
  ?>

</body>
</html>
