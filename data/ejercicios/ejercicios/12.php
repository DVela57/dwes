<?php
    $valido = false;
    if($_SERVER["REQUEST_METHOD"] === "POST") {
        if(isset($_POST["envio"])) {
            if (isset($_POST["nombre"]) && !empty($_POST["nombre"])) {
                $nombre = $_POST["nombre"];
                $valido = true;
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario nombre</title>
</head>
<body>
    <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST">
        <p>
            <label for="nombre">Introduce un nombre</label>
            <input type="text" name="nombre" id="nombre">
        </p>
        <input type="submit" value="EnviarDatos" name="envio" id="envio">
    </form>

    <?php
        if(isset($_POST["envio"])) {
            if ($valido) {
                print "<br>Saludos " .  $nombre;
            } else {
                print "<br><p> El campo nombre es obligatorio</p>";
            }
        }
    ?>
</body>
</html>