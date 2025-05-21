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
  <link rel="stylesheet" href="../../../asset/Styles(Chandrima)/Amenities_List/style.css">
  
</head>
<body>
<div class="navbar">
  <a href="landing.php">Home</a>
  <a href="amenities.php">Amenities</a>
  <a href="inquiry.php">Inquiries</a>
</div>

<div class="container">
  <h2>Submit Inquiry</h2>
  <form name="inquiryForm" onsubmit="return validateInquiry();" method="POST" action="thankyou.php">
    <label>Name:</label>
    <input type="text" name="name">

    <label>Email:</label>
    <input type="email" name="email">

    <label>Message:</label>
    <textarea name="message" rows="5"></textarea>

    <label>CAPTCHA: What is 3 + 4?</label>
    <input type="text" name="captcha">

    <button type="submit">Submit</button>
  </form>
</div>
<script src="../../../asset/Javascript(Chandrima)/Amenities_List/validate_inquiry.js"></script>
</body>
</html>
