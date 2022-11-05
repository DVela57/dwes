<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio arrays</title>
</head>
<body>
    <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST">
        <h1>Formulario de envio de arrays</h1>
        <p>
            <label for="elementos">Introduce algo para añadir a la lista</label>
            <input type="text" name="elementos[]">
        
            <ul>
                <?php
                //recibe un elemento y lo añade al array cada vez como un imput hidden dentro de una lista desordenada
                    if($_SERVER["REQUEST_METHOD"] === "POST") {
                        if(isset($_POST["envio"])){
                            foreach ($_POST['elementos'] as $value) {
                                print '<li><input type="hidden" name="elementos[]" value="" . $value . ""</li>';
                            } 
                        }
                    }
                    ?>
            </ul>
            <input type="submit" name="envio" id="envio" value="enviarDatos">
        </p>
    </form>
</body>
</html>