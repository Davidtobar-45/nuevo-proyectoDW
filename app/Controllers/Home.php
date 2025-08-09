<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('paginainicial');
    }

    public function consultas(): string
    {
        return view('Consultas');
    }
    
    public function pagos(): string
    {
        return view('pagos');
    }
    public function reservas(): string
    {
        return view('reservas');
    }
    

}
