<?php
//Array mostrandolo todos de todas las formas
    $equipo = array("Javi" , "Jorge", "David", "Felipe", "Zigmas");
    print "<h1>Equipo de basket:</h1>1ª forma:";
    foreach($equipo as $judagor) {
        print "<li>". $judagor . "</li>";
    }
    print "</ul>";
    print "<hr>2ª forma:";
    foreach($equipo as $key => $jugagor) {
        print "<li>". $key . " =>" .  $jugagor . "</li>";
    }
    print "</ul>";