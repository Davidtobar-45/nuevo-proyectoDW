<?php

namespace App\Controllers;

class ControladorCartera extends BaseController
{
    public function C1(): string
    {
        // Carga la vista de carteras de mano
        return view('ContenedorCarteras/Mano');
    }

    public function C2(): string
    {
        // Carga la vista de carteras de hombro
        return view('ContenedorCarteras/Hombro');
    }
}
