<?php

namespace App\Controllers;

use App\Models\ModeloEliminarReserva;
use CodeIgniter\Controller;

class CEliminarReserva extends Controller
{
    public function eliminar($id)
    {
        // Llamar al modelo para eliminar la reserva usando SP
        $modelo = new ModeloEliminarReserva();
        if ($modelo->eliminarReservaSP($id)) {
            return redirect()->to(base_url('/verauto'))->with('mensaje', 'Reserva eliminada con éxito');
        } else {
            return redirect()->to(base_url('/verauto'))->with('mensaje', 'Error al eliminar la reserva');
        }
    }
}