<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Login - Sistema</title>
    <style>
        /* Reset básico */
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #5286ffff, #182848);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            background: #fff;
            padding: 40px 30px;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.15);
            width: 350px;
            text-align: center;
        }

        h2 {
            margin-bottom: 25px;
            color: #182848;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px 15px;
            margin: 10px 0 20px;
            border: 1.8px solid #ccc;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #4b6cb7;
            outline: none;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #4b6cb7;
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background: #395694;
        }

        .error {
            background: #ffcccc;
            color: #e26c6cff;
            padding: 10px;
            border-radius: 6px;
            margin-bottom: 15px;
            font-weight: 600;
        }

        label {
            display: block;
            text-align: left;
            margin-left: 5px;
            font-weight: 600;
            color: #587fccff;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h2>Iniciar Sesión</h2>

        <?php if(session()->getFlashdata('error')): ?>
            <div class="error">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>

        <form method="post" action="<?= base_url('autenticar') ?>">
            <label for="correo">Correo</label>
            <input type="text" id="correo" name="correo" placeholder="Ingrese su correo" required>

            <label for="clave">Contraseña</label>
            <input type="password" id="clave" name="clave" placeholder="Ingrese su contraseña" required>

            <button type="submit">Entrar</button>
        </form>
    </div>

</body>
</html>
