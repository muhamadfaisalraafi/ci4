<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function login()
    {
        echo view('layout/header');
        echo view('pages/login');
        echo view('layout/footer');
    }

    public function regist()
    {
        echo view('layout/header');
        echo view('pages/regist');
        echo view('layout/footer');
    }
}
