<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Selecciona tu idioma</h3>
    <form name="formularioCookies" action="#" method="post">
    <p><select name="idioma" id="idioma">
        <option value="español">español</option>
        <option value="ingles">english</option>
        <option value="aleman">german</option>
    </select>
    </p>
    
    <h3>Selecciona tu marca de coche preferida</h3>
    <p><select name="marca" id="marca">
        <option value="BMW">BMW</option>
        <option value="KIA">KIA</option>
        <option value="RENAULT">RENAULT</option>
        <option value="MERCEDES">MERCEDES</option>
    </select>
    </p>

    <button type="submit" name="envio" id="envio" value="enviarDatos">Enviar Datos</button>
    </form>
    <?php
        setcookie("idioma", )
    ?>
</body>
</html>