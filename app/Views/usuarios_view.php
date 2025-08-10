<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Listado de Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Usuarios Registrados</h2>

    <?php if (!empty($usuarios) && is_array($usuarios)): ?>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Cédula</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td><?= esc($usuario['usu_id']) ?></td>
                <td><?= esc($usuario['usu_nombre']) ?></td>
                <td><?= esc($usuario['usu_correo']) ?></td>
                <td><?= esc($usuario['usu_cedula']) ?></td>
                <td><?= esc($usuario['usu_estado']) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php else: ?>
        <div class="alert alert-warning">No hay usuarios registrados.</div>
    <?php endif; ?>
</div>
</body>
</html>
