<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Bienvenido</title>
<link rel="stylesheet" href="<?= base_url('public/css/style2.css') ?>">
</head>
<body class="fondo">
  <main class="cuadro-bienvenida">
    <h1>Bienvenido</h1>
    <p>Has iniciado sesión como <strong><?= session('usuario') ?></strong></p>

    <div class="opciones">
      <!-- Zapatos -->
      <div>
        <a href="#" class="btn-opcion">Zapatos</a>
        <div class="btn-subopciones">
          <a href="<?= base_url('zapatos/1') ?>" class="btn-subopcion">1</a>
          <a href="<?= base_url('zapatos/2') ?>" class="btn-subopcion">2</a>
        </div>
      </div>

      <!-- Vestidos -->
      <div>
        <a href="#" class="btn-opcion">Vestidos</a>
        <div class="btn-subopciones">
          <a href="<?= base_url('vestidos/1') ?>" class="btn-subopcion">1</a>
          <a href="<?= base_url('vestidos/2') ?>" class="btn-subopcion">2</a>
        </div>
      </div>

      <!-- Carteras -->
      <div>
        <a href="#" class="btn-opcion">Carteras</a>
        <div class="btn-subopciones">
          <a href="<?= base_url('carteras/1') ?>" class="btn-subopcion">1</a>
          <a href="<?= base_url('carteras/2') ?>" class="btn-subopcion">2</a>
        </div>
      </div>
    </div>

    <div style="text-align: center;">
      <a href="<?= base_url('logout') ?>" class="logout-link">Cerrar sesión</a>
    </div>
  </main>
</body>
</html>
