<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Reserva - Laguna Mall</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center">Actualizar Reserva</h1>

    <!-- Formulario de actualización -->
    <form action="<?= base_url('/guardarActualizacion/' . $reserva['id']) ?>" method="post">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="<?= esc($reserva['nombre']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="tipo_vehiculo" class="form-label">Tipo de Vehículo</label>
            <input type="text" class="form-control" id="tipo_vehiculo" name="tipo_vehiculo" value="<?= esc($reserva['tipo_vehiculo']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="placa" class="form-label">Placa</label>
            <input type="text" class="form-control" id="placa" name="placa" value="<?= esc($reserva['placa']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="fecha" class="form-label">Fecha</label>
            <input type="date" class="form-control" id="fecha" name="fecha" value="<?= esc($reserva['fecha']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="hora_ingreso" class="form-label">Hora de Ingreso</label>
            <input type="time" class="form-control" id="hora_ingreso" name="hora_ingreso" value="<?= esc($reserva['hora_ingreso']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="hora_salida" class="form-label">Hora de Salida</label>
            <input type="time" class="form-control" id="hora_salida" name="hora_salida" value="<?= esc($reserva['hora_salida']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="lugar" class="form-label">Lugar</label>
            <input type="text" class="form-control" id="lugar" name="lugar" value="<?= esc($reserva['lugar']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="piso" class="form-label">Piso</label>
            <input type="text" class="form-control" id="piso" name="piso" value="<?= esc($reserva['piso']) ?>" required>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            <a href="<?= base_url('/verauto') ?>" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</div>

</body>
</html>