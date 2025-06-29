<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Multiplicación y Potencias</title>

    <!-- Bootstrap CSS offline -->
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>">
</head>
<body>

<div class="container mt-5">
    <div class="row">

        <!-- Sección: Tabla de Multiplicar -->
        <div class="col-md-6 border-end">
            <h2 class="text-center mb-4">Tabla de Multiplicar</h2>

            <div class="mb-3">
                <label for="numMult" class="form-label">Ingrese un número:</label>
                <input type="number" id="numMult" class="form-control" value="2">
            </div>

            <button id="btnMult" class="btn btn-primary w-100 mb-3">Generar Tabla</button>

            <pre id="resultadoMult" class="bg-light p-3" style="min-height: 200px;"></pre>
        </div>

        <!-- Sección: Potencias -->
        <div class="col-md-6">
            <h2 class="text-center mb-4">Potencias</h2>

            <div class="mb-2">
                <label for="base" class="form-label">Base:</label>
                <input type="number" id="base" class="form-control" value="2">
            </div>

            <div class="mb-2">
                <label for="exponente" class="form-label">Exponente:</label>
                <input type="number" id="exponente" class="form-control" value="3">
            </div>

            <button id="btnPot" class="btn btn-success w-100 mb-3">Calcular Potencias</button>

            <pre id="resultadoPot" class="bg-light p-3" style="min-height: 200px;"></pre>
        </div>

    </div>
</div>

<!-- Bootstrap JS offline -->
<script src="<?= base_url('bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

<!-- Tu script personalizado -->
<script src="<?= base_url('js/script.js') ?>"></script>

</body>
</html>
