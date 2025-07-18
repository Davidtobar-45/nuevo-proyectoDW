<?php

namespace App\Controllers;
use App\Models\ModelSelect;

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
            "DatosVista"=> $datos,
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
}
