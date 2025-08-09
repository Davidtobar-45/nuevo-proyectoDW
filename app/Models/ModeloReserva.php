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
        // Consultar todos los datos de la tabla reservas
        $query = $this->db->query('SELECT * FROM reservas');
        return $query->getResultArray();
    }

    public function InsertarReservaSP($datos)
    {
        try {
            // Desglose de los datos
            $nombre = $datos['nombre'];
            $tipo_vehiculo = $datos['tipo_vehiculo'];
            $placa = $datos['placa'];
            $fecha = $datos['fecha'];
            $hora_ingreso = $datos['hora_ingreso'];
            $hora_salida = $datos['hora_salida'];
            $lugar = $datos['lugar'];
            $piso = $datos['piso'];

            // Llamar al procedimiento almacenado
            $query = $this->db->query('CALL SP_INSERT_RESERVA(?, ?, ?, ?, ?, ?, ?, ?)', [
                $nombre, $tipo_vehiculo, $placa, $fecha, $hora_ingreso, $hora_salida, $lugar, $piso
            ]);

            // Validar la inserción
            if ($query) {
                return true;
            } else {
                return false;
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    
}