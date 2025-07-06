<?php

namespace App\Controllers;

class ControladorZapatos extends BaseController
{
    public function Z1(): string
    {
        return view('ContenedorZapatos/Deportivos');
    }

    public function Z2(): string
    {
        return view('ContenedorZapatos/Casual');
    }
}
