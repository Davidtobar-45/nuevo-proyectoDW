<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicios con CodeIgniter</title>
    <!-- Carga el archivo CSS de Bootstrap para estilos -->
    <link rel="stylesheet" href="<?= base_url('public/assets/bootstrap/css/bootstrap.min.css') ?>">
    <!-- Nota: aquí no debes cargar archivos JS como si fueran CSS -->
</head>
<body class="bg-light py-5">

    <div class="container">
        <div class="row justify-content-center">
            <!-- Sección para la tabla de multiplicar -->
            <div class="col-md-5 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-center">Tabla de Multiplicar</h5>
                        <!-- Input para que el usuario escriba el número -->
                        <input type="number" id="numeroMultiplicar" class="form-control my-2" placeholder="Ingrese un número">
                        <!-- Botón para generar la tabla -->
                        <button id="btnMultiplicar" class="btn btn-primary w-100 mb-2">Generar Tabla</button>
                        <!-- Aquí se mostrará el resultado de la tabla -->
                        <div id="resultadoMultiplicar" class="bg-light p-2 rounded" style="min-height: 50px;"></div>
                    </div>
                </div>
            </div>

            <!-- Sección para calcular potencias -->
            <div class="col-md-5 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-center">Potencias</h5>
                        <!-- Inputs para base y exponente -->
                        <input type="number" id="base" class="form-control mb-2" placeholder="Base">
                        <input type="number" id="exponente" class="form-control mb-2" placeholder="Exponente">
                        <!-- Botón para calcular potencias -->
                        <button id="btnPotencia" class="btn btn-primary w-100 mb-2">Calcular</button>
                        <!-- Aquí se mostrarán los resultados -->
                        <div id="resultadoPotencia" class="bg-light p-2 rounded" style="min-height: 50px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Carga el JavaScript de Bootstrap (popper + bootstrap) -->
    <script src="<?= base_url('public/assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <!-- Carga el archivo JS con las funciones que hacen las peticiones AJAX -->
    <script src="<?= base_url('public/assets/js/funciones.js') ?>"></script>

</body>
</html>
