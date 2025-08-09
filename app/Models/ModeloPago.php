<?php

namespace App\Models;

use CodeIgniter\Model;

class ModeloPago extends Model
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function InsertarPagoSP($datos)
    {
        try {
            // Desglose de los datos
            $metodo_pago = $datos['metodo_pago'];
            $nombre_titular = $datos['nombre_titular'];
            $numero_tarjeta = $datos['numero_tarjeta'];
            $fecha_expiracion = $datos['fecha_expiracion'];
            $cvv = $datos['cvv'];

            // Llamar al procedimiento almacenado
            $query = $this->db->query('CALL SP_INSERT_PAGO(?, ?, ?, ?, ?)', [
                $metodo_pago, $nombre_titular, $numero_tarjeta, $fecha_expiracion, $cvv
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