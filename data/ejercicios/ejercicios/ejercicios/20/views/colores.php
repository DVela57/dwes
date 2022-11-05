<?php
//sigue la session
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>envioColor</title>
</head>
<body>
    <ul>
        <li><a href="?method=cambio&color=red">Rojo</a></li>
        <li><a href="?method=cambio&color=green">Verde</a></li>
        <li><a href="?method=cambio&color=blue">Azul</a></li>
        <li><a href="?method=cambio&color=yellow">Amarillo</a></li>
    </ul>
</body>
</html>