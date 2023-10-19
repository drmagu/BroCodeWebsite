<?php

declare(strict_types=1);

function br() {
    echo '<br />';
}

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
    <h4>Register</h4>
    <form method="post" action="register.php">
        Username:<br />
        <input type="text" name="username"><br />
        Password:<br />
        <input type="password" name="password"><br />
        <input type="submit" name="submit" value="Register">
    </form>
    <p>Already Registered? <a href="./login_form.php"><strong>Login</strong></a></p>
</body>
</html>