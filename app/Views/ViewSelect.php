<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
</head>

<body>

    <?php if (session()->getFlashdata('mensaje')) { ?>
        <script>
            alert(<?= json_encode(session()->getFlashdata('mensaje')) ?>)
        </script>
    <?php } ?>



    <div style="justify-content: center;">
        <div style="width: 45%;">
            <h4>Catálogo Usuarios</h4>
            <table class="table table-bordered" style="width: 50%; display: flex;">
                <tr>
                    <td>ID</td>
                    <td>NOMBRE</td>
                    <td>CORREO</td>
                    <td>CONTRASEÑA</td>
                    <td>CEDULA</td>
                    <td>ESTADO</td>
                    <td>Accion Editar</td>
                    <td>Accion Eliminar</td>
                </tr>
                <?php foreach ($DatosVista as $key): ?>
                    <tr>
                        <td> <?= $key['usu_id'] ?> </td>
                        <td> <?= $key['usu_nombre'] ?> </td>
                        <td> <?= $key['usu_correo'] ?> </td>
                        <td> <?= $key['usu_pass'] ?> </td>
                        <td> <?= $key['usu_cedula'] ?> </td>
                        <td> <?= $key['usu_estado'] ?> </td>
                        <td>
                            <a href="">EDITAR</a>
                        </td>
                        <td>
                             <a href="<?= base_url().'eliminar/'.$key['usu_id']?>">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <div style="width: 45%;">
            <h4>Catálogo Productos</h4>
            <table class="table table-bordered" style="width: 50%; display: flex;">
                <tr>
                    <td>ID</td>
                    <td>NOMBRE</td>
                    <td>COSTO</td>
                    <td>ESTADO</td>
                </tr>
                <?php foreach ($DatosVista1 as $key): ?>
                    <tr>
                        <td> <?= $key['ID'] ?> </td>
                        <td> <?= $key['NOMBRE'] ?> </td>
                        <td> <?= $key['COSTO'] ?> </td>
                        <td> <?= $key['ESTADO'] ?> </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</body>

</html>