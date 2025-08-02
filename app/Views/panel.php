<!DOCTYPE html>
<html>
<head>
    <title>Panel de Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #d4edda; }
        .form-box { background-color: #007bff; color: white; padding: 20px; border-radius: 15px; }
        label { color: white; font-weight: bold; }
    </style>
</head>
<body>
<div class="container mt-5">

    <div class="mb-3 text-end">
        <a href="<?= site_url('login/salir') ?>" class="btn btn-danger">Cerrar Sesión</a>
    </div>

    <div class="form-box mb-4">
        <h4>Registrar nuevo usuario</h4>
        <form method="post" action="<?= site_url('panel/insertar') ?>">
            <div class="row">
                <div class="col-md-4 mb-2">
                    <label>Nombre</label>
                    <input type="text" name="nombre" class="form-control" required>
                </div>
                <div class="col-md-4 mb-2">
                    <label>Correo</label>
                    <input type="email" name="correo" class="form-control" required>
                </div>
                <div class="col-md-4 mb-2">
                    <label>Contraseña</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div class="col-md-4 mb-2">
                    <label>Cédula</label>
                    <input type="text" name="cedula" class="form-control" required>
                </div>
                <div class="col-md-4 mb-2">
                    <label>Estado</label>
                    <input type="text" name="estado" class="form-control" required>
                </div>
                <div class="col-md-4 mt-4">
                    <button class="btn btn-light w-100">Registrar</button>
                </div>
            </div>
        </form>
    </div>

    <?php if(session()->getFlashdata('mensaje')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('mensaje') ?></div>
    <?php endif; ?>

    <h4>Usuarios Registrados</h4>
    <table class="table table-bordered table-striped bg-white">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Cédula</th>
                <th>Estado</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $u): ?>
                <tr>
                    <td><?= $u['nombre'] ?></td>
                    <td><?= $u['correo'] ?></td>
                    <td><?= $u['cedula'] ?></td>
                    <td><?= $u['estado'] ?></td>
                    <td>
                        <form method="post" action="<?= site_url('panel/eliminar/'.$u['id']) ?>" onsubmit="return confirm('¿Estás seguro?')">
                            <button class="btn btn-sm btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
</body>
</html>
