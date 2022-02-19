<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Save extends BaseController
{
    public function __construct()
    {
        $this->authuser = new UserModel();
    }
    public function index()
    {
        //
    }
}
