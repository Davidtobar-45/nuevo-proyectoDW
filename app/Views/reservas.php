<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Reservar Estacionamiento - Laguna Mall</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="public/reserva/reserva.css" />
</head>
<body>
<div class="container mt-4">
    <?php if(session()->getFlashdata('mensaje')): ?>
        <div class="alert alert-info" role="alert">
            <?= session()->getFlashdata('mensaje') ?>
        </div>
    <?php endif; ?>

    <div class="contenedorReserva">
        <table class="table table-bordered tablaReserva">
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

        <form class="formularioReserva" action="<?= base_url('guardarReserva') ?>" method="post">
            <input type="text" name="nombre" placeholder="Ingrese sus nombres" value="<?= old('nombre') ?>" required class="form-control mb-2" />

            <label for="tipoVehiculo" class="form-label">Tipo de vehículo:</label>
            <select id="tipoVehiculo" name="tipo_vehiculo" required class="form-select mb-2">
                <option value="" disabled <?= old('tipo_vehiculo') ? '' : 'selected' ?>>Seleccione el tipo de vehículo</option>
                <option value="Auto" <?= old('tipo_vehiculo') == 'Auto' ? 'selected' : '' ?>>Auto</option>
                <option value="Moto" <?= old('tipo_vehiculo') == 'Moto' ? 'selected' : '' ?>>Moto</option>
                <option value="Camioneta" <?= old('tipo_vehiculo') == 'Camioneta' ? 'selected' : '' ?>>Camioneta</option>
                <option value="4x4" <?= old('tipo_vehiculo') == '4x4' ? 'selected' : '' ?>>4x4</option>
            </select>

            <input type="text" name="placa" placeholder="Ingrese la placa del vehículo" value="<?= old('placa') ?>" required class="form-control mb-2" />

            <label><strong>Ingrese la fecha para reservar:</strong></label>
            <input type="date" name="fecha" value="<?= old('fecha') ?>" required class="form-control mb-2" />

            <label><strong>Hora de ingreso:</strong></label>
            <input type="time" name="hora_ingreso" value="<?= old('hora_ingreso') ?>" required class="form-control mb-2" />

            <label><strong>Hora de salida:</strong></label>
            <input type="time" name="hora_salida" value="<?= old('hora_salida') ?>" required class="form-control mb-2" />

            <!-- Campos ocultos para piso y lugar -->
            <input type="hidden" name="lugar" id="inputLugar" value="<?= old('lugar') ?>" />
            <input type="hidden" name="piso" id="inputPiso" value="<?= old('piso') ?>" />

            <button type="submit" class="btn btn-primary">Confirmar Reserva</button>
        </form>

        <div class="text-center mt-4">
            <a href="<?= base_url('/') ?>" class="btn btn-secondary">Volver a la Página Principal</a>
        </div>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const urlParams = new URLSearchParams(window.location.search);
    let espacio = urlParams.get('espacio');

    if (espacio) {
        localStorage.setItem("espacioSeleccionado", espacio);
    } else {
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
