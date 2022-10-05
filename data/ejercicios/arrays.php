<?php
    //los elementos son heterogeneos.
    $array = array(45, "hola", 3.2, true);
    print "<br>Elemento 2 del array: " . $array[2];
    echo "<hr>";
    //mostrar foreach, var_dump y print_r;
    foreach ($array as $elemento) {
        print "<br>El elemento es: " . $elemento;
    }
    echo "<br><hr>";
    print_r($array);
    echo "<br><hr>";
    var_dump($array);
    echo "<br><hr>";
    print "El array tiene " . count($array) . " elementos";

    $array2 = [3,2,5,9];
    foreach($array2 as &$elemento) {
        $elemento = $elemento * 3.33;
        print_r("<br>Elemento = " . $elemento);
    }
    echo "<hr>";
    print_r($array2);

    $array2 [] = 15;
    echo "<hr>";
    print_r($array2);

    $array2 [501] = 45;
    echo "<hr>";
    print_r($array2);

    $array2 [] = 5;
    echo "<hr>";
    print_r($array2);

    $array2 [306] = 93;
    echo "<hr>";
    print_r($array2);

    unset ($array2[2]);
    unset ($array2[5]);
    unset ($array2[1]);
    echo "<hr>";
    print_r($array2);

    echo "<hr>";
    print "Posicion 2: " . $array2[2];

    $array2[2] = "javi";
    echo "<hr>";
    print_r($array2);
    echo "<hr>";
    print "Posicion 2: " . $array2[2];

    print "<hr> mostrar clave y valor de arrays:";
    foreach($array2 as $clave => $valor) {
        print "<br>La clave es: " . $clave . " el valor es: " . $valor;
    }
    print "<hr>";

    $arrin = ["hola" => 1,
            "edad" => 12,
            "peso" => 132,
            "dni" => "29019383E",
            "javi" => "nss"
        ];
    foreach ($arrin as $key => $value) {
        print "<br>La persona tiene los datos: " . $key . "-->" . $value;
    }
    print "<hr>";

    $arrin[] = 7;

    print_r($arrin);

    print "<hr>El dni es: " . $arrin["dni"];

    
    //arrays multidimensionales: matrices, arrays de arrays.

    $arram = [
        0 => [1, 3],
        1 => [5, 9, 13, 31],
        5 => [2, 3, "javi", "felipe"]
    ];
    print "<hr>" . $arram[5][2];



