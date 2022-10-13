<?php
    include_once "Asignatura.php";
    include_once "Modulo.php";
    print "<h1>Web de asignaturas</h1>";
    $bbdd = new Asignatura("BBDD", 6);
    print "<br>" . $bbdd;
    $dwes = new Modulo("DWES", 9, "IFC3014");
    Modulo::setCiclo("Cijey");
    print "<br>" . $dwes;
    print"<br>DWES pertenece al cliclo " . Modulo::getCiclo();

    print"<hr>";

    Asignatura::setCiclo("DAW");
    print"<br>BBDD pertenece al cliclo " . Asignatura::getCiclo();
    