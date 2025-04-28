<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class RoleFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = session();

        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        $role = $session->get('role');

        

        if (!in_array($role, $allowedRoles)) {
            // Jika role tidak cocok, redirect ke dashboard sesuai role
            if ($role === 'admin') {
                return redirect()->to('/admin');
            } elseif ($role === 'user') {
                return redirect()->to('/user');
            } else {
                return redirect()->to('/login');
            }
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Tidak digunakan
    }

}
