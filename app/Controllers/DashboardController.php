<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function admin()
    {
        if (session()->get('role') !== 'admin') {
            return redirect()->to('/user');
        }

        $data = [
            'username' => session()->get('username'),
            'role' => 'admin',
        ];
        return view('/dashboard-admin', $data); 
    }

    public function user()
    {
        if (session()->get('role') !== 'user') {
            return redirect()->to('/admin');
        }

        $data = [
            'username' => session()->get('username'),
            'role' => 'user',
        ];
        return view('/v_user', $data); 
    }
}
