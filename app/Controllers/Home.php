<?php

namespace App\Controllers;

use App\Models\ModelDelete;
use App\Models\ModelSelect;
use App\Models\ModelInsert;

class Home extends BaseController
{
    // Vista principal del sistema (puedes cambiar si quieres)
    public function index(): string
    {
        return view('welcome_message');
    }

    // Mostrar datos combinados de usuarios y productos
    public function ViewSelect()
    {
        $model = new ModelSelect();
        $usuarios = $model->FuncionSelectUsuario();
        $productos = $model->FuncionSelectPoductos();

        $data = [
            'DatosVista' => $usuarios,
            'DatosVista1' => $productos
        ];

        return view('ViewSelect', $data);
    }

    // Método para probar conexión a la base de datos
    public function MetodoTestear()
    {
        $db = \Config\Database::connect();
        if ($db->connect()) {
            echo 'Conexión Correcta';
        } else {
            echo 'Conexión Fallida';
        }
    }

    public function index1(): string
    {
        return view('VistaLogin/Formulario1');
    }

    public function index2(): string
    {
        return view('VistaFormulario/Formulario2');
    }

    public function index3()
    {
        echo view('catalogo/header');
        echo view('catalogo/body');
        echo view('catalogo/footer');
    }

    // Mostrar formulario para insertar usuario
    public function indexInsert()
    {
        return view('ViewInsert');
    }

    // Insertar usuario nuevo con password hasheado
    public function insertUsuario()
    {
        $modelInsert = new ModelInsert();

        $data = [
            'usu_nombre' => $this->request->getPost('usu_nombre'),
            'usu_correo' => $this->request->getPost('usu_correo'),
            'usu_pass' => password_hash($this->request->getPost('usu_pass'), PASSWORD_DEFAULT),
            'usu_cedula' => $this->request->getPost('usu_cedula'),
            'usu_estado' => $this->request->getPost('usu_estado')
        ];

        if ($modelInsert->FuncionInsertUsuario($data)) {
            session()->setFlashdata('mensaje', 'Usuario registrado correctamente.');
        } else {
            session()->setFlashdata('mensaje', 'Error al registrar usuario.');
        }

        return redirect()->to(base_url('/Insert'));
    }

    // Eliminar usuario por ID
    public function eliminarUsuario($id)
    {
        $modelDelete = new ModelDelete();

        if ($modelDelete->FuncionEliminarUsuario($id)) {
            session()->setFlashdata('mensaje', 'Usuario eliminado correctamente.');
        } else {
            session()->setFlashdata('mensaje', 'Error al eliminar usuario.');
        }

        return redirect()->to(base_url('/Select'));
    }
}
