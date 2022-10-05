<?php

    $a =98; $b = 83;
    function suma(){
        global $a;
        global $b;
        $a = 5;
        $b = 92;

        //statica dentro de function
        static $statica1 = 0;
        print "<br>El valor de la statica es: " . $statica1;
        $statica1 ++;
        return $a + $b;
    }

    
    print "Las variables a y b son " . $a . " y ".  $b . "<br>";
    print "<br>La suma de a y b dentro de la funcion es: " . suma($a,$b);
    print "<br>llamada a suma 2 vez: " . suma($a,$b);
    print "<br>llamada a suma 3 vez: " . suma($a,$b);
    
    //paso de parametros por referencia
    function restar(&$op1, $op2){
        $op1 = $op1 - $op2;
        return $op1;
    }
    //unset $var borrar variables
    print "<br>LLama por valor: " . restar($a,35);


