<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Registrar Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="container mt-5">

    <h3>Registrar nuevo usuario</h3>

    <?php if (!empty($mensaje)): ?>
        <div class="alert alert-info"><?= esc($mensaje) ?></div>
    <?php endif; ?>

    <form action="<?= base_url('Crear') ?>" method="post" autocomplete="off">
        <div class="mb-3">
            <label>Nombre</label>
            <input type="text" name="usu_nombre" class="form-control" required />
        </div>
        <div class="mb-3">
            <label>Correo</label>
            <input type="email" name="usu_correo" class="form-control" required />
        </div>
        <div class="mb-3">
            <label>Contraseña</label>
            <input type="password" name="usu_pass" class="form-control" required />
        </div>
        <div class="mb-3">
            <label>Cédula</label>
            <input type="text" name="usu_cedula" class="form-control" required />
        </div>
        <div class="mb-3">
            <label>Estado</label>
            <input type="text" name="usu_estado" class="form-control" required />
        </div>

        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>

</body>
</html>
