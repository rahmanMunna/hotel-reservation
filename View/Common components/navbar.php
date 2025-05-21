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
        <li>About</li>
        <li>Contact</li>
        <li>Login</li>
        <!-- <li></li> -->
    </nav>
</div>