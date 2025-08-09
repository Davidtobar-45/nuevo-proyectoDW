<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Pago</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">

    <h2>Formulario de Pago</h2>

    <?php if(session()->getFlashdata('error')): ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
    <?php endif; ?>

    <form action="<?= base_url('procesarPago') ?>" method="post">

        <div class="mb-3">
            <label for="metodo_pago" class="form-label">Método de Pago</label>
            <select name="metodo_pago" id="metodo_pago" class="form-select" required>
                <option value="">Seleccione</option>
                <option value="Tarjeta Crédito">Tarjeta Crédito</option>
                <option value="Tarjeta Débito">Tarjeta Débito</option>
                <option value="Efectivo">Efectivo</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="nombre_titular" class="form-label">Nombre del Titular</label>
            <input type="text" name="nombre_titular" id="nombre_titular" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="numero_tarjeta" class="form-label">Número de Tarjeta</label>
            <input type="text" name="numero_tarjeta" id="numero_tarjeta" class="form-control" maxlength="16" required>
        </div>

        <div class="mb-3">
            <label for="fecha_expiracion" class="form-label">Fecha de Expiración</label>
            <input type="month" name="fecha_expiracion" id="fecha_expiracion" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="cvv" class="form-label">CVV</label>
            <input type="text" name="cvv" id="cvv" class="form-control" maxlength="4" required>
        </div>

        <button type="submit" class="btn btn-primary">Pagar</button>
    </form>

</div>
</body>
</html>
