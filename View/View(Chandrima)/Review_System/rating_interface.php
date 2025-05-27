 <?php session_start();
  if (isset($_SESSION['status']) || isset($_COOKIE['status'])){
?>
<?php
$rating = $comment = "";
$ratingError = $commentError = "";
$success = false;

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["rating"])) {
        $ratingError = "Rating is required.";
    } else {
        $rating = (int)$_POST["rating"];
    }

    if (empty($_POST["comment"])) {
        $commentError = "Comment cannot be empty.";
    } else {
        $comment = trim($_POST["comment"]);
    }

    if (empty($ratingError) && empty($commentError)) {
        // Save the review to a file
        $review = [
            "rating" => $rating,
            "comment" => $comment,
            "timestamp" => date("Y-m-d H:i:s")
        ];
        $data = json_encode($review) . PHP_EOL;
        file_put_contents("reviews.txt", $data, FILE_APPEND);
        $success = true;

        // Clear inputs
        $rating = $comment = "";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Rating Interface</title>
    <link rel="stylesheet" href="../../../asset/Styles(Chandrima)/Review_System/review_system.css"> 
  <style>
    body { font-family: Arial, sans-serif; background: #f0f8ff; padding: 20px; }
    h2 { color: #333; }
    .rating { display: flex; flex-direction: row-reverse; justify-content: center; }
    .rating input { display: none; }
    .rating label {
      position: relative;
      width: 1em;
      font-size: 3rem;
      color: #FFD700;
      cursor: pointer;
    }
    .rating label::before {
      content: "★";
      position: absolute;
      opacity: 0;
    }
    .rating label:hover:before,
    .rating label:hover ~ label:before {
      opacity: 1 !important;
    }
    .rating input:checked ~ label:before {
      opacity: 1;
    }
    form { max-width: 500px; margin: 0 auto; }
    textarea { width: 100%; height: 100px; margin-top: 10px; padding: 10px; }
    button { margin-top: 10px; padding: 10px 20px; background: #28a745; color: #fff; border: none; cursor: pointer; }
    .error { color: red; font-size: 0.9em; text-align: center; }
    .success { color: green; font-size: 1em; text-align: center; }
    .review-box { margin-top: 30px; background: #fff; padding: 15px; border: 1px solid #ccc; }
    .stars { color: #FFD700; font-size: 1.2em; }
  </style>
</head>
<body>

  <h2>Submit Your Review</h2>
  <?php if ($success): ?>
    <p class="success">Thank you! Your review has been submitted.</p>
  <?php endif; ?>
  <form method="POST" action="">
    <div class="rating">
      <?php for ($i = 5; $i >= 1; $i--): ?>
        <input type="radio" id="star<?= $i ?>" name="rating" value="<?= $i ?>" <?= ($rating == $i) ? 'checked' : '' ?>>
        <label for="star<?= $i ?>" title="<?= $i ?> star"></label>
      <?php endfor; ?>
    </div>
    <div class="error"><?= $ratingError ?></div>
    <textarea name="comment" placeholder="Write your comment here..."><?= htmlspecialchars($comment) ?></textarea>
    <div class="error"><?= $commentError ?></div>
    <button type="submit">Submit Review</button>
  </form>

  <!-- Display reviews -->
  <div class="review-box">
    <h2>Recent Reviews</h2>
    <?php
    if (file_exists("reviews.txt")) {
        $lines = file("reviews.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach (array_reverse($lines) as $line) {
            $review = json_decode($line, true);
            echo "<div style='margin-bottom:15px'>";
            echo "<div class='stars'>" . str_repeat("★", $review["rating"]) . str_repeat("☆", 5 - $review["rating"]) . "</div>";
            echo "<p>" . htmlspecialchars($review["comment"]) . "</p>";
            echo "<small><em>" . $review["timestamp"] . "</em></small>";
            echo "</div>";
        }
    } else {
        echo "<p>No reviews yet.</p>";
    }
    ?>
  </div>
<script src="../../../asset/Javascript(Chandrima)/Review_System/validation.js"></script>
</body>
</html>
<?php
} else {
    header('Location: ../../Authentication/Login/login.php');
    exit();
}
?>
