<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelInsert extends Model
{
    public function funcionSelectUsuarios($data)
    {
        try { 
            $contraencriptada= password_hash $data["usu_pass"], PASSWORD_DEFAULT
            return $this->db->query(
                "CALL SP_INSERT_USUARIO(?, ?, ?, ?, ?)",
                [
                    $data["usu_nombre"],
                    $data["usu_correo"],
                    $passencrip, $data["usu_cedula"],
                    $data["usu_estado"]
                ]
            );
        } catch (\Throwable $th) {
            log_message('error', $th->getMessage());
            throw $th;
        }
    }
}
