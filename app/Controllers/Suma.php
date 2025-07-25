<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Suma extends BaseController
{
    public function index()
    {
        $data = [
            "titulo" => "Vista SUMA",
        ];
        echo view("Contenido/Encabezado", $data);
        echo view("VistaFormulario/Cuerpo");
    }

    public function psumar()
    {
        $Vnumero1 = $this->request->getPost('numero1');
        $Vnumero2 = $this->request->getPost('numero2');
        $VResultado = $Vnumero1 + $Vnumero2;

        $data = [
            "numero1" => $Vnumero1,
            "numero2" =>  $Vnumero2,
            "resultado" => $VResultado,
        ];


        echo view('VistaFormulario/suma_resultado', $data);
    }
}
