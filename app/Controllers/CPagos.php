<?php

namespace App\Controllers;

use App\Models\ModeloPago;
use CodeIgniter\Controller;

class Cpagos extends Controller
{
    public function index()
    {
        // Mostrar la vista de pagos
        return view('pagos');
    }

    public function procesarPago()
    {
        // Validar datos del formulario
        $reglas = [
            'metodo_pago' => 'required',
            'nombre_titular' => 'required|min_length[3]',
            'numero_tarjeta' => 'required|min_length[16]|max_length[16]',
            'fecha_expiracion' => 'required',
            'cvv' => 'required|min_length[3]|max_length[5]'
        ];

        if (!$this->validate($reglas)) {
            return redirect()->to(base_url('/pagos'))->with('mensaje', 'Error: Datos no válidos');
        }

        // Preparar datos
        $datos = [
            'metodo_pago' => $this->request->getPost('metodo_pago'),
            'nombre_titular' => $this->request->getPost('nombre_titular'),
            'numero_tarjeta' => $this->request->getPost('numero_tarjeta'),
            'fecha_expiracion' => $this->request->getPost('fecha_expiracion'),
            'cvv' => $this->request->getPost('cvv')
        ];

        // Llamar al modelo para guardar el pago
        $modelo = new ModeloPago();
        if ($modelo->InsertarPagoSP($datos)) {
            // Guardar datos en la sesión para mostrarlos en la página de confirmación
            session()->set($datos);
            return redirect()->to(base_url('/datosguardados'))->with('mensaje', 'Pago procesado con éxito');
        } else {
            return redirect()->to(base_url('/pagos'))->with('mensaje', 'Error al procesar el pago');
        }
        
    }
    public function datosGuardados()
    {
    // Mostrar la vista de confirmación
        return view('datosguardados');
    }
}