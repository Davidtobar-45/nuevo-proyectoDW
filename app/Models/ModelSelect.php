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

    public function FuncionSelectPoductos()
    {
        $query = $this->db->query("CALL SP_SELECT_PRODUCTOS()");
        return $query->getResultArray();
    }
}

