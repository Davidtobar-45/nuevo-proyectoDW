<?php

namespace App\Controllers;

use App\Models\ModeloReserva;
use CodeIgniter\Controller;

class CReservas extends BaseController
{
    public function InsertarReserva()
    {
        $modelo = new ModeloReserva();

        // Validar datos
        $reglas = [
            'nombre' => 'required|min_length[3]',
            // Aquí agregamos más tipos de vehículos válidos para que no falle la validación
            'tipo_vehiculo' => 'required|in_list[Auto,Moto,Camioneta,4x4]',
            'placa' => 'required|min_length[6]',
            'fecha' => 'required|valid_date',
            'hora_ingreso' => 'required',
            'hora_salida' => 'required',
            'lugar' => 'required',
            'piso' => 'required'
        ];

        if (!$this->validate($reglas)) {
            return redirect()->to(base_url('/reservas'))->with('mensaje', 'Error: Datos no válidos')->withInput();
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

        // Llamar al método del modelo que usa el SP
        if ($modelo->InsertarReservaSP($datos)) {
            // Redirigir a la página de pagos con mensaje de éxito
            return redirect()->to(base_url('/pagos'))->with('mensaje', 'Reserva guardada con éxito');
        } else {
            return redirect()->to(base_url('/reservas'))->with('mensaje', 'Error al guardar la reserva')->withInput();
        }
    }

    public function verAuto()
    {
        $modelo = new ModeloReserva();
        $reservas = $modelo->obtenerReservas();
        $data['reservas'] = $reservas;
        return view('verauto', $data);
    }

    public function testconexion()
    {
        $datosconexion = \Config\Database::connect();
        if ($datosconexion->connect()) {
            echo 'Se conectó don Inge';
        } else {
            echo 'Error de conexión, a gastronomía';
        }
    }

    public function testconexionOracle()
    {
        try {
            $db = \Config\Database::connect('oracle'); // Conectar a Oracle
            echo 'Conexión exitosa a Oracle!';
        } catch (\Exception $e) {
            echo 'Error de conexión a Oracle: ' . $e->getMessage();
        }
    }
}
