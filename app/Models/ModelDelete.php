<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelDelete extends Model
{
    public functioneliminarUsuario($id)
    {
        try {
            return $this->db->query(
                "CALL SP_DELETE_USUARIO(?)",
                [$id]
            );
        } catch (\Throwable $th) {
            log_message('error', $th->getMessage());
            throw $th;
        }
    }
}
