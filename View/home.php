<?php
session_start();
if (isset($_SESSION['status'])) {
    // print_r($_SESSION);
    $userId = $_SESSION['userId'];
    $email = $_SESSION['email'];

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Welcome Home</title>
        <link rel="stylesheet" href="home.css">
    </head>

    <body>
        <!-- sidebar -->
        <div id=sidebar>
            <div>
                <p><?= htmlspecialchars($email) ?></p>
                <p><?= htmlspecialchars($userId) ?></p>
            </div>

            <a href="../View/Concierge Request/service_catalog.php">
                <button>Service Catalog</button>
            </a>
            <a href="../View/Group Booking/group_manager.php">
                <button>Group Booking</button>
            </a>
            <a href="../View/Group Booking/group_block_tool.php">
                <button>Group Booking Tool</button>
            </a>
            <a href="../View/Group Booking/event_planner.php">
                <button>Event Planner</button>
            </a>
            <a href="../View/Billing Summary/folioViewer.php">
                <button>Billing Summary</button>
            </a>
            <a href="../View/Cancellation Policy/termsDisplay.php">
                <button>Cancellation Policy</button>
            </a>
            <a href="../View/Contact_Us_Form/contact_us.php">
                <button>Contact Us</button>
            </a>

            <a href="../controller/php/logout.php">
                <button>logout</button>
            </a>
        </div>
    </body>

    </html>
<?php
} else {
    header('../View/Authentication/Login/login.html');
}
?>