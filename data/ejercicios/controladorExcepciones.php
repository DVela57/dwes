<?php  
    class MiException extends Exception{
        public function errorPersonalizado() {
            $menserror = "Informacion del error: ". 
            "<br>Mensaje del error: " . $this->getMessage() .
            "<br>Fichero que genera el error: " . $this->getFile()
            . "<br>Linea del error: " . $this->getLine()
            ;
            return $menserror;
        }
    }