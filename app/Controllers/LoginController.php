<?php
namespace App\Controllers;

class LoginController extends BaseController
{
    public function index()
    {
        return view('welcome_message'); // Vista login
    }

    public function autenticar()
    {
        $correo = $this->request->getPost('correo');
        $clave = $this->request->getPost('clave');

        // Usuario y contraseña fijos para prueba
        $usuario_valido = 'admin@correo.com';
        $clave_valida = '123';

        if ($correo === $usuario_valido && $clave === $clave_valida) {
            session()->set('usuario', ['correo' => $correo]);
            return redirect()->to('/viewselect');
        } else {
            return redirect()->back()->with('error', 'Credenciales inválidas');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
