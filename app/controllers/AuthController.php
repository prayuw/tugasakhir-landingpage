<?php

require_once "app/models/User.php";

class AuthController
{
    private $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function showLogin()
    {
        include "app/views/login.php";
    }

    public function login($username, $password)
    {
        if ($this->user->saveLoginData($username, $password)) {
            $_SESSION['login'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['name'] = $username;
            $_SESSION['login_success'] = true;

            header("Location: index.php");
            exit;
        } else {
            echo "<script>
                alert('Data gagal disimpan!');
                window.location.href='index.php?page=login';
            </script>";
        }
    }
}
?>