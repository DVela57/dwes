<?php
    session_start();
    //$_SESSION["nombre variable"];
    //contador visitas
    if(!isset($_SESSION["contador"])) {
        $_SESSION["contador"] = 0;

    } else {
        $_SESSION["contador"]++;
    }

    print "<br>He visitado la pagina " . $_SESSION["contador"] . " veces";

   print '<br><a href="sesion2.php">Siguiente pagina</a>';