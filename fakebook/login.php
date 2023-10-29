<?php

declare(strict_types=1);

// function br() {
//     echo '<br />';
// }

// session_start();

include_once('./database.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $sql = "SELECT * FROM users WHERE user = '$username'";
    // echo $sql; br();br();

    $result = mysqli_query($conn, $sql);
    // var_dump($result); br();
    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        // var_dump($row); br();

        // verify password
        $storedHash = $row['password'];
        // echo $storedHash; br();
        if (password_verify($password, $storedHash)) {
            echo 'password OK'; br();
            $_SESSION['username'] = $_POST['username'];
            header("Location: home.php");
        } else {
            echo '<h4>User name or password incorrect</h4>';
            echo '<a href="./login_register_form.php">Continue...</a>';
        }
    } else {
        echo '<h4>User name or password incorrect</h4>';
        echo '<a href="./login_register_form.php">Continue...</a>';
    }
} else {
    // was a get request
    header("Location: index.php");
    exit;
}

mysqli_close($conn);

