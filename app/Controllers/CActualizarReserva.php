<?php

namespace App\Controllers;

use App\Models\ModeloActualizarReserva;
use CodeIgniter\Controller;

class CActualizarReserva extends Controller
{
    public function actualizar($id)
    {
        // Obtener los datos de la reserva por su ID
        $modelo = new ModeloActualizarReserva();
        $reserva = $modelo->obtenerReservaPorId($id);

        // Mostrar la vista de actualización con los datos de la reserva
        $data['reserva'] = $reserva;
        return view('actualizar_reserva', $data);
    }

    public function guardarActualizacion($id)
    {
        // Validar datos del formulario
        $reglas = [
            'nombre' => 'required|min_length[3]',
            'tipo_vehiculo' => 'required|in_list[Auto,Moto]',
            'placa' => 'required|min_length[6]',
            'fecha' => 'required|valid_date',
            'hora_ingreso' => 'required',
            'hora_salida' => 'required',
            'lugar' => 'required',
            'piso' => 'required'
        ];

        if (!$this->validate($reglas)) {
            return redirect()->to(base_url('/actualizar/' . $id))->with('mensaje', 'Error: Datos no válidos');
        }

        // Preparar datos
        $datos = [
            'nombre' => $this->request->getPost('nombre'),
            'tipo_vehiculo' => $this->request->getPost('tipo_vehiculo'),
            'placa' => $this->request->getPost('placa'),
            'fecha' => $this->request->getPost('fecha'),
            'hora_ingreso' => $this->request->getPost('hora_ingreso'),
            'hora_salida' => $this->request->getPost('hora_salida'),
            'lugar' => $this->request->getPost('lugar'),
            'piso' => $this->request->getPost('piso')
        ];

        // Llamar al modelo para actualizar la reserva usando SP
        $modelo = new ModeloActualizarReserva();
        if ($modelo->actualizarReservaSP($id, $datos)) {
            return redirect()->to(base_url('/verauto'))->with('mensaje', 'Reserva actualizada con éxito');
        } else {
            return redirect()->to(base_url('/actualizar/' . $id))->with('mensaje', 'Error al actualizar la reserva');
        }
    }
}