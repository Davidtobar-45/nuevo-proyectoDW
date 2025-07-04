<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio en clase</title>
    <style>
        .Contenedor {
            padding-top: 10px;
            padding-left: 10px;
            padding-bottom: 10px;
            padding-right: 10px;
        }

        .cuadro {
            width: 400px;
            padding: 8px;
            margin: 20px;
            border: 4px solid #444;
            border-radius: 20px;
            background-color: #ffffff;
            box-shadow: 0 0 15px rgba(0,0,0,0.3);
            box-sizing: border-box;
        }

        .imagen {
            width: calc(100% - 16px);
            height: 300px;
            border-radius: 10px;
            overflow: hidden;
            margin: 8px 8px 10px 8px;
        }

        .imagen img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
        }

        button {
            width: calc(80% - 16px);
            margin: 8px auto;
            padding: 8px;
            background-color: #eee;
            border: 2px solid black;
            border-radius: 10px;
            display: block;
            cursor: pointer;
        }

        .texto-span {
            display: block;
            width: calc(80% - 16px);
            margin: 8px auto;
            padding: 8px;
            text-align: center;
            font-weight: bold;
        }

        .pie-span {
            display: block;
            text-align: center;
            margin: 8px 8px 0 8px;
            padding: 8px;
            font-style: italic;
        }

        h1 {
            margin: 8px;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="Contenedor">
        <div class="cuadro">
            <h1>Hola mundo</h1>
        
            <div class="imagen">
                <img src="https://i.pinimg.com/736x/bb/b7/47/bbb747d0ddc84506d64dcbfaef60a34a.jpg" alt="Imagen">
            </div>

            <span class="texto-span">Kaoruko es una chica guapa de pelo largo y oscuro y ojos negros. Es bajita, incluso los demás la confunden con una estudiante de secundaria. Normalmente lleva el pelo suelto, con una diadema, pero se la puede ver luciendo otros peinados cuando está en citas o en el trabajo.</span>
            <button onclick="alert('Botón 2 presionado')">Botón </button>
            
            <span class="pie-span">este es el span</span>
        </div>
    </div>

</body>
</html>