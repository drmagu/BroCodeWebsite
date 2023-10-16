<?php

declare(strict_types=1);

$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "businessdb";
$conn = "";

global $conn;
function connect($db_server, $db_user, $db_pass, $db_name){
    try {
        $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
        return $conn;
    }
    catch (mysqli_sql_exception) {
        echo 'could not connect! <br />';
    
    }
    return $conn;
}

// test
$conn = connect($db_server, $db_user, $db_pass, $db_name);
if($conn) {
    echo'conection established <br />';
    var_dump($conn); br();
}
