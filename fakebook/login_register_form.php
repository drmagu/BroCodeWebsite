<?php

declare(strict_types=1);

function br() {
    echo '<br />';
}

session_start();

include_once('./database.php');
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
    <h4>Login or Register</h4>
    <form method="post" action="login_register_form.php">
        Username:<br />
        <input type="text" name="username"><br />
        Password:<br />
        <input type="password" name="password"><br /><br />
        <input type="submit" name="submit" value="Login">
        <input type="submit" name="submit" value="Register">
    </form>
   
</body>
</html>
<?php
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // echo 'deciding..'; 
    br();
    // var_dump( $_POST); br();
    if ($_POST['submit'] == 'Login') {
        // echo 'you want to login'; br();
        // header("Location: login.php");
        include_once(__DIR__ . '/login.php');
    } else if ($_POST['submit'] == 'Register'){
        // echo 'you want to register'; br();
        // header("Location: register.php");
        include_once(__DIR__ . '/register.php');
    } else {
        echo 'huh ???' ; br();
    }
 }



