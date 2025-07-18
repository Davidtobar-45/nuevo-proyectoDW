<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Usuario</title>
</head>
<body>
    <form action="<?= base_url().'Crear'?>" method="post">
        <label for="us_nombre">NOMBRE</label>
        <input type="text" name="usu_nombre" >

        <label for="">CORREO</label>
        <input type="email" name="usu_correo" >

        <label for="">PASS</label>
        <input type="password" name="usu_pass">

        <label for="usu_edula">CEDULA</label>
        <input type="text" name="usu_cedula">

        <label for="us_estado">ESTADO</label>
        <input type="text" name="usu_estado">

        <br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
