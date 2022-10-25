<?php
    $equipo = array(
        "base" => "Javi",
        "escolta" => "Felipe",
        "alero" => "Jorge",
        "alapivot" => "Zigmas",
        "pivot" => "Victor",
    );
    print "<h1>Equipo de basket:</h1>";
    print "<ul>";
    foreach($equipo as $key => $jugagor) {
        print "<li>". $key . " =>" .  $jugagor . "</li>";
    }
    print "</ul>";