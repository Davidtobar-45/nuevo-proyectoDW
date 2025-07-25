<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelUpdate extends Model
{
    protected $table = 'tbl_usuarios';
    protected $primaryKey = 'usu_id';
    protected $allowedFields = ['usu_nombre', 'usu_cedula', 'usu_correo', 'dep_id', 'ciu_id', 'pro_id', 'est_id'];
    protected $useAutoIncrement = true;

    public function actualizarUsuario($data)
    {
        $db = \Config\Database::connect();
        
        try {
            $sql = "CALL SP_UPDATE_USUARIO(
                :usu_id:, 
                :usu_nombre:, 
                :usu_cedula:, 
                :usu_correo:, 
                :dep_id:, 
                :ciu_id:, 
                :pro_id:, 
                :est_id:
            )";
            
            $params = [
                'usu_id' => $data['usu_id'],
                'usu_nombre' => $data['usu_nombre'],
                'usu_cedula' => $data['usu_cedula'],
                'usu_correo' => $data['usu_correo'],
                'dep_id' => $data['dep_id'],
                'ciu_id' => $data['ciu_id'],
                'pro_id' => $data['pro_id'],
                'est_id' => $data['est_id']
            ];
            
            $db->query($sql, $params);
            return true;
            
        } catch (\Exception $e) {
            log_message('error', 'Error al actualizar usuario: ' . $e->getMessage());
            return false;
        }
    }
}
