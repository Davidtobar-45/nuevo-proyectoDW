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

        // Verifica las credenciales (fijas)
        if ($usuario === 'dw' && $password === '1234') {
            // Guarda sesión
            $session->set('isLoggedIn', true);
            $session->set('usuario', $usuario);

            // Redirecciona a la vista welcome.php
            return redirect()->to('/welcome');
        } else {
            // Guarda mensaje de error y redirige al login
            $session->setFlashdata('error', 'Usuario o contraseña incorrectos');
            return redirect()->to('/');
        }
    }

    // Muestra la vista welcome solo si está logueado
    public function welcome()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/');
        }

        return view('welcome'); // Carga app/Views/welcome.php
    }

    // Cierra la sesión
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}