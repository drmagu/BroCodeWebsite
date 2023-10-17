<?php

declare(strict_types=1);

function br() {
    echo '<br />';
}

session_start();

include('./database.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "Trying to register "; 
    echo "'" . $_POST["username"] . "'"; br();
    $username = $_POST["username"];
    $password = $_POST["password"];
    $hash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (user, password)
            VALUES ('$username', '$hash')";

    // $sql = "INSERT INTO users (user, password)
    //          VALUES ('$username', '$password')";
    
    echo $sql; br();
    try {
        mysqli_query($conn, $sql);
        echo "$username is now registered"; br();
        if (!empty($_POST['username'])) {
            $_SESSION['username'] = $_POST['username'];
        }
        header("Location: home.php");
    } 
    catch(mysqli_sql_exception) {
        echo "could not register $username"; br();
        echo "$username already registered"; br();
        echo "<a href='index.php'>Register</a>"; br(); 
    }
} else {
    header("Location: index.php");
}

mysqli_close($conn);
