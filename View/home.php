<?php
session_start();
if (isset($_SESSION['status'])) {
    // print_r($_SESSION);

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Welcome Home</title>
    </head>
    <body>
        <a href="../php/logout.php">
            <button>logout</button>
        </a>
        <a href="../View/Billing Summary/folioViewer.php">
            <button>Billing Summary</button>
        </a>
    </body>

    </html>
<?php
} else {
    header('../View/Authentication/Login/login.html');
}
?>