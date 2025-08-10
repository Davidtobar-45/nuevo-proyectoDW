<?php namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\UsuarioModel;

class ApiUsuarios extends ResourceController
{
    protected $modelName = 'App\Models\UsuarioModel';
    protected $format = 'json';

    // PUT /api/usuarios/(:num)
   public function create()
{
    $input = $this->request->getJSON(true);

    if (!$input) {
        return $this->fail('No hay datos o JSON inválido', 400);
    }

    // Validar campos mínimos (ejemplo)
    if (empty($input['nombre']) || empty($input['correo']) || empty($input['cedula']) || empty($input['estado'])) {
        return $this->fail('Faltan datos requeridos', 400);
    }

    // Opcional: validar que correo no exista (ejemplo básico)
    $existe = $this->model->where('correo', $input['correo'])->first();
    if ($existe) {
        return $this->fail('Correo ya registrado', 409);
    }

    // Aquí puedes agregar password o otros campos si quieres
    // Por ahora, solo campos permitidos
    $data = [
        'nombre' => $input['nombre'],
        'correo' => $input['correo'],
        'cedula' => $input['cedula'],
        'estado' => $input['estado']
    ];

    $id = $this->model->insert($data);

    if ($id) {
        $usuario = $this->model->find($id);
        return $this->respondCreated([
            'status' => 'ok',
            'usuario' => $usuario
        ]);
    } else {
        return $this->failServerError('Error al crear usuario');
    }
}
}