<?php
// session_start();
if (isset($_SESSION['admin']) && $_SESSION['admin']) {
    $path = "../Dashboard/admin.php";
} else if (isset($_SESSION['guest']) && $_SESSION['guest']) {
    $path = "../Dashboard/guest_dashboard.php";
}

?>
<!-- Navbar -->
<!-- <link rel="stylesheet" href="../../asset/Styles/Common Styles/navbar.css"> -->
<div id="navbar">
    <nav>
        <a href="<?php echo $path; ?>">
            <li>Home</li>
        </a>
        <!-- <li>About</li> -->
        <a href="../Contact_Us_Form/contact_us.php">
            <li>Contact</li>
        </a>
        <a href="../Authentication/Login/login.php">
            <li>Login</li>
        </a>
        <!-- <li></li> -->
    </nav>
</div>