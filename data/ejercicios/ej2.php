<?php
$var1 = 5;
$var2 = "7";
print "var2 es un " . gettype($var2) . "<br>";
$var2 = (int)"7";
$var3 = (string) 57;
print "var2 ahora es un " . gettype($var2) . "<br>";

$var4 = "";
$var5 ;
echo "La variable 3 esta definida?: " . isset($var3) . "<br>";
echo "La variable 4 esta definida?: " . isset($var4) . "<br>";
print "La variable 5 esta definida?: " . isset($var5) . "<br>";

print "La variable 3 esta vacia?: " . empty($var3) . "<br>";
print "La variable 4 esta vacia?: " . empty($var4) . "<br>";
print "La variable 5 esta vacia?: " . empty($var5) . "<br>";

if (!empty($var3)) {
        print "La variable 3 no esta vacia" . "<br>";
}

const CONSTANTE = 1000;
print "La variable constante es " . CONSTANTE . "<br>";

define("OTRACONSTANTE", "cadena constante");
print "La otra constante es '" . OTRACONSTANTE . "'<br><br>";

print "operadores <br><br><br>";

$num1 = 3;
$num2 = "3";
if ($num1 == $num2) {
    print "son iguales <br>";
} else {
    print "no son iguales <br>";
}
if ($num1 === $num2) {
    print "son iguales <br>";
} else {
    print "no son iguales <br>";
}
print ($num1 <=> $num2) ;


/*
variables: caracteres alfanumericos(a-Z 0-9)
    no pueden comenzar con numero ni especiales(@#?¿-). Excepto el '_' que puede estar menos al principio.
*/
/*
Tipos de datos:
    simples: int, string, float, boolean.
    complejos: arrays, objetos, ficheros.
    
Tipos de lenguajes:
    Fuerte: Java
    Debil: php

gettype(var);

Para concatenar se pone espacio . espacio

caseSensitive en php:
    variables si
    metodos no

Operadores en php:
    =,<,>, !=, <>, ==, ===, <=>, !==

if() {}; if(){}else{}
if () {

}else if {

}else {}

while(){}
do {} while()
for($var,.,.){
    $miarray($var)
}
$miarray
foreach(arrays as elemento){

}

Inclusion de codigo de un fichero en otro
include, include_once, require, require_once


*/