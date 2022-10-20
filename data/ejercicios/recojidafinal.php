<?php
switch ($_COOKIE["idioma"]) {
    case "spanish":
        print "<br><h1>Bienvenido a la pagina</h1>";
        print "<br>Tu marca favorita es: ". $_COOKIE["marca"];
        break;
    case "ingles":
        print "<br><h1>Welcome to the page</h1>";
        print "<br>Your favourite car branding is: ". $_COOKIE["marca"];
        break; 
    case "aleman":
        print "<br><h1>Willkommen auf der Seite</h1>";
        print "<br>Ihre Lieblingsmarke ist: ". $_COOKIE["marca"];
        break;
    default:
        print "<br><h1>Bienvenido a la pagina</h1>";
        print "<br>Tu marca favorita es: ". $_COOKIE["marca"];
        break;
}