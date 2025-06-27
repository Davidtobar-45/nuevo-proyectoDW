<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('/VistaLogin/index.php');
    }

// nuevo metodo de formulario 

    public function MetodoMostrarFormulario2(): string
    {
        return view('/VistaFormularios/Formulario1.php');
    }

// nuevo  formulario 2

    public function MostrarFormulario2(): string
    {
        return view('/VistaFormulario2/Formulario2.php');
    }
// nuevo  
        public function index2(): string
    {
    echo view('catalogo/body.php');
    echo view('catalogo/footer.php');
    echo view('catalogo/header.php');
}
}
