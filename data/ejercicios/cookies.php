<?php
//cookies siempre antes de enviar nada por pantalla y lo primero

    //definir cookie
  //  setcookie("primeracookie", "aceptado", strtotime("31 December 2999") );
    $miarray = ["a" => "hola","b" => 25,  "c" =>[1,2,3,6]];
    $infoguardar = serialize($miarray);

    $infojson = json_encode($miarray);

    





    setcookie("primeracookie", $infoguardar, time() + 30 );
    setcookie("segundacookie", $infojson, time() + 2 );

    //print "<h1>Mi primera cookie</h1>";

    print "Valor de la cookie1: " . $_COOKIE["primeracookie"];
    print "<br>Valor de la cookie 2: ";
   // print_r (unserialize($_COOKIE["segundacookie"]));

    print "en json " . $infojson;

    time(); //devuelve el tiempo en segundos
    strtotime("+1 week");//tiempo añadido
    print "<br>Numero de cookies: " . count($_COOKIE);

    //setcookie("primeracookie", "aceptado", time() -60);
    //unset($_COOKIE["primeracookie"]);
    //caducar cookie
    