<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelDelete extends Model
{
    protected $table = 'tbl_usuarios';
    protected $primaryKey = 'usu_id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = [];
    protected $useTimestamps = false;

    public function FuncionDeleteUsuario($id)
    {
        try {
            $result = $this->db->query(
                "CALL SP_DELETE_USUARIO(?)",
                [$id]
            );
            
            // Check if the query was successful
            if ($result !== false) {
                return $this->db->affectedRows() > 0;
            }
            return false;
        } catch (\Throwable $th) {
            log_message('error', 'Error al eliminar usuario: ' . $th->getMessage());
            throw new \RuntimeException('Error al eliminar el usuario', 0, $th);
        }
    }
}
