<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pagina de checkeo de credenciales</h1>
    <?php
        if(isset($_POST["envio"])){
            if (!empty($_POST['nombreusu']))  {
                $usuario = $_POST["nombreusu"];
                print "<br>Usuario introducido: " . $usuario;
            }
            else {
                print "<br><h3>No has introducido ningun usuario</h3>";
            }

            if (!empty($_POST['passwd']))  {
                $passwd = $_POST["passwd"];
                print "<br>Constraseña introducida: " . $passwd;
            }  
            else {
                print "<br><h3>No has introducido ninguna contraseña</h3>";
            }    
            
            if (!empty($_POST['asignaturas'])) {
                $asignaturas = $_POST ['asignaturas'];
                print "<br> Asignaturas elegidas:";
                foreach($asignaturas as $asignatura) {
                    print "<br>-" . $asignatura;
                }
            }else {
                print "<br><h3>No has elegido ninguna asignatura</h3>";
            }

            if (!empty($_POST['equipo'])) {
                $equipo = $_POST['equipo'];
                print "<br>Tu equipo favorito es: " . $equipo;
            }else{
                print "<br><h3>No tienes un equipo favorito elegido</h3>";
            }

            if (!empty($_POST['platos'])) {
                $plato = $_POST['platos'];
                print "<br>Tu plato elegido hoy es: " . $plato;
            }else {
                print "<br><h3>No has elegido un plato para hoy</h3>";
            }

            if (!empty($_POST['menus'])) {
                $menus = $_POST['menus'];
                print "<br>Menu elegido:";
                foreach($menus as $menu) {
                    print "<br>-" . $menu;
                }
            }else {
                print "<br><h3>No has elegido un menu para hoy</h3>";
            }
        }
        else {
            print "<br>No has enviado ningun dato";
        }

    ?>

</body>
</html>