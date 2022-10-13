<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ej4</title>
</head>
<body>
    <form name = "ej4"action="#" method="post">
        <h1>Formulario de calculadora de operandos</h1>
        <p>
            <label for="operando1">Introduce el operando1</label>
            <input type="number" name="operando1" id="operando1" >
        </p>
        <p>
            <label for="operando2">Introduce el operando2</label>
            <input type="number" name="operando2" id="operando2" >
        </p>
        <select name="operaciones" id="operacione">
            <option value="sumar">sumar</option>
            <option value="restar">restar</option>
            <option value="division">division</option>
            <option value="multiplicar">multiplicar</option>
            <option value="modulo">modulo</option>
        </select>
        <br>
        <button type="submit" name="envio" id="envio" value="enviarDatos">Enviar Datos</button>
    </form>
    <?php
        function suma($num1, $num2) {
            return ($num1 + $num2);
        }
        function restar($num1, $num2) {
            return ($num1 - $num2);
        }
        function multiplicar($num1, $num2) {
            return ($num1 * $num2);
        }
        function dividir($num1, $num2) {
            return ($num1 / $num2);
        }
        function modulo($num1, $num2) {
            return ($num1 % $num2);
        }

        if(isset($_POST["envio"])){
            if (!empty($_POST['operando1'] ) && !empty($_POST['operando2']))  {
                $num1 = $_POST["operando1"];
                $num2 = $_POST["operando2"];
                print "<br>Has introducido los operandos: " . $num1 . " y " . $num2;

                $operacion = $_POST['operaciones'];
                if ($operacion == 'sumar') {
                    print "<br>El resultado de la suma es: " . suma($num1, $num2);
                } else if ($operacion == 'restar') {
                    print "<br>El resultado de la resta es: " . restar($num1, $num2);
                }
                else if ($operacion == 'multiplicar') {
                    print "<br>El resultado de la multiplicacion es: " . multiplicar($num1, $num2);
                }
                else if ($operacion == 'division') {
                    print "<br>El resultado de la division es: " . dividir($num1, $num2);
                }
                else if ($operacion == 'modulo') {
                    print "<br>El resultado de el modulo es: " . modulo($num1, $num2);
                } else {
                    print "<br>No has seleccionado ninguna operacion";
                }
            }
            else {
                print "<br><h3>No has introducido algun numero, es obligatorio, vuelve atras e introduce dos numeros</h3>";
            }
        }
        else {
            print "<br>No has enviado ningun dato";
        }
    ?>
</body>
</html>