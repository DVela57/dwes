<?php
    if(isset($_POST["envio"])){
        if (!empty($_POST['idioma']) && !isset($_COOKIE["idioma"]))  {
            $idioma = $_POST["idioma"];
            setcookie("idioma",$idioma, time() + 60 );
        }
        if (!empty($_POST['marca']) && !isset($_COOKIE["marca"]))  {
            $marca = $_POST["marca"];
            setcookie("marca",$marca, time() + 60 );
        }
        if (!empty($_POST["idioma"]) && !empty($_POST['marca'])) {
            header("Location: recojidafinal.php");
            exit();
        }
    }
    else {
        setcookie("idioma",$idioma, time() - 60 );
        setcookie("marca",$marca, time() - 60 );
        header("Location: ejcookie.html");
    }
    


    

    