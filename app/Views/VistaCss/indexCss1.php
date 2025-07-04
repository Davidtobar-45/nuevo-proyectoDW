<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        @layer Base1, Base2;
        
        html {
            font-size: 16px;
        }
        
        @layer Base1 {
            h1 {
                background-color: blue;
                font-size: 1.5rem; 
                padding: 1em; 
            }
        }
        
        @layer Base2 {
            h1 {
                background-color: yellow;
                margin: 0.5rem; 
            }
        }
    </style>
</head>
<body>
    <span style="font-size: 26px;"></span>
    <h1>hola world</h1>
    <p>hola cuasas</p>
</body>
</html>