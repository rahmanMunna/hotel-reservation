<?php
session_start();
if (isset($_SESSION['status'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Service Catalog</title>
        <link rel="stylesheet" href="../../Styles/Concierge Request/service_catalog.css">
    </head>

    <body>
        <main>
            <a id="" style="text-decoration: none;" href="./request_tracer.php">See Order Details</a>
            <div id="services">

            </div>
        </main>
        <script type="module" src="../../Javascript/Concierge_Request/services.js"></script>
    </body>

    </html>


<?php
} else {
    echo "<h1 style='color:red'>Unauthorized Access!!</h1>";
}
?>