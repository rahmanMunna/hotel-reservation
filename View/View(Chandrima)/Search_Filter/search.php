  <?php session_start();
  if (isset($_SESSION['status']) || isset($_COOKIE['status'])){
    
} else {
    header('Location: ../../Authentication/Login/login.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Hotel Search</title>
  <link rel="stylesheet" href="style.css">
  <script src="search.js" defer></script>
</head>
<body>
<div class="navbar">
  <a href="landing.php">Home</a>
  <a href="search.php">Search Hotels</a>
</div>

<div class="container">
  <h2>Search Hotels</h2>
  <form method="GET" action="results.php" id="searchForm">
    <input type="text" name="query" placeholder="Enter hotel name or location" id="searchInput">

    <div class="filters">
      <h4>Filter by Stars:</h4>
      <label><input type="checkbox" name="stars[]" value="3"> 3 Star</label>
      <label><input type="checkbox" name="stars[]" value="4"> 4 Star</label>
      <label><input type="checkbox" name="stars[]" value="5"> 5 Star</label>

      <h4>Price Range:</h4>
      <select name="price">
        <option value="">Select Range</option>
        <option value="low">Below $100</option>
        <option value="medium">$100 - $200</option>
        <option value="high">Above $200</option>
      </select>
    </div>

    <button type="submit">Search</button>
  </form>
</div>
</body>
</html>
