<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Producto</title>
</head>
<body>
    <h1>Producto <?= esc($categoria) ?></h1>
    <p>ID: <?= esc($id) ?></p>
    <a href="<?= base_url('/dashboard') ?>">Volver</a>
</body>
</html>
