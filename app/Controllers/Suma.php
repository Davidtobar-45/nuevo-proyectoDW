<?php

namespace App\Controllers;

class CEjemplo extends BaseController
{
   public function index(): string
    {
        return view('/VistaFormulario/cuerpo.php');
    }

}
