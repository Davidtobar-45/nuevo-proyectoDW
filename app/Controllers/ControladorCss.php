<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ControladorCss extends BaseController
{
    public function index()
    {
        return view("VistaCss/indexCss");
    }
    public function index1()
    {
        return view("VistaCss/indexCss1");
    }
}
