<?php

namespace App\Controllers;

use App\Models\ModeloPago;
use CodeIgniter\Controller;

class Cpagos extends BaseController
{
    // Mostrar formulario de pago
    public function index()
    {
        return view('pagos');
    }

    // Procesar pago y guardar en BD
    public function procesarPago()
    {
        $modelo = new ModeloPago();

        $datosPago = [
            'metodo_pago' => $this->request->getPost('metodo_pago'),
            'nombre_titular' => $this->request->getPost('nombre_titular'),
            'numero_tarjeta' => $this->request->getPost('numero_tarjeta'),
            'fecha_expiracion' => $this->request->getPost('fecha_expiracion'),
            'cvv' => $this->request->getPost('cvv'),
        ];

        $resultado = $modelo->InsertarPagoSP($datosPago);

        if ($resultado) {
            // Guardar datos en sesión para mostrar después
            session()->set([
                'metodo_pago' => $datosPago['metodo_pago'],
                'nombre_titular' => $datosPago['nombre_titular'],
                'numero_tarjeta' => $datosPago['numero_tarjeta'],
                'fecha_expiracion' => $datosPago['fecha_expiracion'],
            ]);
            
            return redirect()->to(base_url('/datosguardados'))->with('mensaje', 'Pago guardado con éxito');
        } else {
            return redirect()->to(base_url('/pagos'))->with('error', 'Error al guardar el pago');
        }
    }

    // Vista confirmación datos guardados
    public function datosGuardados()
    {
        return view('datosguardados');
    }
}
