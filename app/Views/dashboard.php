<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Dashboard</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f5f7fa;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            align-items: center;
            justify-content: center;
            color: #333;
        }

        .dashboard-container {
            background: white;
            padding: 40px 50px;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.1);
            text-align: center;
            max-width: 400px;
            width: 90%;
        }

        h1 {
            margin-bottom: 24px;
            font-weight: 700;
            font-size: 1.8rem;
            color: #2575fc;
        }

        a.logout-button {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 28px;
            background-color: #ff4c4c;
            color: white;
            font-weight: 600;
            text-decoration: none;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }

        a.logout-button:hover {
            background-color: #cc3b3b;
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <h1>Bienvenido al Dashboard, <?= session('usuario') ?>!</h1>
        <a href="<?= base_url('/logout') ?>" class="logout-button">Cerrar sesión</a>
    </div>
</body>
</html>
