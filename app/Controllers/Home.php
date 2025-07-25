<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class Home extends BaseController
{
    public function index()
    {
        // Mostrar vista de login
        return view('login');
    }

    public function login()
    {
        $usuarioModel = new UsuarioModel();
        $usuario = $this->request->getPost('usuario');
        $clave = $this->request->getPost('clave');

        $datos = $usuarioModel->where('usuario', $usuario)->first();

        if ($datos && hash('sha256', $clave) === $datos['clave']) {
            session()->set('usuario', $usuario);
            return redirect()->to('/dashboard');
        } else {
            return redirect()->back()->with('error', 'Usuario o clave incorrectos');
        }
    }

    public function dashboard()
    {
        if (!session()->get('usuario')) {
            return redirect()->to('/');
        }

        return view('dashboard');
    }
}
