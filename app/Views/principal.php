<!DOCTYPE html>
<html>
<head>
    <title>Streaming - Página Principal</title>
</head>
<body>
    <h1>Bienvenido, <?= session()->get('nombre_usuario'); ?> 🎬</h1>
    <p>Disfruta de nuestras películas y series.</p>
    <a href="<?= base_url('login/logout') ?>">Cerrar sesión</a>
</body>
</html>
