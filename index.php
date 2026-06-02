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

if (isset($_POST['register'])) {
    $auth->register($_POST['username'], $_POST['password']);
}

switch ($page) {
    case 'login':
        $auth->showLogin();
        break;

    case 'profile':
        $pageController->profile();
        break;

    case 'register':
        $auth->showRegister();
        break;

    default:
        $pageController->landing();
        break;
}

if (isset($_POST['register'])) {

    $auth->register(
        $_POST['username'],
        $_POST['password']
    );
}
