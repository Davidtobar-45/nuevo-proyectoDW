<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelInsert extends Model
{
    protected $table = 'tbl_usuarios';
    protected $primaryKey = 'usu_id';
    protected $allowedFields = [
        'usu_nombre',
        'usu_cedula',
        'usu_correo',
        'dep_id',
        'ciu_id',
        'pro_id',
        'est_id'
    ];

    public function FuncionInsertUsuario($data)
    {
        try {
            return $this->db->query(
                "CALL SP_INSERT_USUARIO(?, ?, ?, ?, ?, ?, ?)",
                [
                    $data['usu_nombre'],
                    $data['usu_cedula'],
                    $data['usu_correo'],
                    $data['dep_id'],
                    $data['ciu_id'],
                    $data['pro_id'],
                    $data['est_id']
                ]
            );
        } catch (\Throwable $th) {
            log_message('error', 'Error al insertar usuario: ' . $th->getMessage());
            throw new \RuntimeException('Error al insertar el usuario', 0, $th);
        }
    }
}
