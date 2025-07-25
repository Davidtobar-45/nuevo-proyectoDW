<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Suma extends BaseController
{
    public function index()
    {
        echo view('Contenido/Encabezado');
        echo view('VistasFormularios/cuerpo');
    }
}
