<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function admin()
    {
        // Cek role, jika bukan admin redirect ke user
        if (session()->get('role') !== 'admin') {
            return redirect()->to('/user');
        }

        // Kirim data username dan role ke view
        $data = [
            'username' => session()->get('username'),
            'role' => session()->get('role')
        ];

        // Tampilkan dashboard admin
        return view('dashboard-admin', $data); 
    }

    public function user()
    {
        // Cek role, jika bukan user redirect ke admin
        if (session()->get('role') !== 'user') {
            return redirect()->to('/admin');
        }

        $data = [
            'username' => session()->get('username'),
            'role' => session()->get('role')
        ];

        // Tampilkan dashboard user
        return view('v_user', $data); 
    }
}
