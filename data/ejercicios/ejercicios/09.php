<?php 
//ej 9 añadiendo de uno en uno
    $paises = array();
    $paises[] = "Italia";
    $paises[] = "Uganda";
    $paises[] = "Australia";
    $paises[] = "Canada";
    print_r($paises);
    print "<hr>";
    var_dump($paises);
    print "<hr>";
    foreach($paises as $pais) {
        print $pais . " ";
    }
    print "<hr>";
    foreach($paises as $key => $pais) {
        print  "[" .$key ."] => " .  $pais . " ";
    }