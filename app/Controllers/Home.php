<?php

namespace App\Controllers;

use App\Models\ModelSelect;
use App\Models\ModelInsert;
use App\Models\ModelDelete;
use App\Models\ModelUpdate;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function index1(): string
    {
        return view('Vistalogin/Formulario1');
    }
    public function index2(): string
    {
        return view('VistasFormularios/Formulario2');
    }
    public function index3(): void
    {
        echo view('catalogo/header');
        echo view('catalogo/body');
        echo view('catalogo/footer');
    }
    public function suma(): string
    {
        return view('VistasFormularios/Formulario2');
    }

    // ruta test bdd
    public function MetodoTestear()
    {
        $db = \Config\Database::connect();
        if ($db->connect()) {
            echo 'Conexion Correcta';
        } else {
            echo 'Conexion Faliida';
        }
    }

    public function ControladorSelectFuncion()
    {
        $objetoInstancia = new ModelSelect();
        $datosUsuario = $objetoInstancia->FuncionSelectUsuario();
        
        return view('ViewSelect', [
            'DatosVista' => $datosUsuario
        ]);
    }

    // metodo de vista del insert
    public function indexInsert()
    {
        $modelSelect = new ModelSelect();
        $data = [
            'departamentos' => $modelSelect->getDepartamentos(),
            'ciudades' => $modelSelect->getCiudades(),
            'provincias' => $modelSelect->getProvincias(),
            'estados' => $modelSelect->getEstados()
        ];
        return view('ViewInsert', $data);
    }
    public function editUsuario($id = null)
    {
        if ($id === null) {
            return redirect()->to('/select')->with('error', 'ID de usuario no proporcionado');
        }

        $modelSelect = new ModelSelect();
        $usuario = $modelSelect->getUsuarioPorId($id);

        if (!$usuario) {
            return redirect()->to('/select')->with('error', 'Usuario no encontrado');
        }

        $data = [
            'usuario' => $usuario,
            'departamentos' => $modelSelect->getDepartamentos(),
            'ciudades' => $modelSelect->getCiudades(),
            'provincias' => $modelSelect->getProvincias(),
            'estados' => $modelSelect->getEstados()
        ];

        return view('ViewUpdate', $data);
    }

    public function updateUsuario()
    {
        $id = $this->request->getPost('usu_id');
        
        $validation = $this->validate([
            'usu_nombre' => 'required|min_length[3]',
            'usu_cedula' => 'required|numeric|min_length[8]|max_length[10]',
            'usu_correo' => 'required|valid_email',
            'dep_id' => 'required|numeric',
            'ciu_id' => 'required|numeric',
            'pro_id' => 'required|numeric',
            'est_id' => 'required|numeric'
        ]);

        if (!$validation) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'usu_id' => $id,
            'usu_nombre' => $this->request->getPost('usu_nombre'),
            'usu_cedula' => $this->request->getPost('usu_cedula'),
            'usu_correo' => $this->request->getPost('usu_correo'),
            'dep_id' => $this->request->getPost('dep_id'),
            'ciu_id' => $this->request->getPost('ciu_id'),
            'pro_id' => $this->request->getPost('pro_id'),
            'est_id' => $this->request->getPost('est_id')
        ];

        $modelUpdate = new ModelUpdate();
        $result = $modelUpdate->actualizarUsuario($data);

        if ($result) {
            return redirect()->to('/select')->with('success', 'Usuario actualizado correctamente');
        } else {
            return redirect()->back()->withInput()->with('error', 'Error al actualizar el usuario');
        }
    }

    public function insertUsuario()
    {
        $instancia = new ModelInsert();
        
        $data = [
            'usu_nombre' => $this->request->getPost('usu_nombre'),
            'usu_cedula' => $this->request->getPost('usu_cedula'),
            'usu_correo' => $this->request->getPost('usu_correo'),
            'dep_id' => $this->request->getPost('dep_id'),
            'ciu_id' => $this->request->getPost('ciu_id'),
            'pro_id' => $this->request->getPost('pro_id'),
            'est_id' => $this->request->getPost('est_id')
        ];
        
        $validation = \Config\Services::validation();
        $validation->setRules([
            'usu_nombre' => 'required|min_length[3]|max_length[125]',
            'usu_cedula' => 'required|min_length[10]|max_length[13]',
            'usu_correo' => 'required|valid_email',
            'dep_id' => 'required|numeric',
            'ciu_id' => 'required|numeric',
            'pro_id' => 'required|numeric',
            'est_id' => 'required|numeric'
        ]);
        
        if (!$validation->run($data)) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }
        
        try {
            if ($instancia->FuncionInsertUsuario($data)) {
                session()->setFlashdata('success', 'Usuario insertado correctamente :D');
            } else {
                session()->setFlashdata('error', 'Error al insertar el usuario :c');
            }
        } catch (\Exception $e) {
            log_message('error', 'Error al insertar usuario: ' . $e->getMessage());
            session()->setFlashdata('error', 'Error al procesar la solicitud. Por favor intente nuevamente.');
        }
        
        return redirect()->to(base_url('/select'));
    }
    public function deleteUsuario($id)
    {
        $instancia = new ModelDelete();
        if ($instancia->FuncionDeleteUsuario($id)) {
            session()->setFlashdata('success', 'Usuario eliminado correctamente :D');
        } else {
            session()->setFlashdata('error', 'Error al eliminar el usuario :c');
        }
        return redirect()->to(base_url('/select'));
    }
}
//