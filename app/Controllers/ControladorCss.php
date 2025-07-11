<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ControladorCss extends BaseController
{
    public function index($variable)
    {
        if ($variable == "1") {
            return view("VistaCss/Vistas/IndexCss1");
        } else if ($variable == "2") {
            return view("VistaCss/Vistas/IndexCss");
        }

    }
}
