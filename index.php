<?php
session_start();
$request = $_SERVER['REQUEST_URI'];  

switch ($request) {
    case '/waprojekt/':
        $redirect = '/views/Login.php';
        break;
    case '/home':
        $redirect = '/views/Home.php';
        break;
    case '/about':
        $redirect = '/views/About.php';
        break;
    case '/price':
        $redirect = '/views/PriceOverview.php';
        break;
    case '/login':
        $redirect = '/views/Login.php';
        break;
    case '/register':
        $redirect = '/views/Register.php';
        break;    
    default:
        require __DIR__ . '/views/404.php';
        exit();
}

$_SESSION['site'] = $redirect;
require_once __DIR__ . '/views/core/header.php';
require_once __DIR__ . $redirect;
require_once __DIR__ . '/views/core/footer.php';
?>