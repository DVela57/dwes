<?php
    include_once "controladorExcepciones.php";
    //calcular inverso del numero
    function inverso($num) {
        if ($num == 0) {
            throw new MiException("No division por 0");
        }
        return 1 / $num;
    }

    try {
      print "El inverso de 6 es: " .  inverso(6);
    }catch(Exception $e) {
        print "Excepcion: " . $e->getMessage();
    }finally {
        print "<br>Esto siempre se mostrara";
    }
    print "<hr>";
    try {
        print "El inverso de 0 es: " .  inverso(0);
      }catch(MiException $e) {
          print "Excepcion: " . $e->errorPersonalizado();
      }finally {
          print "<br>Esto siempre se mostrara";
      }