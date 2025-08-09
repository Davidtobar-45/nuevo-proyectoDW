<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realizar Pago</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">Realizar Pago</h1>
    <p class="text-center">Completa el pago para confirmar tu reserva de estacionamiento.</p>

    <!-- Mostrar mensajes de éxito o error -->
    <?php if (session()->has('mensaje')): ?>
        <div class="alert alert-<?= (strpos(session('mensaje'), 'éxito') !== false) ? 'success' : 'danger' ?>">
            <?= session('mensaje') ?>
        </div>
    <?php endif; ?>

    <!-- Formulario de pago -->
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Detalles de Pago</h5>
            <form action="<?= base_url('procesarPago') ?>" method="post">
                <div class="mb-3">
                    <label for="metodo-pago" class="form-label">Método de Pago</label>
                    <select id="metodo-pago" name="metodo_pago" class="form-select" required>
                        <option value="tarjeta">Tarjeta de Crédito/Débito</option>
                        <option value="paypal">PayPal</option>
                        <option value="transferencia">Transferencia Bancaria</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="nombre-titular" class="form-label">Nombre del Titular</label>
                    <input type="text" class="form-control" id="nombre-titular" name="nombre_titular" placeholder="Nombre como aparece en la tarjeta" required>
                </div>
                <div class="mb-3">
                    <label for="numero-tarjeta" class="form-label">Número de Tarjeta</label>
                    <input type="text" class="form-control" id="numero-tarjeta" name="numero_tarjeta" placeholder="porfavor poner digitos" required>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="fecha-expiracion" class="form-label">Fecha de Expiración</label>
                        <input type="month" class="form-control" id="fecha-expiracion" name="fecha_expiracion" required>
                    </div>
                    <div class="col-md-6">
                        <label for="cvv" class="form-label">CVV</label>
                        <input type="text" class="form-control" id="cvv" name="cvv" placeholder=" digitos" required>
                    </div>
                </div>

                <div class="mt-4 text-end">
                    <button type="submit" class="btn btn-primary">Pagar</button>
                    <button type="reset" class="btn btn-secondary">
                        <a href="<?= base_url('/Consultas') ?>" class="text-decoration-none text-white">Cancelar</a>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="alert alert-info mt-4">
        <p class="mb-0"><strong>¿Problemas con el pago?</strong> Contáctanos al correo <a href="mailto:soporte@estacionamientos.com">soporte@estacionamientos.com</a>.</p>
    </div>
</div>

</body>
</html>