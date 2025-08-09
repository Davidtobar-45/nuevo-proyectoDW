<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservar Estacionamiento - Laguna Mall</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public/reserva/reserva.css">

</head>
<body>
    
<div class="contenedorReserva">
    <!-- Tabla de información del estacionamiento -->
    <table class="tablaReserva">
        <thead>
            <tr>
                <th colspan="2">Información del Estacionamiento</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>Piso:</strong></td>
                <td id="pisoSeleccionado">Piso 1</td>
            </tr>
            <tr>
                <td><strong>Lugar:</strong></td>
                <td id="lugarSeleccionado">A1</td>
            </tr>
        </tbody>
    </table>

    <!-- Formulario de reserva -->
    <form class="formularioReserva" action="<?= base_url('guardarReserva') ?>" method="post">
    <input type="text" name="nombre" placeholder="Ingrese sus nombres" required>
    <input type="text" name="tipo_vehiculo" placeholder="Ingrese el tipo de vehículo" required>
    <input type="text" name="placa" placeholder="Ingrese la placa del vehículo" required>

    <label><strong>Ingrese la fecha para reservar:</strong></label>
    <input type="date" name="fecha" required>

    <label><strong>Hora de ingreso:</strong></label>
    <input type="time" name="hora_ingreso" required>

    <label><strong>Hora de salida:</strong></label>
    <input type="time" name="hora_salida" required>

    <!-- Campos ocultos para piso y lugar -->
    <input type="hidden" name="lugar" id="inputLugar">
    <input type="hidden" name="piso" id="inputPiso">

    <button type="submit" class="botonReservar">Confirmar Reserva</button>
</form>
    <div class="text-center mt-4">
        <a href="<?= base_url('/') ?>" class="btn btn-primary">Volver a la Página Principal</a>
    </div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
    const urlParams = new URLSearchParams(window.location.search);
    let espacio = urlParams.get('espacio');

    // Si hay un espacio en la URL, lo guardamos en localStorage
    if (espacio) {
        localStorage.setItem("espacioSeleccionado", espacio);
    } else {
        // Si no hay espacio en la URL, cargamos el último guardado
        espacio = localStorage.getItem("espacioSeleccionado") || "A1";
    }

    document.getElementById('lugarSeleccionado').textContent = espacio;
    document.getElementById('inputLugar').value = espacio;

    let piso = 'Piso 1';
    if (espacio.startsWith('B')) {
        piso = 'Piso Subterráneo';
    }

    document.getElementById('pisoSeleccionado').textContent = piso;
    document.getElementById('inputPiso').value = piso;
});
</script>

</body>
</html>
