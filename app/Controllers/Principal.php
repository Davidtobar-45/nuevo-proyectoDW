<?php
namespace App\Controllers;
use CodeIgniter\Controller;

class Principal extends Controller
{
    public function index()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }
        return view('principal');
    }
}
