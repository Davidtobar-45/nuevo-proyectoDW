<?php
$imagenesExternas = [
    'zapatos' => [
        '1' => 'https://i.pinimg.com/736x/10/f4/ed/10f4ed0225851feaafed85249d361c3a.jpg',
        '2' => 'https://i.pinimg.com/736x/55/16/54/551654be0590aa43361f6c85020d4d3a.jpg',
    ],
    'vestidos' => [
        '1' => 'https://i.pinimg.com/736x/ef/31/82/ef318244b8dd918356d3e76e390487c0.jpg',
        '2' => 'https://i.pinimg.com/736x/8b/f1/2d/8bf12dd7f5f308387192f9f52ca83be9.jpg',
    ],
    'carteras' => [
        '1' => 'https://i.pinimg.com/736x/94/96/7c/94967c234ab1336ebb28a0f98afcfcc4.jpg',
        '2' => 'https://i.pinimg.com/736x/4d/be/83/4dbe83d66e982d046f2c4185a6266b51.jpg',
    ],
];

$categoriaLower = strtolower($categoria);
$imagenUrl = $imagenesExternas[$categoriaLower][$id] ?? 'https://example.com/images/default.jpg';
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title><?= $categoria ?> - Producto <?= $id ?></title>
<link rel="stylesheet" href="<?= base_url('public/css/style2.css') ?>">
</head>
<body class="fondo">
  <main class="cuadro-bienvenida">
    <h1><?= $categoria ?> - Producto <?= $id ?></h1>

    <div class="producto-img-container">
      <img src="<?= $imagenUrl ?>" alt="Imagen de <?= $categoria ?> <?= $id ?>" />
    </div>

    <p>Estás viendo el producto número <strong><?= $id ?></strong> de la categoría <strong><?= $categoria ?></strong>.</p>
    <a href="<?= base_url('welcome') ?>" class="logout-link">Volver al inicio</a>
  </main>
</body>
</html>