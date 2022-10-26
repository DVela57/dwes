<?php
    if(isset($_POST["envio"])){
        if (!empty($_POST["nombre"]) && !empty($_POST["passwd"])) {
            $nombre = $_POST["nombre"];
            $passwd = $_POST["passwd"];
            if ($nombre == "usuario" && $passwd == "1234") {
                session_start();
                $_SESSION["nombre"] = $nombre;
                $_SESSION["passwd"] = $passwd;
                $_SESSION["rol"] = 0;
                header("Location: principal.php");
            }
            else if ($nombre == "admin" && $passwd == "4567") {
                session_start();
                $_SESSION["nombre"] = $nombre;
                $_SESSION["passwd"] = $passwd;
                $_SESSION["rol"] = 1;
                header("Location: principal.php");
            }
            else {
                print "<br>Login incorrecto compruebe que el nombre
                 y la contraseña estan bien";
            }
        } else {
            print "<br>No se ha introducido algun dato";
        }
        
     }
?>

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
    <form action="<?php print htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
        <p>
            <label for="nombre">Introduce el nombre</label>
            <input type="text" name="nombre" id="nombre">
        </p>

        <p>
            <label for="passwd">Introduce la contraseña</label>
            <input type="password" name="passwd" id="passwd">
        </p>

        <input type="submit" value="Acceder" name="envio" id="envio">
    </form>
 
</body>
</html>