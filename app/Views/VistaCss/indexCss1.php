<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @layer base1;
        @layer base2;

        @layer base1 {
            h1 {
                color: red;
            }
        }

        @layer base2 {
            p {
                color: blue;
            }
        }
    </style>
</head>

<body>
    <h1>Titulo</h1>
    <p>Parrafo</p>
</body>

</html>