<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Usuarios</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
            padding: 30px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        h4 {
            text-align: center;
            margin-bottom: 30px;
            font-weight: bold;
            color: #343a40;
        }

        .table-container {
            max-width: 95%;
            margin: auto;
            background-color: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            overflow-x: auto;
        }

        table {
            border-collapse: collapse;
        }

        th, td {
            text-align: center;
            vertical-align: middle;
        }

        tr:hover {
            background-color: #f1f3f5;
        }

        tr:nth-child(even) td {
            background-color: #f9fafb;
        }

        tr:nth-child(even):hover td {
            background-color: #e9ecef;
        }

        .btn-editar {
            background-color: #0d6efd;
            color: white;
            padding: 6px 10px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 0.875rem;
            transition: background-color 0.3s ease;
        }

        .btn-editar:hover {
            background-color: #084298;
        }
    </style>
</head>

<body>

    <h4>Catálogo de Usuarios</h4>

    <div class="table-container">
        <table class="table table-bordered table-hover table-sm">
            <thead class="table-dark">
                <tr>
                    <th>USU ID</th>
                    <th>USU NOMBRE</th>
                    <th>USU CÉDULA</th>
                    <th>USU CORREO</th>
                    <th>ID DEPARTAMENTO</th>
                    <th>DEPARTAMENTO</th>
                    <th>ID CIUDAD</th>
                    <th>CIUDAD</th>
                    <th>ID PROVINCIA</th>
                    <th>PROVINCIA</th>
                    <th>ID ESTADO</th>
                    <th>ESTADO</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($DatosVista as $key): ?>
                    <tr>
                        <td><?= $key['usu_id'] ?></td>
                        <td><?= $key['usu_nombre'] ?></td>
                        <td><?= $key['usu_cedula'] ?></td>
                        <td><?= $key['usu_correo'] ?></td>
                        <td><?= $key['IdDepartamento'] ?></td>
                        <td><?= $key['departamento'] ?></td>
                        <td><?= $key['IdCiudad'] ?></td>
                        <td><?= $key['ciudad'] ?></td>
                        <td><?= $key['IdProvincia'] ?></td>
                        <td><?= $key['provincia'] ?></td>
                        <td><?= $key['IdEstado'] ?></td>
                        <td><?= $key['estado'] ?></td>
                        <td>
                            <a href="<?= base_url('editar/'
                             . $key['usu_id']
                             .'/'.$key['IdDepartamento']
                             .'/'.$key['IdCiudad']
                             .'/'.$key['IdProvincia']
                             .'/'.$key['IdEstado']
                             ) ?>" class="btn-editar">Editar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>

</html>
