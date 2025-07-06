<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Zapatos Casual</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <style>
        body {
            background-color:rgb(150, 200, 249);
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

        .btn-primary {
            border-radius: 30px;
            padding: 8px 20px;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center">Zapatos Casual</h2>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <img src="https://www.aki.com.ec/catalogo-familia-2021/wp-content/uploads/2021/05/7450111128446-768x768.jpg" class="card-img-top" alt="Zapato de Cuero">
                <div class="card-body text-center">
                    <h5 class="card-title">Zapato de Cuero</h5>
                    <p class="card-text fw-bold text-success">$70.00</p>
                    <a href="#" class="btn btn-primary">Agregar al carrito</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>
