<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Login extends Controller
{
    public function index()
    {
        // Mostrar formulario login (puede estar en welcome_message.php o login.php)
        echo view('login.php');
    }

    public function auth()
    {
        $session = session();
        $usuario = $this->request->getPost('usuario');
        $password = $this->request->getPost('password');

        // Credenciales fijas
        if ($usuario === 'dw' && $password === '1234') {
            $session->set('isLoggedIn', true);
            $session->set('usuario', $usuario);
            return redirect()->to('/dashboard'); // Redirige a la vista bienvenida
        } else {
            $session->setFlashdata('msg', 'Usuario o contraseña incorrectos');
            return redirect()->to('/');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
