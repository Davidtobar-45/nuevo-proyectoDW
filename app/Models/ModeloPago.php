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
        $metodo_pago = $datos['metodo_pago'];
        $nombre_titular = $datos['nombre_titular'];
        $numero_tarjeta = $datos['numero_tarjeta'];
        $fecha_expiracion = $datos['fecha_expiracion'];
        $cvv = $datos['cvv'];

        $result = $this->db->query('CALL SP_INSERT_PAGO(?, ?, ?, ?, ?)', [
            $metodo_pago, $nombre_titular, $numero_tarjeta, $fecha_expiracion, $cvv
        ]);

        // Limpiar resultados pendientes para evitar errores en MySQL
        while ($this->db->connID->more_results() && $this->db->connID->next_result()) {}

        return $result ? true : false;
    }
}
