<?php

namespace App\Controllers;

class ControladorVestido extends BaseController
{
    public function V1(): string
    {
        // Carga la vista de vestidos de fiesta
        return view('ContenedorVestidos/Fiesta');
    }

    public function V2(): string
    {
        // Carga la vista de vestidos formales
        return view('ContenedorVestidos/Formal');
    }
}
