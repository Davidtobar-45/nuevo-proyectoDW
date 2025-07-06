<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Productos extends Controller
{
    public function index($categoria = null, $id = null)
    {
        $session = session();

        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/');
        }

        // Validar las variables y cargar la vista correspondiente
        $categoriasValidas = ['zapatos', 'vestidos', 'carteras'];

        if (in_array(strtolower($categoria), $categoriasValidas) && is_numeric($id)) {
            // Puedes pasar datos a la vista según categoría e id
            return view('producto', [
                'categoria' => ucfirst($categoria),
                'id' => $id
            ]);
        } else {
            return redirect()->to('/dashboard');
        }
    }
}
