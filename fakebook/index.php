<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fakebook</title>
</head>
<body>
    <h2>Welcome to Fakebook!</h2>
    <p>We are glad that you are visiting.</p>
    <p>To explore the site you need to <a href="./login_form.php"><strong>Login</strong></a>. </p>
    <p>Of course you may have to <a href="./register_form.php"><strong>Register</strong></a> first :).</p>
</body>
</html>

<?php
session_start();
session_destroy();

