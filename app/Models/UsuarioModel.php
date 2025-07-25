<?php
namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table = 'tbl_usuarios';
    protected $primaryKey = 'usu_id';
    protected $allowedFields = ['usu_nombre', 'usu_correo', 'usu_pass', 'usu_cedula', 'usu_estado'];

    protected $db;

    public function __construct()
    {
        parent::__construct();
        $this->db = \Config\Database::connect();
    }

    // Busca usuario por correo
    public function login($correo)
    {
        return $this->db->table($this->table)
            ->where('usu_correo', $correo)
            ->get()
            ->getRowArray();
    }
}
