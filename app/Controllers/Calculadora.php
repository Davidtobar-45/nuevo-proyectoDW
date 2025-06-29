<?php

namespace App\Controllers;

class Calculadora extends BaseController
{
    public function index()
    {
        // Muestra la vista principal
        return view('calculadora_view');
    }
}
