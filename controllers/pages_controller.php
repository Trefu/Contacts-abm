<?php

class PagesController
{
    public function home()
    {
        include_once('./views/pages/home.php');
    }
    public function login()
    {
        include_once('./views/pages/login.php');
    }
};
