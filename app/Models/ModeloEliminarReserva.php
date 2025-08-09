<?php

namespace App\Models;

use CodeIgniter\Model;

class ModeloEliminarReserva extends Model
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function eliminarReservaSP($id)
    {
        // Llamar al procedimiento almacenado para eliminar la reserva
        $query = $this->db->query('CALL SP_ELIMINAR_RESERVA(?)', [$id]);
        return $query;
    }
}