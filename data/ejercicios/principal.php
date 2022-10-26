<?php
    session_start();
    $rol = $_SESSION["rol"];
    if ($rol == 0) {
        print "<br>Bienvenido se ha logueado como usuario";
        
    } else if ($rol == 1) {
        print "<br>Bienvenido se ha logueado como Admin";
    } else {
        header("Location: login.php");
    }

    print "<br><a href='logout.php'>Clic aqui para cerrar la sesion</a>";