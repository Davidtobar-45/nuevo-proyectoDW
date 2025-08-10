<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Usuarios</title>
    <style>
        table { border-collapse: collapse; width: 80%; margin: 20px auto;}
        th, td { border: 1px solid #333; padding: 8px; text-align: center;}
        th { background-color: #eee;}
    </style>
</head>
<body>
    <h2 style="text-align:center;">Listado de Usuarios</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th><th>Nombre</th><th>Correo</th><th>Cédula</th><th>Estado</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($usuarios)): ?>
                <?php foreach ($usuarios as $user): ?>
                    <tr>
                        <td><?= esc($user['id']) ?></td>
                        <td><?= esc($user['nombre']) ?></td>
                        <td><?= esc($user['correo']) ?></td>
                        <td><?= esc($user['cedula']) ?></td>
                        <td><?= esc($user['estado']) ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="5">No hay usuarios</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>

