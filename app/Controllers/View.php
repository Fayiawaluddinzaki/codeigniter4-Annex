<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class View extends BaseController
{
    public function index()
    {
        return view('pages/home');
    }
}
