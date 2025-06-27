<?php

namespace App\Controllers;

class Home extends BaseController
{
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
