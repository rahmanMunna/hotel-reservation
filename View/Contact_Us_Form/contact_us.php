<?php
session_start();
if (isset($_SESSION['status']) || isset($_SESSION['status'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Contact US</title>
        <link rel="stylesheet" href="../../asset/Styles/Contact_Us/contact_us.css">

    </head>

    <body>

        <main>
            <h1>Contact Us</h1>
            <form onsubmit="return handleSend()" action="">
                <label for="">First Name</label> <br />
                <input id="first-name" type="text" placeholder="first name" /> <br />

                <label for="">Last Name</label> <br />
                <input id="last-name" type="text" placeholder="Last name" /> <br />

                <label for="">Email</label> <br />
                <input id="email" type="text" placeholder="Email" /> <br />

                <label for="">Phone</label> <br />
                <input id="phone" type="number" placeholder="Phone" /> <br />

                <label for="">Message</label> <br />
                <textarea name="" id="send-msg" placeholder="send a message"></textarea> <br />

                <p>
                    <span>

                        <span id="captcha" style="background-color: #d7e3fa; padding: 5px; border-radius: 5px; font-weight: bold;">
                        </span>
                        <span>? =</span>
                    </span>
                    <span>
                        <input style="height: 20px;" type="number" name="" id="captcha-input">
                    </span>
                </p>
                <p id="error-msg">

                </p>
                <input type="submit" value="Send" />
            </form>
        </main>

        <script src="../../asset/Javascript/contact_us/contact_us.js"></script>
    </body>

    </html>

<?php
} else {
    echo "<h1 style='color:red'>Unauthorized Access!!</h1>";
}
?>