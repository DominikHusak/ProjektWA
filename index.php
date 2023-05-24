<?php
session_start();
$request = $_SERVER['REQUEST_URI']; 

switch ($request) {
    case '/':
        $redirect = '/views/Home.php';
        break;
    case '/home':
        $redirect = '/views/Home.php';
        break;
    case '/WAprojekt/views/about':
        $redirect = '/WAprojekt/views/About.php';
        break;
    case '/WAprojekt/views/price':
        $redirect = '/WAprojekt/views/PriceOverview.php';
        break;
    case '/WAprojekt/views/login':
        $redirect = '/WAprojekt/views/Login.php';
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