<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AuthController extends BaseController
{
    function __construct()
    {
        // Bantu load helper form agar bisa menggunakan fungsi form_open, form_input, dsb.
        helper('form');
    }

    public function login()
    {
        // Kalau ada POST request
        if ($this->request->getPost()) {
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');

            // Data user yang disimpan hardcoded
            $dataUser = [
                'Panji' => ['password' => password_hash('123', PASSWORD_DEFAULT), 'role' => 'admin'],
                'Budi' => ['password' => password_hash('456', PASSWORD_DEFAULT), 'role' => 'user'],
            ];

            // Cek username ada atau tidak
            if (array_key_exists($username, $dataUser)) {
                $user = $dataUser[$username];
                
                if (password_verify($password, $user['password'])) {
                    // Jika login sukses, set session
                    session()->set([
                        'username' => $username,
                        'role' => $user['role'],
                        'isLoggedIn' => true,
                    ]);

                    // Redirect berdasarkan role
                    if ($user['role'] == 'admin') {
                        return redirect()->to('admin');
                    } else {
                        return redirect()->to('user');
                    }
                } else {
                    session()->setFlashdata('failed', 'Password salah.');
                    return redirect()->back();
                }
            } else {
                session()->setFlashdata('failed', 'Username tidak ditemukan.');
                return redirect()->back();
            }
        }
        // Kalau tidak ada POST, tampilkan form login
        return view('v_login');
    }

    public function logout()
    {
        session()->destroy(); // Hapus semua session
        return redirect()->to('login'); // Kembali ke halaman login

    }
}
