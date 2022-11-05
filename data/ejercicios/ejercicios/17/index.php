<?php

require_once "App.php";
$app = new App;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej 17</title>
</head>
<body>
    <?php
    //carga la app
        $app->index();
    ?>
    <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
    <input type="submit" name="fibonacci"  value="fibonacci">
    <input type="submit" name="potencias2"  value="potencias2">
    <label for="factorial">Introduce el factorial que quieras</label>
    <input type="number" name="numF">
    <input type="submit" name="factorial" value="Enviar">
    <input type="submit" name="primos"  value="primos ">
    </form>
    <?php
    //si ha recibido el metodo de fibonacci ejecuta el metodo fibonacci
        if($_SERVER["REQUEST_METHOD"] === "POST") {
            if(isset($_POST["fibonacci"])){
                $app->fibonnaci(0,1);
            }
        }
        //si ha recibido el metodo de potencias ejecuta el metodo potencias2
        if($_SERVER["REQUEST_METHOD"] === "POST") {
            if(isset($_POST["potencias2"])){
                $app->potencias2();
            }
        }
        //si ha recibido el metodo de factorial ejecuta el metodo factorial
        if($_SERVER["REQUEST_METHOD"] === "POST") {
            if(isset($_POST["factorial"])){
                $app->factorial($_POST['numF']);
            }
        }
         //si ha recibido el metodo de primos ejecuta el metodo de primos
        if($_SERVER["REQUEST_METHOD"] === "POST") {
            if(isset($_POST["primos"])){
                $app->primos(1, 10000);
            }
        }
    ?>
</body>
</html>