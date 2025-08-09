<?php

namespace App\Models;

use CodeIgniter\Model;

class ModeloActualizarReserva extends Model
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function obtenerReservaPorId($id)
    {
        // Consultar la reserva por su ID
        $query = $this->db->query('SELECT * FROM reservas WHERE id = ?', [$id]);
        return $query->getRowArray();
    }

    public function actualizarReservaSP($id, $datos)
    {
        // Llamar al procedimiento almacenado para actualizar la reserva
        $query = $this->db->query('CALL SP_ACTUALIZAR_RESERVA(?, ?, ?, ?, ?, ?, ?, ?, ?)', [
            $id, $datos['nombre'], $datos['tipo_vehiculo'], $datos['placa'], $datos['fecha'], $datos['hora_ingreso'], $datos['hora_salida'], $datos['lugar'], $datos['piso']
        ]);
        return $query;
    }
}