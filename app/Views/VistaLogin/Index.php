<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio en clase </title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: grey;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
    <link rel="stylesheet" href="<?= base_url('public/css/bootstrap.min.css') ?>">
    <script src="<?= base_url('public/js/bootstrap.budle.min.js') ?>"> </script>
</head>
<body>
    
    <div>
        <h1>SUMA DE NUMEROS</h1>

        <label>Numero 1 :</label>
        <input type="number" id="num1" placeholder="numero1"><br><br>

        <label>Numero 2 :</label>
        <input type="number" id="num2" placeholder="numero2"><br><br>

        <label>Numero 3 :</label>
        <input type="number" id="num3" placeholder="numero3"><br><br>

        <button onclick="sumarNumeros()">Sumar</button>
        
        
        <p id="resultado"></p>
    </div>

    <script>
      function sumarNumeros() {
        let n1 = parseFloat(document.getElementById("num1").value) || 0;
        let n2 = parseFloat(document.getElementById("num2").value) || 0;
        let n3 = parseFloat(document.getElementById("num3").value) ||0;

        let suma = n1 + n2 + n3;

        document.getElementById("resultado").innerText = "La suma es: " + suma;
      }
    </script>
</body>
</html>