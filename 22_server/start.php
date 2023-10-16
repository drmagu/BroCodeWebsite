<?php

declare(strict_types=1);

function br() {
    echo '<br />';
}

// echo "<h2>'\$_SERVER' Super Global</h2>";

// foreach($_SERVER as $key => $val) {
//     echo "$key = $val"; br();
// }

// PHP_SELF & REQUEST_METHOD
echo $_SERVER['PHP_SELF']; br();
echo $_SERVER['REQUEST_METHOD']; br();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>'\$_SERVER' Super Global</h2>
    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        username: <input type="text" name="username">
        <input type="submit">
    </form>
</body>
</html>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "HELLO"; br();
    }



