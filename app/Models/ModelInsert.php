<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelInsert extends Model
{
    protected $table = 'tbl_usuarios';
    protected $primaryKey = 'usu_id';
    protected $allowedFields = ['usu_nombre', 'usu_correo', 'usu_pass', 'usu_cedula', 'usu_estado'];

    public function FuncionInsertUsuario($data)
    {
        return $this->insert($data);
    }
}
