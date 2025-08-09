<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago Exitoso - Laguna Mall</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="public/datosguardados/styles.css">
</head>
<body>

<div class="contenedorConfirmacion">
    <!-- Mostrar mensaje de éxito -->
    <div class="mensaje">
        <h3>¡Pago Exitoso!</h3>
        <p>Gracias por completar tu pago. Tu reserva ha sido confirmada.</p>
        <p>Puedes acercarte con tu vehiculo sin problemas</p>
    </div>

    <!-- Mostrar detalles del pago -->
    <div class="detallesPago">
        <h5>Detalles del Pago:</h5>
        <p><strong>Método de Pago:</strong> <?= session('metodo_pago') ?></p>
        <p><strong>Nombre del Titular:</strong> <?= session('nombre_titular') ?></p>
        <p><strong>Número de Tarjeta:</strong> **** **** **** <?= substr(session('numero_tarjeta'), -4) ?></p>
        <p><strong>Fecha de Expiración:</strong> <?= session('fecha_expiracion') ?></p>
    </div>

    <!-- Botón para volver a la página principal -->
    <button onclick="window.location.href='<?= base_url('/') ?>'" class="botonVolver">Volver a la Página Principal</button>
</div>

</body>
</html>