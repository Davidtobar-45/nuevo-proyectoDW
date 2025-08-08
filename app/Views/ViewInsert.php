<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Bonito</title>
    <style>
        /* Tipografía y fondo */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Contenedor del formulario */
        .form-container {
            background-color: #ffffff;
            padding: 2rem 3rem;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            width: 100%;
            max-width: 400px;
        }

        /* Título */
        .form-container h1 {
            text-align: center;
            margin-bottom: 1.5rem;
            color: #333;
        }

        /* Etiquetas e inputs */
        label {
            display: block;
            margin-bottom: 0.5rem;
            color: #444;
            font-weight: 600;
        }

        input[type="text"] {
            width: 100%;
            padding: 0.6rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
            transition: border 0.3s ease;
        }

        input[type="text"]:focus {
            border-color: #007BFF;
            outline: none;
        }

        /* Botón */
        button {
            width: 100%;
            padding: 0.75rem;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h1>Guardar Datos</h1>
        <form action="<?= base_url().'Crear' ?>" method="post">
            <label for="nombre">Nombre</label>
            <input type="text" name="usu_nombre">

            <label for="correo">Correo</label>
            <input type="text" name="usu_correo">

            <label for="pass">Contraseña</label>
            <input type="text" name="usu_pass">

            <label for="cedula">Cédula</label>
            <input type="text" name="usu_cedula">

            <label for="estado">Estado</label>
            <input type="text" name="usu_estado">

            <button type="submit">GUARDAR DATOS</button>
        </form>
    </div>
</body>

</html>