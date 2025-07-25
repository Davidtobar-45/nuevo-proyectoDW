<!-- app/Views/ViewSelect.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2 class="mb-4">Gestión de Usuarios</h2>

    <!-- Mensaje flash -->
    <?php if(session()->getFlashdata('mensaje')): ?>
        <div class="alert alert-info"><?= session()->getFlashdata('mensaje') ?></div>
    <?php endif; ?>

    <!-- Formulario INSERT -->
    <form action="<?= base_url('/insertar') ?>" method="post" class="mb-4">
        <div class="row">
            <div class="col">
                <input type="text" name="usu_nombre" class="form-control" placeholder="Nombre" required>
            </div>
            <div class="col">
                <input type="email" name="usu_correo" class="form-control" placeholder="Correo" required>
            </div>
            <div class="col">
                <input type="password" name="usu_pass" class="form-control" placeholder="Contraseña" required>
            </div>
            <div class="col">
                <input type="text" name="usu_cedula" class="form-control" placeholder="Cédula" required>
            </div>
            <div class="col">
                <select name="usu_estado" class="form-control" required>
                    <option value="">Estado</option>
                    <option value="Activo">Activo</option>
                    <option value="Inactivo">Inactivo</option>
                </select>
            </div>
            <div class="col">
                <button type="submit" class="btn btn-success">Registrar</button>
            </div>
        </div>
    </form>

    <!-- Tabla con usuarios (DELETE) -->
    <h4>Lista de Usuarios</h4>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Cédula</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($DatosVista)): ?>
                <?php foreach ($DatosVista as $usuario): ?>
                    <tr>
                        <td><?= esc($usuario['usu_nombre']) ?></td>
                        <td><?= esc($usuario['usu_correo']) ?></td>
                        <td><?= esc($usuario['usu_cedula']) ?></td>
                        <td><?= esc($usuario['usu_estado']) ?></td>
                        <td>
                            <?php if (count($DatosVista) > 1): ?>
                                <a href="<?= base_url('/eliminar/'.$usuario['usu_id']) ?>" class="btn btn-danger btn-sm">Eliminar</a>
                            <?php else: ?>
                                <button class="btn btn-secondary btn-sm" disabled>Último Usuario</button>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="5" class="text-center">No hay usuarios registrados</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
