<?php

declare(strict_types=1);

function br() {
    echo '<br />';
}

include('./database.php');

$username = "DrMagu";
$password = "amida0123";
$hash = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (user, password)
        VALUES ('$username', '$hash')";
echo $sql; br();
try {
    mysqli_query($conn, $sql);
    echo "user is registered"; br();
} 
catch(mysqli_sql_exception) {
    echo "could not register user"; br();
}
?>

<?php
mysqli_close($conn);
