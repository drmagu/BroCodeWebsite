<?php

// declare(strict_types=1);

function br() {
    echo '<br />';
}

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Home Page</h2>
    <p>Welcome <?= $_SESSION['username'] ?>.</p>
    <p>You are successfully logged in</p>
    <form action="home.php" method="post">
        <input type="submit" name="logout" value="Logout">
    </form>
</body>
</html>

<?php
    if (isset($_POST['logout'])) {
        session_destroy();
        header("Location: index.php");
    }


// echo '<hr />';
// echo $_SESSION['username']; br(); 
// echo $_SESSION['password']; br();