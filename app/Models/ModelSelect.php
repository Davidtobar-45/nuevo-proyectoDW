<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSelect extends Model
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

    public function FuncionSelectUsuario()
    {
        $query = $this->db->query("CALL SP_SELECT_USUARIO()");
        return $query->getResultArray();
    }

    public function getDepartamentos()
    {
        return $this->db->table('tbl_departamento')
                       ->get()
                       ->getResultArray();
    }

    public function getCiudades()
    {
        return $this->db->table('tbl_ciudad')
                       ->get()
                       ->getResultArray();
    }

    public function getProvincias()
    {
        return $this->db->table('tbl_provincia')
                       ->get()
                       ->getResultArray();
    }

    public function getEstados()
    {
        return $this->db->table('tbl_estado')
                      ->select('est_id, est_nombre')
                      ->orderBy('est_nombre', 'ASC')
                      ->get()
                      ->getResultArray();
    }

    public function getUsuarioPorId($id)
    {
        $sql = "CALL SP_SELECT_USUARIO_BY_ID(?)";
        $result = $this->db->query($sql, [$id]);
        
        if ($result && $result->getNumRows() > 0) {
            return $result->getRowArray();
        }
        
        return null;
    }
}
