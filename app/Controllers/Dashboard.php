<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        return view('dashboard'); // muestra la vista dashboard.php
    }
}
