<?php
    $datos = simplexml_load_file("empleados.xml");
    if ($datos == false) {
        print "<br>No se ha encontrado el fichero";
        exit();
    }
    $apellidos = $datos ->xpath("//apellidos");
    foreach($apellidos as $adpellido) {
        print "<br>Apellido: " . $adpellido;
    }