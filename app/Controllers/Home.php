<?php

namespace App\Controllers;
use App\Models\ModelSelect;
use App\Models\ModelInsert;

class Home extends BaseController
{
    public function ControladorSelectUsuarioFuncion()
    {
        // Instancia crear
        $objetoInstancia = new ModelSelect();
        // Del objeto saco la funcion que rescata datos del SP
        $datos = $objetoInstancia->FuncionSelectUsuario();
        // Almaceno esos datos en vector llave-valor para enviarlos a la vista
        $datosenviadosavista = [
            "DatosVista" => $datos,
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
            echo 'Conexion Fallida';
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

    public function indexInsert(): string
    {
        return view('ViewInsert'); // corrección en el parámetro name
    }

    public function insertUsuario()
    {
        $instancia = new ModelInsert();
        $data = [
            'usu_nombre' => $this->request->getPost('usu_nombre'),
            'usu_correo' => $this->request->getPost('usu_correo'),
            'usu_pass' => password_hash($this->request->getPost('usu_pass'), PASSWORD_DEFAULT), // faltaba cerrar paréntesis y definir algoritmo
            'usu_cedula' => $this->request->getPost('usu_cedula'),
            'usu_estado' => $this->request->getPost('usu_estado'),
        ];
        if($instancia->functionInsertUsuario($data)){
             session() ->setFlashdata('mensaje',':) Inserccion Correcta');

        }else{
             session() ->setFlashdata('mensaje',':) Inserccion Fallida');
        }
        return redirect()->to (base_url('/Select'));
    }

    public function EliminarUsuario()
    {
        $instancia = new ModelInsert();
        if($instancia->functionEliminarUsuario($data)){
             session() ->setFlashdata('mensaje',':) Eliminacion Correcta');

        }else{
             session() ->setFlashdata('mensaje',':) Eliminacion Fallida');
        }
        return redirect()->to (base_url('/Select'));
    }
}
