<!DOCTYPE html>
<html>
<head>
    <title>Login - Streaming</title>
</head>
<body>
    <h2>Iniciar Sesión</h2>

    <?php if(session()->getFlashdata('msg')): ?>
        <p style="color:red;"><?= session()->getFlashdata('msg') ?></p>
    <?php endif; ?>

    <form action="<?= site_url('login/auth') ?>" method="post">
        <label>Usuario</label>
        <input type="text" name="username" required>
        <br><br>
        <label>Contraseña</label>
        <input type="password" name="password" required>
        <br><br>
        <button type="submit">Ingresar</button>
    </form>
</body>
</html>
