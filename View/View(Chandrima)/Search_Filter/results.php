<?php session_start();

$hotels = [
  ["name" => "Sun Hotel", "stars" => 5, "price" => 220],
  ["name" => "Moonlight Inn", "stars" => 4, "price" => 150],
  ["name" => "Budget Stay", "stars" => 3, "price" => 80],
];

$query = strtolower($_GET['query'] ?? '');
$stars = $_GET['stars'] ?? [];
$price = $_GET['price'] ?? '';

$filtered = array_filter($hotels, function($hotel) use ($query, $stars, $price) {
  if ($query && stripos($hotel['name'], $query) === false) return false;
  if ($stars && !in_array($hotel['stars'], $stars)) return false;
  if ($price == "low" && $hotel['price'] > 100) return false;
  if ($price == "medium" && ($hotel['price'] < 100 || $hotel['price'] > 200)) return false;
  if ($price == "high" && $hotel['price'] < 200) return false;
  return true;
});
?>

<!DOCTYPE html>
<html>
<head>
  <title>Results</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <h2>Results</h2>
  <?php if (count($filtered) > 0): ?>
    <ul>
      <?php foreach ($filtered as $hotel): ?>
        <li>
          <strong><?= $hotel['name'] ?></strong> - <?= $hotel['stars'] ?> stars - $<?= $hotel['price'] ?>
        </li>
      <?php endforeach; ?>
    </ul>
  <?php else: ?>
    <p>No hotels found.</p>
  <?php endif; ?>
</div>
</body>
</html>
