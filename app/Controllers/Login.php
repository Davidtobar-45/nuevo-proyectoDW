<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Login extends Controller
{
    public function index()
    {
        return view('login'); // muestra el formulario
    }

    public function login()
    {
        $correo = $this->request->getPost('correo');
        $password = $this->request->getPost('password');

        // Aquí deberías validar el usuario con la base de datos

        if ($correo === 'admin@demo.com' && $password === '123456') {
            // Usuario válido: redirige a dashboard
            return redirect()->to(base_url('dashboard'));
        } else {
            // Usuario no válido: redirige al login con error
            return redirect()->back()->with('error', 'Credenciales inválidas');
        }
    }
}
