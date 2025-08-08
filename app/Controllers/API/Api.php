<?php
// Redireccionar el namespace con \API
namespace App\Controllers\API;
// LLamar al padre BaseController
use App\Controllers\BaseController;
use App\Models\ApiSelect;

// Cambiar el nombre = al del archivo
class Api extends BaseController
{
    public function ApiSelectControlador()
    {
        $instancia = new ApiSelect();
        $data = $instancia->getUsuario();
        return $this->response->setJSON($data);
    }

    public function crear()
    {
        $data = $this->request->getJSON(true);
        $nombre = $data['Vnombre'] ?? null;
        $correo = $data['Vcorreo'] ?? null;
        $pass = $data['Vpass'] ?? null;
        $cedula = $data['Vcedula'] ?? null;
        $estado = $data['Vestado'] ?? null;
        if (!$nombre || !$correo || !$pass || !$cedula || !$estado) {
            return $this->response->setStatusCode(400)
                ->setJSON(['status' => 'Error', 'mensaje' => 'Faltan campos']);
        }
        $instancia = new ApiSelect();
        $resultado = $instancia->postUsuario($nombre, $correo, $pass, $cedula, $estado);
        if ($resultado) {
            return $this->response->setStatusCode(201)
                ->setJSON(['status' => 'Ok', 'mensaje' => 'Usuario Creado']);
        } else {
            return $this->response->setStatusCode(500)
                ->setJSON(['status' => 'Erro', 'mensaje' => 'No se pudo crear']);
        }
    }

    public function eliminar($id = null)
    {
        if (!$id) {
            return $this->response->setStatusCode(400)
                ->setJSON(['status' => 'Error', 'mensaje' => 'Id requerido']);
        }
        $instancia = new ApiSelect();
        $resultado = $instancia->deletUsuario($id);
        if ($resultado) {
            return $this->response->setJSON(['status' => 'Ok', 'mensaje' => 'Usuario Eliminad']);
        } else {
            return $this->response->setStatusCode(404)
                ->setJSON(['status' => 'Erro', 'mensaje' => 'Usuario no encontrado']);
        }
    }

}
