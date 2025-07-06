<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Catálogo de Ventas</title>
    <link rel="stylesheet" href="<?= base_url('public/assets/css/bootstrap.min.css') ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <style>
        body {
            background: linear-gradient(135deg, #f8fafc, #d1e7ff);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        h1 {
            font-weight: 700;
            color: #0d6efd;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
        }
        .card {
            border-radius: 1rem;
            box-shadow: 0 6px 20px rgba(13,110,253,0.15);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 25px rgba(13,110,253,0.25);
        }
        .btn {
            border-radius: 50px;
            font-weight: 600;
            padding-left: 1.5rem;
            padding-right: 1.5rem;
            transition: background-color 0.3s ease;
        }
        .btn i {
            margin-right: 8px;
        }
        .btn-primary:hover {
            background-color: #0b5ed7;
        }
        .btn-danger:hover {
            background-color: #bb2d3b;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
        }
        .container {
            flex-grow: 1;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center mb-5">Bienvenido al Catálogo de Ventas</h1>
    <div class="row justify-content-center g-4">
        <!-- Zapatos -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card text-center p-3">
                <div class="card-body">
                    <h5 class="card-title mb-4 text-primary"><i class="fas fa-shoe-prints"></i> Zapatos</h5>
                    <a href="<?= base_url('Z1') ?>" class="btn btn-primary btn-sm mb-3 w-100">
                        <i class="fas fa-running"></i> Deportivos
                    </a>
                    <a href="<?= base_url('Z2') ?>" class="btn btn-primary btn-sm w-100">
                        <i class="fas fa-socks"></i> Casual
                    </a>
                </div>
            </div>
        </div>
        <!-- Vestidos -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card text-center p-3">
                <div class="card-body">
                    <h5 class="card-title mb-4 text-danger"><i class="fas fa-tshirt"></i> Vestidos</h5>
                    <a href="<?= base_url('V1') ?>" class="btn btn-danger btn-sm mb-3 w-100">
                        <i class="fas fa-star"></i> Fiesta
                    </a>
                    <a href="<?= base_url('V2') ?>" class="btn btn-danger btn-sm w-100">
                        <i class="fas fa-user-tie"></i> Formal
                    </a>
                </div>
            </div>
        </div>
        <!-- Carteras -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card text-center p-3">
                <div class="card-body">
                    <h5 class="card-title mb-4 text-secondary"><i class="fas fa-wallet"></i> Carteras</h5>
                    <a href="<?= base_url('C1') ?>" class="btn btn-secondary btn-sm mb-3 w-100">
                        <i class="fas fa-hand-holding"></i> Mano
                    </a>
                    <a href="<?= base_url('C2') ?>" class="btn btn-secondary btn-sm w-100">
                        <i class="fas fa-briefcase"></i> Hombro
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url('public/assets/js/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>
