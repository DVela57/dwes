<?php

if (isset($_REQUEST['lista'])) {
    $lista = $_REQUEST['lista'];
} else {
    $lista = array();
    // $lista = [];
}

if (isset($_REQUEST['nuevo'])) {
    $nuevo = $_REQUEST['nuevo'];
    $lista[] = $nuevo;
}

echo "<pre>";
var_dump($lista);
var_dump($nuevo);
echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Lista de jugadores:</h1>    
    <!-- //usar foreach para construir una lista ul>li -->
    <ul>
    <?php   
    // lista de lo que ya existe:
    foreach ($lista as $jugador) {
        echo "<li>$jugador</li>";
    }
    ?>
    </ul>

    <h1>Nuevo jugador:</h1>
    <!-- //construir formulario: -->
        <form action="" method="get">

        <?php   
        //lista de lo que ya existe:
        foreach ($lista as $jugador) {
            echo '<input type="hidden" name="lista[]" value="' . $jugador . '">';
        }
        ?>

        <label for="nuevo">Nuevo jugador: </label>
        <input type="text" name="nuevo" value=""/>
        <br>
        <input type="submit">
        
        </form>        
</body>
</html>