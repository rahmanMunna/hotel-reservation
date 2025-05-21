  <?php session_start();
  if (isset($_SESSION['status']) || isset($_COOKIE['status'])){
    
} else {
    header('Location: ../Authentication/Login/login.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Inquiry Form</title>
  <link rel="stylesheet" href="style.css">
  <script src="validate.js" defer></script>
</head>
<body>
<div class="navbar">
  <a href="landing.php">Home</a>
  <a href="form.php">Contact Us</a>
</div>

<div class="container">
  <h2>Contact Us</h2>
  <form name="inquiryForm" onsubmit="return validateForm();" method="POST" action="submit_form.php">
    <label>Name:</label>
    <input type="text" name="name" placeholder="Your name">

    <label>Email:</label>
    <input type="email" name="email" placeholder="Your email">

    <label>Message:</label>
    <textarea name="message" placeholder="Your message"></textarea>

    <button type="submit">Submit</button>
  </form>
</div>
</body>
</html>
