<?php

namespace App\Controllers;

use App\Models\ModelDelete;
use App\Models\ModelSelect;
use App\Models\ModelInsert;

class Home extends BaseController
{
    // Muestra el login (vista principal)
    public function index(): string
    {
        return view('welcome_message');
    }

    // Autenticación simple sin base de datos
    public function autenticar()
    {
        $usuario = $this->request->getPost('usuario');
        $clave = $this->request->getPost('clave');

        // Usuario y clave fijos para pruebas (puedes cambiarlos)
        if ($usuario === 'admin' && $clave === '1234') {
            return redirect()->to(base_url('ViewSelect'));
        } else {
            return redirect()->to(base_url('/'))->with('error', 'Credenciales incorrectas');
        }
    }

    // Vista para tabla combinada
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

    public function indexInsert()
    {
        return view('ViewInsert');
    }

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
            session()->setFlashdata('mensaje', ':) Inserción correcta 👍');
        } else {
            session()->setFlashdata('mensaje', ':"( Inserción fallida 👎');
        }

        return redirect()->to(base_url('/Select'));
    }

    public function eliminarUsuario($id)
    {
        $modelDelete = new ModelDelete();

        if ($modelDelete->FuncionEliminarUsuario($id)) {
            session()->setFlashdata('mensaje', ':) Eliminación correcta 👍');
        } else {
            session()->setFlashdata('mensaje', ':"( Eliminación fallida 👎');
        }

        return redirect()->to(base_url('/Select'));
    }
}
