<?php

namespace App\Controllers;

class CEjemplo extends BaseController
{
   public function index(): string
    {
        echo view('/Contenido/Encabesado.php');
        echo view('/VistaFormulario/Cuerpo.php');
    }

    public function index(): string
    {
    $numero1= $this ->request ->getPost('numero 1');
    $numero1= $this ->request ->getPost('numero 2');
    }

}
