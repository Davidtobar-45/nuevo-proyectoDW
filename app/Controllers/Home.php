<?php

namespace App\Controllers;
use App\Models\ModelSelect;

class Home extends BaseController
{
    public function ControladorSelectUsuarioFuntion():
    {
        $objetoinstancia = new ModelSelect();
        $datos = $objetoinstancia->funtionSelectUsuario();
        $datosenviadosvista = [
            "datosVista" => $datos
        ];
       
    }

    public function MetodoTestear();
    {
        $db = \Config\Database::connect('SP_SELECT_USUARIOS');
        if ($db->connect()) {
            echo 'Conexion Correcta';
        } else {
            echo 'Conexion Fallida';
        }
    }
}
