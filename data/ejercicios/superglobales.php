<?php  

$mihost = $_SERVER['HTTP_HOST'];
print "mi host es: " . $mihost;

/*mostrar aqui:
nombre del servidor,
lenguaje
nombre de la pagina que realiza la solicitud
y el tipo de navegador
*/

$nombreServ = $_SERVER['SERVER_NAME'];
$lenguajeServ = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$nombrePag = $_SERVER['SCRIPT_NAME'];
$nombreNav = $_SERVER['HTTP_USER_AGENT'];

print "<hr>nombre del servidor: " . $nombreServ . "<br>lenguaje del servidor: " . $lenguajeServ .
 "<br>nombre de la pag: " . $nombrePag . "<br>nombre del navegador: " . $nombreNav;
