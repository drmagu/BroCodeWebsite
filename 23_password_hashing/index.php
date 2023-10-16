<?php

declare(strict_types=1);

function br() {
    echo '<br />';
}

echo '<h2>Password Hashing</h2>';


$password = "pizza123";
echo "password: $password"; br();

$hash = password_hash($password, PASSWORD_DEFAULT);

echo "hash: $hash"; br();

function checkPassword($tryPass): void
{   
    global $hash;
    if (password_verify("$tryPass", $hash)) {
        echo "$tryPass is correct"; br();
        echo "You'r in!"; br();
    } else {
        echo "OOPS .. $tryPass is no good"; br();
        echo "Wrong password!"; br();
    }
}

checkPassword('hotdog333');
checkPassword('pizza123');

