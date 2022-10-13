<?php
/*
    Polimorfismo: casting, sobrecarga, sobrescritura.
    Clase Figura -> calcular area
    Clase Circulo -> calcular area
    Clase Cuadrado -> calcular area

    Sobrecarga de constructores: Diferentes constructores del mismo nombre con diferentes datos.

    php:+
    existe sobreescritura
    no existe sobrecarga
    no se puede sobrecargar constructores
    existe polimorfismo a traves de sobrescritura
    clases: private protected  por defecto public

    Notacion: nombre de clases PascalCasel
    Nombre metodos: lowerCamelCasel
*/

class Asignatura {
    private $nombre = null;
    private $numCreditos = null;

    private static $ciclo = null;

    public function __construct($nombre, $numCreditos) {
        $this->nombre = $nombre;
        $this->numCreditos = $numCreditos;
    }

    function getNombre(){
        return $this->nombre;
    }
    function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    function getNumCreditos() {
        return $this->numCreditos;
    }
    function setNumCreditos($numCreditos) {
        $this->numCreditos = $numCreditos;
    }
    static function getCiclo(){
        return self::$ciclo;
    }
    static function setCiclo($ciclo) {
        self::$ciclo = $ciclo;
    }

    function __toString()
    {
        return "<br><b>Datos de la asignatura:</b> <br>"
        . "<br>Nombre: " . $this->nombre . 
        "<br>Numero creditos: " . $this->numCreditos;
    }

} //fin clase