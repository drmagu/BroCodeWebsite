<?php

declare(strict_types=1);

function br() {
    echo '<br />';
}

session_start();

if (! $_SESSION['username']) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fakebook</title>
</head>
<body>
    <h2>Home</h2>
    <h4>Welcome <?= $_SESSION['username'] ?>.</h4>

    <form action="home.php" method="post">
        <input type="submit" name="logout" value="Logout">
    </form>

    <?php
    if (isset($_POST['logout'])) {
        session_destroy();
        header("Location: index.php");
    }
    ?>

    <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
    Suspendisse eros mi, tristique eget pellentesque non, fringilla vel eros. 
    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc gravida convallis mauris. 
    Duis finibus velit at fermentum luctus. Aenean id elementum odio. Curabitur sagittis luctus vulputate. 
    Donec id nisl lobortis nibh tempus porta. I
    Integer diam justo, euismod ut odio imperdiet, eleifend fringilla mauris. 
    </p>
</body>
</html>