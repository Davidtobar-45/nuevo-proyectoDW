<?php

namespace App\Controllers;  // Definir espacio de nombres

class Calculadora extends BaseController
{
    public function index()
    {
        return view('calculadora_view');  // Mostrar la vista principal
    }

    public function calcularTabla()
    {
        $input = json_decode(file_get_contents('php://input'), true);  // Leer datos JSON
        $numero = intval($input['numero'] ?? 0);  // Obtener número entero

        $tabla = [];
        for ($i = 1; $i <= 12; $i++) {
            $tabla[] = "$numero x $i = " . ($numero * $i);  // Crear cada línea de la tabla
        }

        return $this->response->setJSON(['tabla' => $tabla]);  // Enviar tabla en JSON
    }

    public function calcularPotencia()
    {
        $input = json_decode(file_get_contents('php://input'), true);  // Leer datos JSON
        $base = floatval($input['base'] ?? 0);  // Obtener base decimal
        $exponente = intval($input['exponente'] ?? 0);  // Obtener exponente entero

        $resultados = [];
        for ($i = 1; $i <= $exponente; $i++) {
            $resultados[] = "$base ^ $i = " . pow($base, $i);  // Calcular y guardar potencias
        }

        return $this->response->setJSON(['resultados' => $resultados]);  // Enviar resultados JSON
    }
}
