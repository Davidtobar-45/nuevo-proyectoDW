<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #d4edda; /* verde claro */
        }
        .registro-box {
            background-color: #007bff; /* azul */
            color: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.2);
        }
        label {
            color: white;
            font-weight: bold;
        }
        .btn-crear {
            background-color: #ffffff;
            color: #007bff;
            font-weight: bold;
        }
        .btn-crear:hover {
            background-color: #e2e6ea;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="registro-box">
                <h3 class="text-center mb-4">Registro de Usuario</h3>

                <?php if(session()->getFlashdata('mensaje')): ?>
                    <div class="alert alert-success bg-light text-dark"><?= session()->getFlashdata('mensaje') ?></div>
                <?php endif; ?>

                <form method="post" action="<?= site_url('registro/crear') ?>">
                    <div class="mb-3">
                        <label>Nombre</label>
                        <input type="text" name="nombre" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Correo</label>
                        <input type="email" name="correo" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Contraseña</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Cédula</label>
                        <input type="text" name="cedula" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Estado</label>
                        <input type="text" name="estado" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-crear w-100">CREAR</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
