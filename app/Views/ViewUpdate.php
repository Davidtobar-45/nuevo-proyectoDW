<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-color: #f2f4f8;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .form-container {
            max-width: 850px;
            margin: 40px auto;
            background-color: #ffffff;
            border-radius: 15px;
            padding: 35px 40px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #343a40;
        }

        label {
            font-weight: 500;
            margin-top: 10px;
            color: #495057;
        }

        .form-control {
            border-radius: 10px;
        }

        .btn {
            padding: 12px;
            font-weight: 500;
            font-size: 16px;
        }

        .alert {
            margin-top: 15px;
        }

        .btn i {
            margin-right: 6px;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2><i class="bi bi-pencil-square"></i> Actualizar Usuario</h2>

        <form action="<?= base_url('actualizar') ?>" method="post">
            <?= csrf_field() ?>
            <input type="hidden" name="usu_id" value="<?= $usuario['usu_id'] ?>">

            <?php if (session()->has('errors')): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php foreach (session('errors') as $error): ?>
                            <li><?= esc($error) ?></li>
                        <?php endforeach ?>
                    </ul>
                </div>
            <?php endif ?>

            <div class="row">
                <div class="col-md-6">
                    <label for="usu_nombre">Nombre Completo</label>
                    <input type="text" name="usu_nombre" id="usu_nombre" class="form-control" required 
                           value="<?= old('usu_nombre', $usuario['usu_nombre']) ?>">
                </div>
                <div class="col-md-6">
                    <label for="usu_cedula">Cédula</label>
                    <input type="text" name="usu_cedula" id="usu_cedula" class="form-control" required
                           value="<?= old('usu_cedula', $usuario['usu_cedula']) ?>">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-6">
                    <label for="usu_correo">Correo Electrónico</label>
                    <input type="email" name="usu_correo" id="usu_correo" class="form-control" required
                           value="<?= old('usu_correo', $usuario['usu_correo']) ?>">
                </div>
                <div class="col-md-6">
                    <label for="dep_id">Departamento</label>
                    <select name="dep_id" id="dep_id" class="form-control" required>
                        <option value="">Seleccione un departamento</option>
                        <?php foreach ($departamentos as $depto): ?>
                            <option value="<?= $depto['dep_id'] ?>" 
                                <?= old('dep_id', $usuario['dep_id']) == $depto['dep_id'] ? 'selected' : '' ?>>
                                <?= esc($depto['dep_nombre']) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-6">
                    <label for="ciu_id">Ciudad</label>
                    <select name="ciu_id" id="ciu_id" class="form-control" required>
                        <option value="">Seleccione una ciudad</option>
                        <?php foreach ($ciudades as $ciudad): ?>
                            <option value="<?= $ciudad['ciu_id'] ?>" 
                                <?= old('ciu_id', $usuario['ciu_id']) == $ciudad['ciu_id'] ? 'selected' : '' ?>>
                                <?= esc($ciudad['ciu_nombre']) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="pro_id">Provincia</label>
                    <select name="pro_id" id="pro_id" class="form-control" required>
                        <option value="">Seleccione una provincia</option>
                        <?php foreach ($provincias as $provincia): ?>
                            <option value="<?= $provincia['pro_id'] ?>" 
                                <?= old('pro_id', $usuario['pro_id']) == $provincia['pro_id'] ? 'selected' : '' ?>>
                                <?= esc($provincia['pro_nombre']) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-6">
                    <label for="est_id">Estado</label>
                    <select name="est_id" id="est_id" class="form-control" required>
                        <option value="">Seleccione un estado</option>
                        <?php foreach ($estados as $estado): ?>
                            <option value="<?= $estado['est_id'] ?>" 
                                <?= old('est_id', $usuario['est_id']) == $estado['est_id'] ? 'selected' : '' ?>>
                                <?= esc($estado['est_nombre']) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-6">
                    <a href="<?= base_url('select') ?>" class="btn btn-secondary w-100">
                        <i class="bi bi-arrow-left-circle"></i> Cancelar
                    </a>
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success w-100">
                        <i class="bi bi-check-circle-fill"></i> Actualizar Usuario
                    </button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
