<?php
    if(isset($_POST["envio"])){
        if (!empty($_POST['idioma']))  {
            $idioma = $_POST["idioma"];
            setcookie("idioma",$idioma, time() + 60 );
        }
        if (!empty($_POST['marca']))  {
            $marca = $_POST["marca"];
            setcookie("marca",$marca, time() + 600 );
        }
    }
    header("Location: recojidafinal.php");


    

    