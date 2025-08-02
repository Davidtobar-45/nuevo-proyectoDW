<?php
namespace App\Controllers;

use App\Models\UsuarioModel;

class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function autenticar()
    {
        $correo = $this->request->getPost('correo');
        $password = $this->request->getPost('password');

        $usuarioModel = new UsuarioModel();
        $usuario = $usuarioModel->where('correo', $correo)->first();

        if ($usuario && password_verify($password, $usuario['password'])) {
            session()->set('usuario_id', $usuario['id']);
            return redirect()->to('/panel');
        } else {
            return redirect()->back()->with('error', 'Correo o contraseña incorrectos.');
        }
    }

    public function salir()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
