<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Suma de Ingresos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        .container {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            border: 2px solid #ccc;
            border-radius: 10px;
            background: #f9f9f9;
        }
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
            font-size: 16px;
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: #007BFF;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .resultado {
            margin-top: 15px;
            font-weight: bold;
            font-size: 18px;
        }
    </style>
    <link rel="stylesheet" href="<?= base_url('public/css/bootstrap.main.css') ?>">
</head>
<body>

<div class="container">
    <h2>Suma de Ingresos</h2>
    <form method="post">
        <input type="number" name="ingreso1" placeholder="Ingreso 1" step="any" required>
        <input type="number" name="ingreso2" placeholder="Ingreso 2" step="any" required>
        <input type="number" name="ingreso3" placeholder="Ingreso 3" step="any" required>
        <button type="submit" name="calcular">Calcular</button>
    </form>

    <?php
    if (isset($_POST['calcular'])) {
        $ing1 = floatval($_POST['ingreso1']);
        $ing2 = floatval($_POST['ingreso2']);
        $ing3 = floatval($_POST['ingreso3']);
        $total = $ing1 + $ing2 + $ing3;
        echo "<div class='resultado'>Total de ingresos: <strong>\$" . number_format($total, 2) . "</strong></div>";
    }
    ?>
</div>

<script src="<?= base_url('public/js/bootstrap.bundle.min.js') ?>"></script>

</body>
</html>
