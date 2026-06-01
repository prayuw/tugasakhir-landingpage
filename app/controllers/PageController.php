<?php

class PageController
{
    public function landing()
    {
        include "app/views/landing.php";
    }

    public function profile()
    {
        if (!isset($_SESSION['login'])) {
            header("Location: index.php?page=login");
            exit;
        }

        include "app/views/profile.php";
    }
}
