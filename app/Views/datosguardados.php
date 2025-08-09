<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Pago Exitoso - Laguna Mall</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="<?= base_url('public/datosguardados/styles.css') ?>" />
</head>
<body>

<div class="container contenedorConfirmacion mt-5 p-4 border rounded">

    <!-- Mostrar mensaje de éxito -->
    <div class="mensaje text-center mb-4">
        <h3>¡Pago Exitoso!</h3>
        <p>Gracias por completar tu pago. Tu reserva ha sido confirmada.</p>
        <p>Puedes acercarte con tu vehículo sin problemas.</p>
    </div>

    <!-- Mostrar detalles del pago -->
    <div class="detallesPago">
        <h5>Detalles del Pago:</h5>
        <p><strong>Método de Pago:</strong> <?= esc(session('metodo_pago') ?? 'No disponible') ?></p>
        <p><strong>Nombre del Titular:</strong> <?= esc(session('nombre_titular') ?? 'No disponible') ?></p>
        <p><strong>Número de Tarjeta:</strong> 
            <?php 
                $numTarjeta = session('numero_tarjeta') ?? '';
                if ($numTarjeta && strlen($numTarjeta) >= 4) {
                    echo '**** **** **** ' . esc(substr($numTarjeta, -4));
                } else {
                    echo 'No disponible';
                }
            ?>
        </p>
        <p><strong>Fecha de Expiración:</strong> <?= esc(session('fecha_expiracion') ?? 'No disponible') ?></p>
    </div>

    <!-- Botón para volver a la página principal -->
    <div class="text-center mt-4">
        <a href="<?= base_url('/') ?>" class="btn btn-primary botonVolver">Volver a la Página Principal</a>
    </div>

</div>

</body>
</html>
