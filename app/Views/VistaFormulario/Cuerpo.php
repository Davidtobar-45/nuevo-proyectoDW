<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?= base_url('/Suma/procesar') ?>" method="post">
        <div style="width:25%">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Numero 1:</span>
                </div>
                <input type="text" class="form-control" aria-label="Default"
                    aria-describedby="inputGroup-sizing-default" name="numero1">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Numero 2:</span>
                </div>
                <input type="text" class="form-control" aria-label="Default"
                    aria-describedby="inputGroup-sizing-default" name="numero2">
            </div>
        </div>
        <div>
            <button type="submit" class="btn btn-outline-success">Calcular</button>
        </div>
    </form>

</body>

</html>