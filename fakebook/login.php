<?php

declare(strict_types=1);

function br() {
    echo '<br />';
}

session_start();

include('./database.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $username = $_POST["username"];
    $password = $_POST["password"];
    $hash = password_hash($password, PASSWORD_DEFAULT);

    // $sql = "SELECT * FROM users WHERE user = '$username' AND password = '$password'";
    // $sql = "SELECT * FROM users WHERE user = '$username' AND password = $hash";
    $sql = "SELECT * FROM users WHERE user = '$username'";
    
    echo '\$hash: ' . $hash; br();
    echo $sql; br();br();

    $result = mysqli_query($conn, $sql);
    var_dump($result);
    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        var_dump($row); br();
    
        $_SESSION['username'] = $_POST['username'];
        header("Location: home.php");
    } else {
        echo '<h4>User name or password incorrect</h4>';
        echo '<a href="./login_form.php">Continue...</a>';
    }

} else {
    header("Location: index.php");
}

mysqli_close($conn);

