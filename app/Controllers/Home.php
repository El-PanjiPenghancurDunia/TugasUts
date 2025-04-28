<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('dashboard-admin');
    }

    public function index1()
    {
        return view('v_user');
    }

    public function index2()
    {
        return view('v_produk');    }

    


}
