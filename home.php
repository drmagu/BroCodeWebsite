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
    <form action="home.php" method="post">
        <input type="submit" name="logout" value="Logout">
    </form>



    <a href="index.php">Login Page</a><br />
</body>
</html>

<?php
    if (isset($_POST['logout'])) {
        session_destroy();
        header("Location: index.php");
    }


echo '<hr />';
echo $_SESSION['username']; br(); 
echo $_SESSION['password']; br();