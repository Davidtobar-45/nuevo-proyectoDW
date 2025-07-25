<?php

namespace App\Controllers;
use App\Models\ModelDelete;
use App\Models\ModelSelect;
use App\Models\ModelInsert;
use PhpParser\Node\Stmt\Return_;

class Home extends BaseController
{
    public function ControladorSelectUsuarioFuncion()
    {
        // Instancia crear
        $objetoInstancia = new ModelSelect();
        // Del objeto saco la funcion que rescata datos del SP
        $datos = $objetoInstancia->FuncionSelectUsuario();
        $datos1 = $objetoInstancia->FuncionSelectPoductos();
        // Almaceno esos datos en vector llave-valor para enviarlos a la vista
        $datosenviadosavista = [
            "DatosVista" => $datos,
            "DatosVista1" => $datos1
        ];
        // Retorno vista con los datos
        return view("ViewSelect", $datosenviadosavista);
    }


    public function MetodoTestear()
    {
        $db = \Config\Database::connect();
        if ($db->connect()) {
            echo 'Conexion Correcta';
        } else {
            echo 'Conexion Faliida';
        }
    }

    public function index(): string
    {
        return view('welcome_message');
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
    // ESTE METODO MUESTRA LA VISTA DEL INSERT
    public function indexInsert()
    {
        return view('ViewInsert');
    }
    // Este metodo es para recopilar y envar datos al modelo
    public function insertUsuario()
    {
        $instancia = new ModelInsert();
        $data = [
            'usu_nombre' => $this->request->getPost('usu_nombre'),
            'usu_correo' => $this->request->getPost('usu_correo'),
            'usu_pass' => password_hash($this->request->getPost('usu_pass'), PASSWORD_DEFAULT),
            'usu_cedula' => $this->request->getPost('usu_cedula'),
            'usu_estado' => $this->request->getPost('usu_estado')
        ];
        if ($instancia->FuncionInsertUsuario($data)) {
            session()->setFlashdata('mensaje', ':) Insercción correcta 👍');
        } else {
            session()->setFlashdata('mensaje', ':"( Insercción Fallida 👎');
        }
        return redirect()->to(base_url('/Select'));
    }

        public function eliminarUsuario($id)
    {
        $instancia = new ModelDelete();
        if ($instancia->FuncionEliminarUsuario($id)) {
            session()->setFlashdata('mensaje', ':) Eliminación correcta 👍');
        } else {
            session()->setFlashdata('mensaje', ':"( Eliminación Fallida 👎');
        }
        return redirect()->to(base_url('/Select'));
    }

}
