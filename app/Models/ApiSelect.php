<?php

namespace App\Models;

use CodeIgniter\Model;

class ApiSelect extends Model
{
    // Select de API para usuarios
    public function getUsuario()
    {
        try {
            $db = \Config\Database::connect();
            $query = $db->query("CALL 	SP_SELECT_USUARIO()");
            return $query->getResultArray();
        } catch (\Throwable $th) {
            return $th;
        }
    }
    // Post de API para usuarios
    public function postUsuario($nombre, $correo, $pass, $cedula, $estado)
    {
        try {
            $db = \Config\Database::connect();
            $query = $db->query(
                "CALL SP_INSERT_USUARIO(?,?,?,?,?)",
                [$nombre, $correo, $pass, $cedula, $estado]
            );
            return $db->affectedRows() > 0;
        } catch (\Throwable $th) {
            return $th;
        }
    }

    public function deletUsuario($id)
    {
        try {
            $db = \Config\Database::connect();
            $query = $db->query(
                "CALL SP_DELETE_USUARIO(?)",
                [$id]
            );
            return $db->affectedRows() > 0;
        } catch (\Throwable $th) {
            return $th;
        }
    }

}
