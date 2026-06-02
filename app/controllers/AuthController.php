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

    public function showRegister()
    {
        include "app/views/register.php";
    }

    public function register($username, $password)
    {
        if ($this->user->register($username, $password)) {
            echo "<script>
                alert('Registrasi berhasil! Silakan login.');
                window.location.href='index.php?page=login';
            </script>";
        } else {
            echo "<script>
                alert('Username sudah terdaftar!');
                window.location.href='index.php?page=register';
            </script>";
        }
    }

    public function login($username, $password)
    {
        $dataUser = $this->user->login($username, $password);

        if ($dataUser) {
            $_SESSION['login'] = true;
            $_SESSION['username'] = $dataUser['username'];
            $_SESSION['name'] = $dataUser['username'];
            $_SESSION['login_success'] = true;

            header("Location: index.php");
            exit;
        } else {
            echo "<script>
                alert('Login gagal! Akun belum terdaftar atau password salah.');
                window.location.href='index.php?page=login';
            </script>";
        }
    }
}
