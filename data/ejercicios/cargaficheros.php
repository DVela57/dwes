<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Informacion del fichero</h1>
    <?php
    if(isset($_POST["envio"])) {
        print "<br>El nombre del fichero es: " . $_FILES["myFile"]["name"] ;
       print "<br>La extension del fichero es: " . $_FILES["myFile"]["type"] ;
        print "<br>El tamaño del fichero es: " . $_FILES["myFile"]["size"] ;
        print "<br>El nombre temporal del fichero es: " . $_FILES["myFile"]["tmp_name"];

        $destino = "ficherosSubidos/" . $_FILES["myFile"]["name"];
        $flag = move_uploaded_file($_FILES["myFile"]["tmp_name"], $destino);
        print $flag ? "<br>El fichero subido correctamente": "<br>El fichero no se ha podido subir";

    } else {
        print "<br>No se ha enviado ningun fichero";
    }
        
    ?>
</body>
</html>