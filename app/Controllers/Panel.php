<?php
namespace App\Controllers;

use App\Models\UsuarioModel;
use CodeIgniter\Database\BaseConnection;

class Panel extends BaseController
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function index()
    {
        if (!session()->get('usuario_id')) {
            return redirect()->to('/');
        }

        $model = new UsuarioModel();
        $usuarios = $model->findAll();

        return view('panel', ['usuarios' => $usuarios]);
    }

    public function insertar()
    {
        $nombre = $this->request->getPost('nombre');
        $correo = $this->request->getPost('correo');
        $password = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);
        $cedula = $this->request->getPost('cedula');
        $estado = $this->request->getPost('estado');

        $this->db->query("CALL sp_insertar_usuario(?, ?, ?, ?, ?)", [
            $nombre, $correo, $password, $cedula, $estado
        ]);

        return redirect()->to('/panel')->with('mensaje', 'Usuario creado correctamente.');
    }

    public function eliminar($id)
    {
        $this->db->query("CALL sp_eliminar_usuario(?)", [$id]);

        return redirect()->to('/panel')->with('mensaje', 'Usuario eliminado.');
    }
}
