<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Mi Auto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="public/verauto/verauto.css">
</head>
<body>

<div class="container">
    <h1 class="text-center">Revisa tu informacion en nuestra plataforma</h1>
    <p class="text-center">Aquí puedes ver, actualizar o eliminar tus reserva.</p>

    <!-- Tabla de reservas -->
    <table class="tablaReservas">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Tipo de Vehículo</th>
                <th>Placa</th>
                <th>Fecha</th>
                <th>Hora de Ingreso</th>
                <th>Hora de Salida</th>
                <th>Lugar</th>
                <th>Piso</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($reservas)): ?>
                <?php foreach ($reservas as $reserva): ?>
                    <tr>
                        <td><?= esc($reserva['nombre']) ?></td>
                        <td><?= esc($reserva['tipo_vehiculo']) ?></td>
                        <td><?= esc($reserva['placa']) ?></td>
                        <td><?= esc($reserva['fecha']) ?></td>
                        <td><?= esc($reserva['hora_ingreso']) ?></td>
                        <td><?= esc($reserva['hora_salida']) ?></td>
                        <td><?= esc($reserva['lugar']) ?></td>
                        <td><?= esc($reserva['piso']) ?></td>
                        <td>
                            <!-- Botón para actualizar -->
                            <a href="<?= base_url('/actualizar/' . $reserva['id']) ?>" class="btn btn-warning btn-accion">Actualizar</a>
                            <!-- Botón para eliminar -->
                            <a href="<?= base_url('/eliminar/' . $reserva['id']) ?>" class="btn btn-danger btn-accion" onclick="return confirm('¿Estás seguro de eliminar esta reserva?')">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="9" class="text-center">No hay reservas registradas.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <!-- Botón para volver a la página principal -->
    <div class="text-center mt-4">
        <a href="<?= base_url('/') ?>" class="btn btn-primary">Volver a la Página Principal</a>
    </div>
</div>

</body>
</html>