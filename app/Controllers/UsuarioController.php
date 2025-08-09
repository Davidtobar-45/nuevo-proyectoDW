<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use CodeIgniter\Controller;

class UsuarioController extends Controller
{
    // Método para mostrar el formulario de registro
    public function registrar()
    {
        return view('registro');
    }

    // Método para insertar el usuario en la base de datos
    public function insertarUsuario()
    {
        try {
            // Obtener los datos del formulario
            $nombre = $this->request->getPost('nombre');
            $contrasenia = $this->request->getPost('contrasenia');
            
            // Validación de los datos (opcional)
            if (empty($nombre) || empty($contrasenia)) {
                return redirect()->to('/usuario/registrar')->with('error', 'Por favor ingrese todos los campos.');
            }
    
            // Crear el modelo para insertar el usuario
            $usuarioModel = new UsuarioModel();
    
            // Insertar el usuario en la base de datos
            $usuarioModel->insertUsuario($nombre, $contrasenia);
    
            // Redirigir a la página de éxito
            return redirect()->to('/usuario/registroExitoso');
        } catch (\Exception $e) {
            // Mostrar el error específico para depurar
            return $this->response->setJSON(['error' => $e->getMessage()]);
        }
    }

    // Método para mostrar la página de éxito
    public function registroExitoso()
    {
        return view('registro_exitoso');
    }
}
