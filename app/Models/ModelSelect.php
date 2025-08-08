<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSelect extends Model
{
    public function FuncionSelectUsuarioAct()
    {
        $query = $this->db->query("CALL SP_SELECT_USUARIOS()");
        return $query->getResultArray();
    }

    public function FuncionSelectUsuario()
    {
        $query = $this->db->query("CALL SP_SELECT_USUARIO()");
        return $query->getResultArray();
    }

    public function FuncionSelectProductos() // corregido "Poductos" a "Productos"
    {
        $query = $this->db->query("CALL SP_SELECT_PRODUCTOS()");
        return $query->getResultArray();
    }
}
