<?php 
    $datos = simplexml_load_file("empleados.xml");
    if ($datos == false) {
        print "<br>No se ha encontrado el fichero";
        exit();
    }
    //print_r($datos);

   print "<br>Recorro el fichero: ";
    foreach($datos as $dato) {
        print_r ($dato);
        print "<br>";
    }