<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Datos del libro recibidos </h1>
    <?php
        if(isset($_POST["envio"])){
            if (!empty($_POST['nombrelibro']))  {
                $libro = $_POST["nombrelibro"];
                print "<br>Usuario introducido: " . $usuario;
            }
            else {
                print "<br><h3>No has introducido ningun usuario</h3>";
            }
        }
        else {
            print "<br>No has enviado ningun dato";
        }

    ?>

</body>
</html>