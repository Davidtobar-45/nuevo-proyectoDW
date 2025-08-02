<?php
namespace App\Controllers;

use App\Models\UsuarioModel;

class Registro extends BaseController
{
    public function index()
    {
        return view('registro');
    }
    public function testconexion()
    {
        $datosconexion = \Config\Database::connect();
        if ($datosconexion->connect()) {
            echo 'Se conectó don Inge';
        } else {
            echo 'Error de conexión, a gastronomía';
        }
        
    }


    public function crear()
    {
        $usuarioModel = new UsuarioModel();

        $data = [
            'nombre'  => $this->request->getPost('nombre'),
            'correo'  => $this->request->getPost('correo'),
            'password'=> password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'cedula'  => $this->request->getPost('cedula'),
            'estado'  => $this->request->getPost('estado')
        ];

        $usuarioModel->insert($data);

        // Redirigir a la lista de usuarios después del registro
        return redirect()->to('/usuarios')->with('mensaje', 'Usuario creado correctamente.');

    }

    public function listar()
    {
        $usuarioModel = new UsuarioModel();
        $datos['usuarios'] = $usuarioModel->findAll();

        return view('usuarios', $datos);
    }
}