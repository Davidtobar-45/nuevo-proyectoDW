<?php

namespace App\Models;

use CodeIgniter\Model;

class ModeloReserva extends Model
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function obtenerReservas()
    {
        $query = $this->db->query('SELECT * FROM reservas');
        return $query->getResultArray();
    }

    public function InsertarReservaSP($datos)
    {
        try {
            $query = $this->db->query('CALL SP_INSERT_RESERVA(?, ?, ?, ?, ?, ?, ?, ?)', [
                $datos['nombre'],
                $datos['tipo_vehiculo'],
                $datos['placa'],
                $datos['fecha'],
                $datos['hora_ingreso'],
                $datos['hora_salida'],
                $datos['lugar'],
                $datos['piso']
            ]);

            // Liberar resultados pendientes para evitar bloqueo
            while ($this->db->connID->more_results() && $this->db->connID->next_result()) {;}

            return true;
        } catch (\Throwable $th) {
            log_message('error', $th->getMessage());
            return false;
        }
    }
}
