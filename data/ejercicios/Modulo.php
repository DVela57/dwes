<?php
    class Modulo extends Asignatura{
        private $codigo = null;

        function __construct($nombre, $numCreditos, $codigo)
        {
            parent::__construct($nombre, $numCreditos);
            $this->codigo = $codigo;
        }

        function getCodigo() {
            return $this->codigo;
        }
        function setCodigo($nuevoCod) {
            $this->codigo = $nuevoCod;
        }

        function __toString()
    {
        return "<br><b>Datos del modulo:</b> <br>"
        . "<br>Nombre: " . parent::getNombre() . 
        "<br>Numero creditos: " . parent::getNumCreditos()
        ."<br>Codigo del modulo: " . $this->codigo;
    }
    } //fin clase