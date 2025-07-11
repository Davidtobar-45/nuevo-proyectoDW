<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSelect extends Model
{
    public function FuncionSelectUsuario()
    {
        $query = $this->db->query("CALL SP_SELECT_USUARIO()");
        return $query->getResultArray();
    }
}

// Hay que agregar al controlador el // use App\Models\Nombre de la clase modelo;
