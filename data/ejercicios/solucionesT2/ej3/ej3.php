<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ej3</title>
</head>
<body>
    <form name = "ej2"action="#" method="post">
        <h1>Formulario de registro de nombres</h1>
        <p>
            <label for="nombre">Introduce tu nombre</label>
            <input type="text" name="nombre" id="nombre" >
        </p>
        <button type="submit" name="envio" id="envio" value="enviarDatos">Enviar Datos</button>
    </form>
    <?php
        if(isset($_POST["envio"])){
            if (!empty($_POST['nombre']) )  {
                $nombre = $_POST["nombre"];
                print "<br>Has introducido el nombre: " . $nombre;
                $longNombre = strlen($nombre);
                if ($longNombre >= 3) {
                    print "<br>Nombre correctamente introducido" ;
                }
                else {
                    print "<br>El nombre debe de ser de mas de 2 caracteres";
                    print "<br>El input del nombre debe de ser valido";
                }
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