<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table = 'usuarios';  // Nombre de la tabla en Oracle
    protected $primaryKey = 'ID';
    protected $allowedFields = ['nombre', 'contrasenia'];

    // Método para insertar un usuario en Oracle
    public function insertUsuario($nombre, $contrasenia)
    {
        // Forzar la conexión a Oracle usando el grupo 'oracle'
        $db = \Config\Database::connect('oracle');

        // Consulta SQL con parámetros correctos
        $sql = "INSERT INTO usuarios (nombre, contrasenia) VALUES (:nombre, :contrasenia)";

        // Ejecutar la consulta
        return $db->query($sql, [
            'nombre' => $nombre,
            'contrasenia' => password_hash($contrasenia, PASSWORD_DEFAULT)
        ]);
    }
}
