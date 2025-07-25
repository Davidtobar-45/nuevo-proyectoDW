<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>

    <style>
        body {
            background-color: #f2f2f2;
            padding: 30px;
        }

        .content-container {
            display: flex;
            justify-content: center;
        }

        .table-container {
            width: 90%;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h4 {
            text-align: center;
            color: #0d6efd;
            margin-bottom: 20px;
        }

        .table thead {
            background-color: #0d6efd;
            color: white;
        }

        .table td, .table th {
            vertical-align: middle;
            text-align: center;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>

<body>

    <?php if (session()->getFlashdata('mensaje')) { ?>
        <script>
            alert(<?= json_encode(session()->getFlashdata('mensaje')) ?>)
        </script>
    <?php } ?>

    <div class="content-container">
        <div class="table-container">
            <h4>Catálogo Usuarios</h4>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>CORREO</th>
                        <th>CONTRASEÑA</th>
                        <th>CEDULA</th>
                        <th>ESTADO</th>
                        <th>Accion Editar</th>
                        <th>Accion Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($DatosVista as $key): ?>
                        <tr>
                            <td><?= $key['usu_id'] ?></td>
                            <td><?= $key['usu_nombre'] ?></td>
                            <td><?= $key['usu_correo'] ?></td>
                            <td><?= $key['usu_pass'] ?></td>
                            <td><?= $key['usu_cedula'] ?></td>
                            <td><?= $key['usu_estado'] ?></td>
                            <td><a href="#" class="btn btn-warning btn-sm">EDITAR</a></td>
                            <td><a href="<?= base_url().'eliminar/'.$key['usu_id']?>" class="btn btn-danger btn-sm">Eliminar</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>
