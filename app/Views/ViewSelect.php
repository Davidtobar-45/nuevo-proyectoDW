<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-color: #f7f9fb;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .container {
            margin-top: 50px;
        }

        h4 {
            margin-bottom: 20px;
            color: #343a40;
        }

        .table-container {
            background: #fff;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
        }

        .table th, .table td {
            vertical-align: middle;
            text-align: center;
        }

        .btn-sm i {
            margin-right: 5px;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="table-container">

            <h4><i class="bi bi-people-fill"></i> Lista de Usuarios</h4>

            <?php if (session()->getFlashdata('success')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= esc(session()->getFlashdata('success')) ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
                </div>
            <?php endif; ?>

            <table class="table table-bordered table-hover table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Cédula</th>
                        <th>Correo</th>
                        <th>Departamento</th>
                        <th>Ciudad</th>
                        <th>Provincia</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($DatosVista as $key): ?>
                        <tr>
                            <td><?= esc($key['usu_id']) ?></td>
                            <td><?= esc($key['usu_nombre']) ?></td>
                            <td><?= esc($key['usu_cedula']) ?></td>
                            <td><?= esc($key['usu_correo']) ?></td>
                            <td><?= esc($key['departamento'] ?? 'N/A') ?></td>
                            <td><?= esc($key['ciudad'] ?? 'N/A') ?></td>
                            <td><?= esc($key['provincia'] ?? 'N/A') ?></td>
                            <td><?= esc($key['estado'] ?? 'N/A') ?></td>
                            <td>
                                <div class="d-flex justify-content-center gap-2">
                                    <a href="<?= base_url('editar/' . $key['usu_id']) ?>" class="btn btn-primary btn-sm">
                                        <i class="bi bi-pencil-square"></i> Editar
                                    </a>
                                    <a href="<?= base_url('Eliminar/' . $key['usu_id']) ?>" 
                                       class="btn btn-danger btn-sm"
                                       onclick="return confirm('¿Está seguro de eliminar ?')">
                                        <i class="bi bi-trash3-fill"></i> Eliminar
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
