<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AuthController extends BaseController
{
    function __construct()
    {
        helper('form');
    }

    public function login()
    {
        if ($this->request->getPost()) {
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');

            $dataUser = [
                'Panji' => ['password' => password_hash('123', PASSWORD_DEFAULT), 'role' => 'admin'],
                'Budi' => ['password' => password_hash('456', PASSWORD_DEFAULT), 'role' => 'user'],
            ];

            if (array_key_exists($username, $dataUser)) {
                $user = $dataUser[$username];
                if (password_verify($password, $user['password'])) {
                    session()->set([
                        'username' => $username,
                        'role' => $user['role'],
                        'isLoggedIn' => true,
                    ]);

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

        return view('v_login');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }
}
