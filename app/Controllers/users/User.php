<?php

namespace App\Controllers\users;

use App\Controllers\BaseController;

class User extends BaseController
{
    public function homePage()
    {
        echo view('layout/templates');
        echo view('user/homePage');
        echo view('layout/footer');
    }
}
