<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi sitio</title>
</head>
<body>
    <footer>
        <?php
            include_once "footer.php";
            require_once "footer.php";
            print "<br>El nombre del admin es: " . $nombreAdmin;
        ?> 
    </footer>
</body>
</html>