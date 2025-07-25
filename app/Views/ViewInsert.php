<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        * {
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: #f0f2f5;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .form-container {
            background: #fff;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            font-size: 24px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: 600;
        }

        input, select {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1.5px solid #ccc;
            border-radius: 10px;
            transition: border 0.3s;
            font-size: 15px;
        }

        input:focus, select:focus {
            border-color: #5b6dfb;
            outline: none;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #5b6dfb;
            color: white;
            font-weight: bold;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }

        button:hover {
            background: #4a5ee0;
        }

        .alert {
            background: #ffe0e0;
            color: #a94442;
            border-left: 5px solid #d9534f;
            padding: 10px 15px;
            margin-bottom: 20px;
            border-radius: 8px;
        }

        .alert ul {
            margin: 0;
            padding-left: 20px;
        }

        .form-group {
            position: relative;
        }

        .form-group i {
            position: absolute;
            right: 15px;
            top: 40px;
            color: #aaa;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h2><i class="bi bi-person-plus-fill"></i> Registro de Usuario</h2>
        <form action="<?= base_url() . 'Crear' ?>" method="post">

            <?php if (session()->has('errors')): ?>
                <div class="alert">
                    <ul>
                        <?php foreach (session('errors') as $error): ?>
                            <li><?= esc($error) ?></li>
                        <?php endforeach ?>
                    </ul>
                </div>
            <?php endif ?>

            <div class="form-group">
                <label for="usu_nombre">Nombre Completo</label>
                <input type="text" name="usu_nombre" id="usu_nombre" required value="<?= old('usu_nombre') ?>">
            </div>

            <div class="form-group">
                <label for="usu_cedula">Cédula</label>
                <input type="text" name="usu_cedula" id="usu_cedula" required value="<?= old('usu_cedula') ?>">
            </div>

            <div class="form-group">
                <label for="usu_correo">Correo Electrónico</label>
                <input type="email" name="usu_correo" id="usu_correo" required value="<?= old('usu_correo') ?>">
            </div>

            <div class="form-group">
                <label for="dep_id">Departamento</label>
                <select name="dep_id" id="dep_id" required>
                    <option value="">Seleccione un departamento</option>
                    <?php foreach ($departamentos as $depto): ?>
                        <option value="<?= $depto['dep_id'] ?>" <?= old('dep_id') == $depto['dep_id'] ? 'selected' : '' ?>>
                            <?= esc($depto['dep_nombre']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="ciu_id">Ciudad</label>
                <select name="ciu_id" id="ciu_id" required>
                    <option value="">Seleccione una ciudad</option>
                    <?php foreach ($ciudades as $ciudad): ?>
                        <option value="<?= $ciudad['ciu_id'] ?>" <?= old('ciu_id') == $ciudad['ciu_id'] ? 'selected' : '' ?>>
                            <?= esc($ciudad['ciu_nombre']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="pro_id">Provincia</label>
                <select name="pro_id" id="pro_id" required>
                    <option value="">Seleccione una provincia</option>
                    <?php foreach ($provincias as $provincia): ?>
                        <option value="<?= $provincia['pro_id'] ?>" <?= old('pro_id') == $provincia['pro_id'] ? 'selected' : '' ?>>
                            <?= esc($provincia['pro_nombre']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="est_id">Estado</label>
                <select name="est_id" id="est_id" required>
                    <option value="">Seleccione un estado</option>
                    <?php foreach ($estados as $estado): ?>
                        <option value="<?= $estado['est_id'] ?>" <?= old('est_id') == $estado['est_id'] ? 'selected' : '' ?>>
                            <?= esc($estado['est_nombre']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <button type="submit"><i class="bi bi-check2-circle"></i> Registrar</button>
        </form>
    </div>
</body>

</html>
