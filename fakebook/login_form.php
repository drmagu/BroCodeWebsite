<?php

declare(strict_types=1);

function br() {
    echo '<br />';
}

session_start();

include('./database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fakebook</title>
</head>
<body>
    <h2>Welcome to Fakebook!</h2>
    <h4>Login</h4>
    <form method="post" action="login.php">
        Username:<br />
        <input type="text" name="username"><br />
        Password:<br />
        <input type="password" name="password"><br />
        <input type="submit" name="submit" value="Login">
    </form>
    <p>Need to Register? <a href="./register_form.php"><strong>Register</strong></a></p>
</body>
</html>

