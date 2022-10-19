<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ej5</title>
</head>
<body>
    <form name = "ej5"action="#" method="post">
        <h1>Formulario de envio de arrays</h1>
        <p>
            <label for="nombre1">Introduce el primer nombre</label>
            <input type="text" name="nombres[]" id="nombre1" >
        </p>
        <p>
            <label for="nombre2">Introduce el segundo nombre</label>
            <input type="text" name="nombres[]" id="nombre2" >
        </p>
        <p>
            <label for="nombre3">Introduce el tercer nombre</label>
            <input type="text" name="nombres[]" id="nombre3" >
        </p>
        <br>
        <button type="submit" name="envio" id="envio" value="enviarDatos">Enviar Datos</button>
    </form>
    <?php
        if(isset($_POST["envio"])){
            if (!empty($_POST['nombres']))  {
                $nombres = $_POST["nombres"];
                $size = count($nombres);
                if ($size != 0) {
                    print "<br>Nombres escritos:";
                    foreach($nombres as $nombre) {
                        print "<br>-" . $nombre;
                    }
                }else {
                    print "<br><h3>No has introducido algun nombre, es obligatorio, vuelve atras e introduce un nombre</h3>";
                }
            }
        }
        else {
            print "<br>No has enviado ningun dato";
        }

    ?>
</body>
</html>