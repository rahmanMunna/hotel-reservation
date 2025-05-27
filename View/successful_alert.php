<?php
if (!isset($_SESSION['status']) || !isset($_COOKIE['status'])) {

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Successful</title>
    </head>
    <style>
        main {
            width: 20%;
            margin: auto;

        }

        h1 {
            text-align: center;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            height: 60px;
            border: 2px solid;
            padding: 10px;
            background-color: green;
            color: wheat;
            border-radius: 10px;
        }

        button {
            padding: 10px;
            font-size: 15px;
            background-color: violet;
            font-weight: bolder;
        }

        button:hover {
            background-color: wheat;
            cursor: pointer;
        }
    </style>

    <body>
        <main>
            <h1>Success!!!!!!!!</h1>
            <!-- <a href="./Dashboard/admin.php"><button>Home</button></a> -->
        </main>

    </body>

    </html>

<?php
} else {
    header('Location: ../View/Authentication/Login/login.php');
}

?>