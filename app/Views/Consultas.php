<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Disponibilidad - Laguna Mall</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="public/consultas/pagconsul.css">
</head>
<body>

<!-- Título en div azul -->
<div class="tituloConsulta">
    <h2>Consulta lugares de estacionamiento disponibles dentro de nuestro edificio</h2>
</div>

<!-- Sección de búsqueda de auto -->
<div class="container mb-3">
    <a href="<?= base_url('/verauto') ?>" class="btn btn-primary">Ver mi auto</a>

</div>
<!-- Sección de Piso 1 -->
<div class="seccionEstacionamiento">
    <h3>Piso 1</h3>
    <div class="estacionamientosContainer">
        <!-- Primera mitad de los estacionamientos (lugares) -->
        <div class="estacionamiento disponible">
            Lugar A1 (Auto)
            <button class="btn btn-success botonReservar" onclick="reservar('A1')">Reservar</button>
        </div>
        <div class="estacionamiento disponible">
            Lugar A2 (Auto)
            <button class="btn btn-success botonReservar" onclick="reservar('A2')">Reservar</button>
        </div>
        <div class="estacionamiento disponible">
            Lugar A3 (Auto)
            <button class="btn btn-success botonReservar" onclick="reservar('A3')">Reservar</button>
        </div>
        <div class="estacionamiento disponible">
            Lugar A4 (Auto)
            <button class="btn btn-success botonReservar" onclick="reservar('A4')">Reservar</button>
        </div>
        <div class="estacionamiento disponible">
            Lugar A5 (Auto)
            <button class="btn btn-success botonReservar" onclick="reservar('A5')">Reservar</button>
        </div>
        <div class="estacionamiento disponible">
            Lugar A7 (Auto)
            <button class="btn btn-success botonReservar" onclick="reservar('A7')">Reservar</button>
        </div>
        <div class="estacionamiento disponible">
            Lugar A9 (Auto)
            <button class="btn btn-success botonReservar" onclick="reservar('A9')">Reservar</button>
        </div>
        <div class="estacionamiento disponible">
            Lugar M1 (Moto)
            <button class="btn btn-success botonReservar" onclick="reservar('M1')">Reservar</button>
        </div>
        <div class="estacionamiento disponible">
            Lugar M3 (Moto)
            <button class="btn btn-success botonReservar" onclick="reservar('M3')">Reservar</button>
        </div>
        <div class="estacionamiento disponible">
            Lugar M4 (Moto)
            <button class="btn btn-success botonReservar" onclick="reservar('M4')">Reservar</button>
        </div>
        <div class="estacionamiento disponible">
            Lugar M5 (Moto)
            <button class="btn btn-success botonReservar" onclick="reservar('M5')">Reservar</button>
        </div>
    </div>
</div>

<!-- Sección de Piso Subterráneo -->
<div class="seccionEstacionamiento">
    <h3>Piso Subterráneo</h3>
    <div class="estacionamientosContainer">
        <!-- Primera mitad de los estacionamientos (8 lugares) -->
        <div class="estacionamiento disponible">
            Lugar B1 (Auto)
            <button class="btn btn-success botonReservar" onclick="reservar('B1')">LLENO</button>
        </div>
        <div class="estacionamiento disponible">
            Lugar B2 (Auto)
            <button class="btn btn-success botonReservar" onclick="reservar('B2')">LLENO</button>
        </div>
        <div class="estacionamiento disponible">
            Lugar B3 (Auto)
            <button class="btn btn-success botonReservar" onclick="reservar('B3')">LLENO</button>
        </div>
        <div class="estacionamiento disponible">
            Lugar B4 (Auto)
            <button class="btn btn-success botonReservar" onclick="reservar('B4')">LLENO</button>
        </div>
        
        <div class="estacionamiento disponible">
            Lugar B6 (Auto)
            <button class="btn btn-success botonReservar" onclick="reservar('B6')">LLENO</button>
        </div>
        <div class="estacionamiento disponible">
            Lugar B8 (Auto)
            <button class="btn btn-success botonReservar" onclick="reservar('B8')">LLENO</button>
        </div>
    </div>
</div>

<script>
    // Función para redirigir a la página de reservas
    function reservar(espacio) {
    // Construir la URL correctamente con base_url() de CodeIgniter
    window.location.href = "<?= base_url('reservas') ?>?espacio=" + encodeURIComponent(espacio);
}
</script>

</body>
</html>