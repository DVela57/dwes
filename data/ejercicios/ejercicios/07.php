<?php 
    $paises = array("Lituania" , "Vietnam", "Israel", "Brasil");
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