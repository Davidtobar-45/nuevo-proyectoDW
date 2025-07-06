<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Carteras de Mano</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <style>
        body {
            background-color:rgb(192, 183, 20);
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
    <h2 class="text-center">Carteras de Mano</h2>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <img src="https://m.media-amazon.com/images/I/81xkxZVWU+L._AC_SY300_SX300_.jpg" class="card-img-top" alt="Cartera Clásica">
                <div class="card-body text-center">
                    <h5 class="card-title">Cartera Clásica</h5>
                    <p class="card-text fw-bold text-success">$60.00</p>
                    <a href="#" class="btn btn-secondary">Agregar al carrito</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>
