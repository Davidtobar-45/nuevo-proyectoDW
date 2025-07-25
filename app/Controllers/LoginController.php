<?php

namespace App\Controllers;

class LoginController extends BaseController
{
    public function index()
    {
        return view('login'); // Vista de formulario de login
    }

    public function login()
    {
        $usuario = $this->request->getPost('usuario');
        $clave = $this->request->getPost('clave');

        // Validación básica (ejemplo)
        if ($usuario == 'admin' && $clave == 'admin123') {
            session()->set('usuario', $usuario);
            return redirect()->to('/dashboard');
        } else {
            return redirect()->back()->with('mensaje', 'Credenciales incorrectas');
        }
    }

    public function dashboard()
    {
        if (!session()->has('usuario')) {
            return redirect()->to('/');
        }
        return view('dashboard'); // Esta es la vista que debe existir
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
