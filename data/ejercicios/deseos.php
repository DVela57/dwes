<?php
session_start();
    if (isset($_POST["envio"])) {
        if (!empty($_POST["deseos"])) {
            
        }

    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=""<?php print htmlspecialchars($_SERVER['PHP_SELF']) ?>">
        <p>
            <h1>Lista de deseos:</h1>
            <select name="deseos" id="deseos">
                <option value="vaqueros">vaqueros</option>
                <option value="mobil">mobil</option>
                <option value="coche">coche</option>
                <option value="collar">collar</option>
                <option value="casa">casa</option>
            </select>
        </p>
        <input type="submit" name="envio" id="envio" value="Añadir/Eliminar">
    </form>
</body>
</html>