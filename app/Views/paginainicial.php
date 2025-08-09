<?php helper('url'); ?> 
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Estacionamientos Seguros</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <style>
    /* Reset y tipografía */
    body, html {
      margin: 0; padding: 0; height: 100%;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #1e3c72, #2a5298);
      color: #e0e6f1;
    }

    /* HEADER: barra superior full ancho */
    header.containerGestionEstacionamientos {
      width: 100%;
      background-color: #0a193c;
      color: #a7c7ff;
      display: flex;
      align-items: center;
      justify-content: center; /* Centrar contenido */
      gap: 15px;
      padding: 8px 20px; /* Más compacto */
      box-shadow: 0 4px 8px rgba(0,0,0,0.4);
      position: sticky;
      top: 0;
      z-index: 100;
    }

    /* Para que logo y título estén juntos y centrados */
    .headerContent {
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .headerLogo {
      height: 40px; /* Un poco más pequeño */
      filter: drop-shadow(0 0 4px #53a7ff);
    }

    header h1 {
      font-weight: 800;
      font-size: 1.6rem; /* Más pequeño para que no ocupe tanto */
      margin: 0;
      white-space: nowrap;
      text-shadow: 1px 1px 5px #0f2a60;
    }

    /* CONTENIDO PRINCIPAL: contenedor centrado con dos columnas */
    main.mainContainer {
      max-width: 1100px;
      margin: 30px auto;
      display: flex;
      gap: 40px;
      padding: 0 20px;
      color: #cbd9ff;
    }

    /* Columna izquierda: info + imagen */
    .columnaImagen {
      flex: 2;
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .imagenCentroComercial {
      width: 100%;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(27, 85, 169, 0.7);
      transition: transform 0.3s ease;
      margin-bottom: 20px;
    }
    .imagenCentroComercial:hover {
      transform: scale(1.03);
      box-shadow: 0 12px 25px rgba(27, 85, 169, 0.9);
    }

    h3 {
      color: #81a9ff;
      font-weight: 700;
      margin-bottom: 8px;
    }
    p {
      font-size: 1rem;
      line-height: 1.5;
      color: #d1d9ffcc;
      margin: 6px 0;
    }
    strong {
      color: #acc9ff;
    }

    /* Columna derecha: tarjeta disponibilidad */
    .columnaDisponibilidad {
      flex: 1;
      background-color: #12294a;
      border-radius: 20px;
      box-shadow: 0 10px 25px rgba(27, 85, 169, 0.9);
      padding: 25px 25px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      min-width: 500px; /* Más ancho para destacar */
    }

    .tarjetaDisponibilidad {
      width: 100%;
      border-radius: 20px;
      overflow: hidden;
      background-color: #1b2f61;
      box-shadow: 0 10px 25px rgba(27, 85, 169, 1);
      transition: box-shadow 0.3s ease;
    }
    .tarjetaDisponibilidad:hover {
      box-shadow: 0 15px 35px rgba(27, 85, 169, 1);
    }

    .tarjetaDisponibilidad img {
      width: 100%;
      height: 280px; /* Imagen más grande */
      object-fit: cover;
      filter: brightness(0.85);
      transition: filter 0.3s ease;
    }
    .tarjetaDisponibilidad img:hover {
      filter: brightness(1);
    }

    .cuerpoTarjeta {
      padding: 30px 25px;
      text-align: center;
      color: #b8c9ff;
    }

    .tituloTarjeta {
      font-size: 1.8rem; /* Más grande */
      margin-bottom: 16px;
      font-weight: 700;
      color: #a7c7ff;
      text-shadow: 1px 1px 4px #0f2a60;
    }

    .textoTarjeta {
      font-size: 1.2rem; /* Más grande */
      margin-bottom: 24px;
      color: #d1d9ffcc;
      line-height: 1.5;
    }

    .botonConsultar.btn {
      background: linear-gradient(90deg, #4a90e2, #357abd);
      border: none;
      padding: 15px 36px; /* Más grande */
      border-radius: 40px;
      color: white;
      font-weight: 700;
      font-size: 1.2rem; /* Más grande */
      box-shadow: 0 8px 20px rgba(69, 130, 246, 0.9);
      transition: background 0.3s ease, box-shadow 0.3s ease;
      text-decoration: none;
      display: inline-block;
      cursor: pointer;
    }

    .botonConsultar.btn:hover {
      background: linear-gradient(90deg, #3a6cb0, #254a73);
      box-shadow: 0 10px 25px rgba(40, 70, 140, 1);
      color: #e0e6f1;
      text-decoration: none;
    }

    /* Responsive para móvil */
    @media (max-width: 768px) {
      main.mainContainer {
        flex-direction: column;
        margin: 20px 15px;
        gap: 30px;
      }
      .columnaDisponibilidad {
        min-width: auto;
        width: 100%;
      }
      .columnaImagen {
        flex: none;
      }
      header.containerGestionEstacionamientos {
        justify-content: center;
        padding: 10px 15px;
      }
      .headerContent {
        flex-direction: column;
        gap: 8px;
      }
    }
  </style>
</head>
<body>

  <header class="containerGestionEstacionamientos">
    <div class="headerContent">
      <img src="https://iccsi.com.ar/wp-content/uploads/como-funciona-el-sistema-de-aparcamiento-inteligente.webp" alt="Logo Estacionamiento" class="headerLogo" />
      <h1>Gestión de Estacionamientos Inteligentes</h1>
    </div>
  </header>

  <main class="mainContainer">
    <div class="columnaImagen">
      <img src="https://cloudfront-eu-central-1.images.arcpublishing.com/diarioas/MIWSLDHXYJFGFDVWCQ6TI2LDI4.jpg" class="imagenCentroComercial" alt="Centro Comercial" />
      <h3>Estacionamientos inteligentes para tu Edificio</h3>
      <p><strong>Dirección:</strong> Av. Fray Vacas Galindo 1541-1519, QUITO</p>
      <p><strong>Teléfono:</strong> 879-558</p>
      <p><strong>Horario:</strong> Abierto ⋅ Cierra a las 8:00 p.m</p>
      <h3>Acerca de la plataforma</h3>
      <p>Esta página web te permite consultar y reservar un espacio dentro de la disponibilidad de estacionamientos, facilitando tu experiencia de parqueo de manera rápida y segura.</p>
    </div>

    <div class="columnaDisponibilidad">
      <div class="tarjetaDisponibilidad card">
        <img src="https://img-s-msn-com.akamaized.net/tenant/amp/entityid/AA1JYpe0.img?w=768&h=355&m=6" alt="Consultar Disponibilidad" />
        <div class="cuerpoTarjeta card-body">
          <h5 class="tituloTarjeta">Consultar lugares disponibles</h5>
          <p class="textoTarjeta">Revisa los espacios disponibles y resérvalos antes de que se llenen.</p>
          <a href="<?= base_url('Consultas') ?>" class="botonConsultar btn">Haz clic aquí para consultar</a>
        </div>
      </div>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
