<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login | HiVideo+</title>
  <link rel="stylesheet" href="styleLog.css" />
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #0d1117;
      color: #fff;
    }

    header {
      background: #161b22;
      padding: 1rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    header h1 {
      color: #58a6ff;
      margin: 0;
      font-size: 1.5rem;
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 1.5rem;
      margin: 0;
      padding: 0;
    }

    nav a {
      color: #c9d1d9;
      text-decoration: none;
      transition: color 0.2s ease;
    }

    nav a:hover {
      color: #58a6ff;
    }

    .login-container {
      max-width: 400px;
      margin: 5rem auto;
      background-color: #161b22;
      padding: 2rem;
      border-radius: 12px;
      box-shadow: 0 0 12px rgba(88, 166, 255, 0.15);
    }

    .login-container h2 {
      text-align: center;
      margin-bottom: 1.5rem;
      color: #58a6ff;
    }

    .login-container label {
      display: block;
      margin-bottom: 0.5rem;
      font-weight: bold;
      color: #c9d1d9;
    }

    .login-container input {
      width: 100%;
      padding: 0.75rem;
      margin-bottom: 1.5rem;
      border: none;
      border-radius: 8px;
      background-color: #0d1117;
      color: #fff;
      outline: none;
    }

    .login-container button {
      width: 100%;
      padding: 0.75rem;
      background-color: #58a6ff;
      color: #0d1117;
      font-weight: bold;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: background 0.2s ease;
    }

    .login-container button:hover {
      background-color: #1f6feb;
    }

    .login-container .extra {
      text-align: center;
      margin-top: 1rem;
      color: #8b949e;
      font-size: 0.9rem;
    }

    .login-container .extra a {
      color: #58a6ff;
      text-decoration: none;
    }

    .login-container .extra a:hover {
      text-decoration: underline;
    }

    footer {
      text-align: center;
      padding: 1rem;
      background: #161b22;
      color: #8b949e;
      font-size: 0.9rem;
    }
  </style>
</head>
<body>

  <header>
    <h1>HiVideo+</h1>
    <nav>
      <ul>
        <li><a href="index.html"></a></li>
      </ul>
    </nav>
  </header>

  <div class="login-container">
    <h2>Iniciar Sesión</h2>
    <form onsubmit="redirigirInicio(event)">
      <label for="correo">Correo electrónico</label>
      <input type="email" id="correo" name="correo" placeholder="tucorreo@ejemplo.com" required />

      <label for="password">Contraseña</label>
      <input type="password" id="password" name="password" placeholder="********" required />

      <button type="submit">Ingresar</button>
    </form>
    <div class="extra">
      ¿No tienes una cuenta? <a href="registro.html">Regístrate aquí</a>
    </div>
  </div>

  <footer>
    <p>&copy; 2025 HiVideo+. Todos los derechos reservados.</p>
  </footer>

  <script>
    function redirigirInicio(event) {
      event.preventDefault(); // Evita que el formulario se envíe
      // Puedes añadir validación aquí si deseas
      window.location.href = 'dashboard.php'; // Redirección a la página principal
    }
  </script>

</body>
</html>
