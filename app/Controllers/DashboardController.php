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
            'role' => session()->get('role')
        ];

        return view('dashboard-admin', $data); // Pastikan file v_home1.php ADA di Views
    }

    public function user()
    {
        if (session()->get('role') !== 'user') {
            return redirect()->to('/admin');
        }

        $data = [
            'username' => session()->get('username'),
            'role' => session()->get('role')
        ];

        return view('v_user', $data); // Pastikan file user.php ADA di Views
    }
}
