<?php
    $numA = 0;
    $numB = 1;
    $resultado = 0;

    print $numA . ", " . $numB;
    for ($x=1; $x <=8 ; $x++) { 
        
        print ", ";
        $resultado = $numA + $numB;
        print $resultado;
        $numA = $numB;
        $numB = $resultado;
        
    }