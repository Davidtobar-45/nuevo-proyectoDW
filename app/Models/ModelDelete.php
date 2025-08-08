<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelDelete extends Model
{
    public function FuncionEliminarUsuario($id)
    {
        try {
            return $this->db->query(
                "CALL SP_DELETE_USUARIO(?)",
                [$id]
            );
        } catch (\Throwable $th) {
            throw $th;
        }
    }

}

// Hay que agregar al controlador el // use App\Models\Nombre de la clase modelo;
