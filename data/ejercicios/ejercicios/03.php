<?php
    print "Numeros divisibles por 3 entre el 1 y 10<br>";
     $numeros = array();
    for ($x = 1; $x <= 10; $x++) {
        if($x % 3 == 0) {
            $numeros[] = $x;
        }
    }

    foreach ($numeros as $numero) {
        print $numero . "<br>";
    }