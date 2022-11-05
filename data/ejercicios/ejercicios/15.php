<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio arrays</title>
</head>
<body>
    <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST">
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
        //un array de nombres que si no estan los 3 nombres no muestra el array
        if($_SERVER["REQUEST_METHOD"] === "POST") {
            if(isset($_POST["envio"])){
                if (!empty($_POST['nombres']))  {
                    $nombres = $_POST["nombres"];
                    $size = 0;
                    foreach($nombres as $nombre){
                        if ($nombre != null) {
                            $size ++;
                        }
                    }
                    if ($size == 3) {
                        print "<br>Nombres escritos:";
                        foreach($nombres as $nombre) {
                            print "<br>-" . $nombre;
                        }
                    }else {
                        print "<br><h3>No has introducido algun nombre, es obligatorio introducir los 3 nombres</h3>";
                    }
                }
            }
        }

    ?>
</body>
</html>