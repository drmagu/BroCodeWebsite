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

    if ($username == '' or $password == '') {
        echo 'username or password can not be empty'; br();
        echo "<a href = './index.php'>Continue..</a>"; br();
        return;
    }

    $hash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (user, password)
            VALUES ('$username', '$hash')";

    try {
        mysqli_query($conn, $sql);
        echo "$username is now registered"; br();
        if (!empty($_POST['username'])) {
            $_SESSION['username'] = $_POST['username'];
        }
        header("Location: home.php");
    } 
    catch(mysqli_sql_exception) {
        echo "Could not register username <strong>$username</strong>."; br();
        echo "Username <strong>$username</strong> is in use"; br();
        echo "<a href='login_register_form.php'>Continue..</a>"; br(); 
    }
} else {
    // was a get request
    header("Location: index.php");
}

mysqli_close($conn);
