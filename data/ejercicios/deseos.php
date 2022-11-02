<?php
    if($_SERVER["REQUEST_METHOD"] === "POST") {
        if(isset($_POST["envio"])) {
            session_start();
            $item = $_POST["lista"];
            $_SESSION["listaDeseo"][] = $item;
            print_r($_SESSION["listaDeseo"]);
            //print "<br>Elemento selecc : " . $_SESSION["listaDeseo"];
            $sesioncodif = json_encode($_SESSION["listaDeseo"]);

            //$sesiondecodif = json_decode($sesioncodif, true);
            /*print "<hr>";
            print_r($sesiondecodif);
            print "<hr>";
            print_r($sesioncodif);
            */

            //como objeto
            $sesiondecodif = json_decode($sesioncodif);
            //print "<hr>";
           // var_dump($sesiondecodif);

            $sesiondecodif->{'listadeseo'}[1] = "felipe";
            print "<hr>";
            print_r($sesiondecodif);

            /*$miarray = get_object_vars($sesiondecodif);
            print "<hr>";
            print_r($miarray);
            for($x = 0; $x < count($miarray,COUNT_RECURSIVE - 1); $x ++) {
                print "<br>El elemento " . $x . " es: " . $miarray['listadeseo'][$x];
                print "<br>";
            }*/
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de deseos</h1>
    <h3>Hoy voy a comprar..</h3>
    <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST">
        <select name="lista" id="lista" required>
            <option value="camisa">camisa</option>
            <option value="cortacesped">cortacesped</option>
            <option value="consola">consola</option>
            <option value="pantalon">pantalon</option>
            <option value="mobil">mobil</option>
            <option value="colonia">colonia</option>
            <option value="coche">coche</option>
            <option value="portatil">protatil</option>
        </select>
        <br>
        <input type="submit" name="envio" value="Agregar Deseo">
    </form>
    
</body>
</html>