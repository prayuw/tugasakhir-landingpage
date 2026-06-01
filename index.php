<?php
session_start();

require_once "app/controllers/AuthController.php";
require_once "app/controllers/PageController.php";

$page = $_GET['page'] ?? 'landing';

$auth = new AuthController();
$pageController = new PageController();

if (isset($_POST['login'])) {
    $auth->login($_POST['username'], $_POST['password']);
}

switch ($page) {
    case 'login':
        $auth->showLogin();
        break;

    case 'profile':
        $pageController->profile();
        break;

    default:
        $pageController->landing();
        break;
}
