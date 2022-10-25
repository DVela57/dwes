<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login.php</title>
</head>
<body>
    <h1>Login</h1>
    <form action="principal.php" method="POST">
        <p>
            <label for="nombre">Introduce el nombre</label>
            <input type="text" name="nombre" id="nombre">
        </p>

        <p>
            <label for="passwd">Introduce la contraseña</label>
            <input type="text" name="passwd" id="passwd">
        </p>

        <input type="submit" value="Enviar Datos" name="envio" id="envio">
    </form>

    <?php
    session_start();
         if(isset($_POST["envio"])){
            if (!empty($_POST["nombre"]) && !empty($_POST["passwd"])) {
                $nombre = $_POST["nombre"];
                $passwd = $_POST["passwd"];
                $admitido = false;
                if ($nombre == "usuario" && $passwd == "1234") {
                    $admitido = true;
                    $_SESSION["nombre"] = $nombre;
                    $_SESSION["passwd"] = $passwd;
                    $_SESSION["rol"] = 0;
                }
                else if ($nobmre == "admin" && $passwd == "4567") {
                    $admitido = true;
                    $_SESSION["nombre"] = $nombre;
                    $_SESSION["passwd"] = $passwd;
                    $_SESSION["rol"] = 1;
                }
                else {
                    print "<br>Login incorrecto compruebe que el nombre
                     y la contraseña estan bian";
                }
            } else {
                print "<br>No se ha introducido algun dato";
            }
            
         }
    ?>
</body>
</html>