<?php

declare(strict_types=1);

function br() {
    echo '<br />';
}

include('./database.php');
?>

<?php
// pick one user
$sql = "SELECT * FROM users WHERE user = 'Patrick'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    var_dump($row); br();
} else {
    echo  'No results from query'; br();
}
br();
?>

<?php
// pick all users
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row["id"]; br();
        echo $row["user"]; br();
        echo $row["reg_date"]; br();
    }
} else {
    echo  'No results from query'; br();
}
br();
?>

<?php
mysqli_close($conn);