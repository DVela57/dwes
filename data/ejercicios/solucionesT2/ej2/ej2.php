<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ej2.php</title>
</head>
<body>
    <h1>Datos del nombre recibidos </h1>
    <?php
        if(isset($_POST["envio"])){
            if (!empty($_POST['nombre']))  {
                $nombre = $_POST["nombre"];
                print "<br>Has introducido el nombre: " . $nombre;
            }
            else {
                print "<br><h3>No has introducido ningun nombre, es obligatorio, vuelve atras e introduce un nombre</h3>";
                print "<a href='/solucionesT2/ej2/ej2.html'>Vuelve al formulario</a> ";

            }
        }
        else {
            print "<br>No has enviado ningun dato";
        }

    ?>

</body>
</html>