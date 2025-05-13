<?php
session_start();
if (isset($_SESSION['status'])) {
?>
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Tracer</title>
    <link rel="stylesheet" href="../../asset/Styles/Concierge Request/request_tracer.css">
</head>

<body>
    <div id="heading">
        <button id="back-btn">
            <a style="text-decoration: none;" href="./service_catalog.html">back</a>
        </button>
        <h2>Your Requested Order</h2>
    </div>
    <main>
    </main>


    <script type="module" src="../../asset/Javascript/Concierge_Request/request_tracer.js"></script>
</body>

</html>

<?php
} else {
    echo "<h1 style='color:red'>Unauthorized Access!!</h1>";
}
?>