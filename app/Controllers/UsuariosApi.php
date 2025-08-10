<?php

namespace App\Controllers;

use App\Models\UsuarioModel;  // Asegúrate de importar el modelo
use CodeIgniter\Controller;

class UsuariosAPI extends Controller
{
    public function index()
    {
        $model = new UsuarioModel();

        $usuarios = $model->findAll();

        return view('usuarios_view', ['usuarios' => $usuarios]);
    }


    // Actualizar usuario (PUT)
    public function update($id = null)
    {
        if (!$id) {
            return $this->fail('No se proporcionó ID de usuario', 400);
        }

        $input = $this->request->getRawInput();

        // Validar campos obligatorios
        if (!isset($input['usu_nombre']) || !isset($input['usu_correo'])) {
            return $this->failValidationErrors('Faltan datos obligatorios');
        }

        $usuario = $this->model->find($id);
        if (!$usuario) {
            return $this->failNotFound('Usuario no encontrado');
        }

        $datosActualizar = [
            'usu_nombre' => $input['usu_nombre'],
            'usu_correo' => $input['usu_correo'],
            'usu_pass'   => $input['usu_pass'] ?? $usuario['usu_pass'],
            'usu_cedula' => $input['usu_cedula'] ?? $usuario['usu_cedula'],
            'usu_estado' => $input['usu_estado'] ?? $usuario['usu_estado'],
        ];

        $this->model->update($id, $datosActualizar);

        $usuarioActualizado = $this->model->find($id);

        return $this->respondUpdated([
            'status' => 200,
            'mensaje' => 'Usuario actualizado correctamente',
            'datos' => $usuarioActualizado
        ]);
    }
}
