<?php
global $params;

if (!isAdmin()){
    logout();
    header("location:/home");

}   else {
    switch ($params[2]) {
        case 'home:':
            $titleSuffix = ' | Thuis';
            include_once "../Templates/home.php";
            break;
        case 'users':
            $titleSuffix = ' | Gebruikers';
            echo "dit komt zo";
            include_once "../Templates/users.php";
            break;
        case 'uitloggen':
            logout();
            break;
        default:
            include_once "../Templates/home.php";
            break;
    }
}