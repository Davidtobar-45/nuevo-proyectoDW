<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Carteras de Hombro</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <style>
        body {
            background-color:rgb(174, 172, 48);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        h2 {
            margin-bottom: 30px;
            font-weight: 600;
        }

        .card {
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border: none;
            border-radius: 15px;
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card-img-top {
            height: 300px;
            object-fit: cover;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }

        .btn-secondary {
            border-radius: 30px;
            padding: 8px 20px;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center">Carteras de Hombro</h2>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <img src="https://f.fcdn.app/imgs/6d7e0d/symphorine.com.uy/sym/df2e/webp/catalogo/S18BO3-13-1/500x750/cartera-de-hombro-hebilla-verde-oliva.jpg" class="card-img-top" alt="Cartera Bandolera">
                <div class="card-body text-center">
                    <h5 class="card-title">Cartera Estilo Bandolera</h5>
                    <p class="card-text fw-bold text-success">$75.00</p>
                    <a href="#" class="btn btn-secondary">Agregar al carrito</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>
