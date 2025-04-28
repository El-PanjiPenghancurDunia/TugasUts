<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('v_home1');
    }

    public function index1()
    {
        return view('v_user');
    }

}
