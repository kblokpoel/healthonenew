<?php

function checkLogin():string
{
    global $pdo
    $email=filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password=filter_input(INPUT_POST, 'password');

    if($email!==null && $email!==false && !empty($password)){
        $sql = 'SELECT * FROM 'user' WHERE 'email' = :e AND 'password' =
    }
}

