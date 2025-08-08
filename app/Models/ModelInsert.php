<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelInsert extends Model
{

    public function FuncionInsertUsuario($data)
    {
        try {
            return $this->db->query(
                "CALL SP_INSERT_USUARIO(?,?,?,?,?)",
                [$data["usu_nombre"], $data["usu_correo"], 
                $data["usu_pass"], $data["usu_cedula"],$data["usu_estado"]]
            );
        } catch (\Throwable $th) {
            throw $th;
        }
    }

}

// Hay que agregar al controlador el // use App\Models\Nombre de la clase modelo;
