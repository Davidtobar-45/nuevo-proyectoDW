<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido</title>
</head>
<body>
    <h1 style="text-align: center; margin-top: 100px;">Bienvenido</h1>
    <p style="text-align: center;">Has iniciado sesión como <strong><?= session('usuario') ?></strong></p>
    <div style="text-align: center;">
        <a href="<?= base_url('logout') ?>">Cerrar sesión</a>
    </div>
</body>
</html>
