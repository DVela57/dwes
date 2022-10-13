<?php

    $nombreFichero = "moduloDwes.txt";
    $fp = fopen($nombreFichero, 'r');
    if(!$fp){
        print "<br>No se ha podido leer el fichero";
    }else {
        //caracter a caracter
        print "<br>";
        /*
        while(! feof($fp)) {
            $caracter = fgetc($fp);
            if($caracter == "\n") {
                print "<br>";
            }
            print $caracter;
        }
        */
        //linea a linea
        
        while(! feof($fp)) {
            $linea = fgets($fp);
            print $linea . "<br>";
        }
        
        // con fread
        /*
       $contenido = fread($fp, filesize($nombreFichero));
       print_r($contenido);
       */
    }
    print "<hr>Cerrado de fichero";
    fclose($fp);

    $fp = fopen($nombreFichero, 'a');
    if(!$fp){
        print "<br>No se ha podido leer el fichero";
    }else {
        fwrite($fp, "Esta es otra linea" . PHP_EOL);
    }
    print "<hr>Cerrado de fichero";
    fclose($fp);