<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UsuarioModel;

class Login extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function auth()
    {
        $session = session();
        $model = new UsuarioModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $model->where('nombre_usuario', $username)->first();

        if ($user) {
            if (password_verify($password, $user['contraseña'])) {
                $session->set([
                    'usuario_id' => $user['id'],
                    'nombre_usuario' => $user['nombre_usuario'],
                    'logged_in' => true
                ]);
                return redirect()->to('/principal');
            } else {
                $session->setFlashdata('msg', 'Contraseña incorrecta');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'Usuario no encontrado');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
