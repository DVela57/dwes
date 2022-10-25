<?php
    const NUM = 169;
    $divisores = array();
    for ($x=1; $x <NUM ; $x++) { 
        if (NUM % $x == 0) {
            $divisores[] = $x;
            
        }
    }
    
    if (sizeof($divisores) == 0) {
        print "<br>El numero es primo";
    }else {
        print "<h1>Lista de divisores:</h1><ul>";
        foreach($divisores as $divisor) {
            print "<li>" . $divisor . "</li>";
        }
        print "</ul>";
    }
    