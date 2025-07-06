<?php

namespace App\Controllers;

class ControladorZapatos extends BaseController
{
    public function Z1(): string
    { //carga la vista de zapatos deportivos
        return view('ContenedorZapatos/Deportivos');
    }

    public function Z2(): string
    { // carga la vista de zapatos casuales
        return view('ContenedorZapatos/Casual');
    }
}
