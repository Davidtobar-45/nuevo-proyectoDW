<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Productos extends Controller
{
    public function mostrar($categoria = null, $id = null)
    {
        // Verificar si está logueado
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/');
        }

        // Validar que la categoría y el ID sean correctos
        $categoriasValidas = ['zapatos', 'vestidos', 'carteras'];
        $idsValidos = ['1', '2'];

        $categoria = strtolower($categoria);

        if (!in_array($categoria, $categoriasValidas) || !in_array($id, $idsValidos)) {
            // Si no es válido, mostrar 404 o redirigir
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $data = [
            'categoria' => ucfirst($categoria),
            'id' => $id,
        ];

        return view('producto', $data);
    }
}
