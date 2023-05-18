<?php
session_start();
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/waprojekt/':
        $redirect = '/views/Home.php';
        break;
    case '/home.php':
        $redirect = '/views/Home.php';
        break;
    case '/about':
        $redirect = '/views/About.php';
        break;
    case '/overview':
        $redirect = '/views/PriceOverview.php';
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