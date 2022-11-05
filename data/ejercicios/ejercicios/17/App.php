<?php

class App {
//metodo fibonacci
    public function fibonnaci($value1, $value2) {
        print"<br>Fibonacci<br>";
        $fibonacci = [$value1, $value2];
        for($x = 1; $x<30;$x++) {
            $fibonacci[] = $fibonacci[$x] + $fibonacci[$x -1];
        }
        foreach($fibonacci as $resultado) {
            print $resultado . " ";
        }
    }
    //metodo de potencias
    public function potencias2() {
        print "<br>Potencias2<br>";
        $pot2 = [];
        for ($x = 1; $x<= 24; $x ++) {
            $resultado = 2**$x;
            $pot2[] = $resultado;
        }
        foreach($pot2 as $key => $value) {
            print $value . " ";
        }
    }
    //metodo de factorial
    public function factorial($num){ 
        $factorial = 1; 
        $factoriales = [];
        for ($x = 1; $x <= $num; $x++){ 
          if($factorial < 1000000) {
            $factorial = $factorial * $x;
            $factoriales[] = $factorial;
          }
        } 
        foreach($factoriales as $factor) {
            print $factor . " ";
        }
    }
//metodo de numeros primos
    public function primos($in, $fin) {
        print "<br>Numeros primos<br>";
        $primos = [];
        for ($x = $in; $x<=$fin;$x ++) {
            $div = 0;
            for ($y = 1; $y<= $x; $y ++) {
                if ($x % $y == 0) {
                    $div = $div + 1;
                }
            }
            if($div == 2 || $x == 1) {
                $primos[] = $x;
            }
         }
         foreach($primos as $primo) {
            print $primo . " ";
         }
    }
    public function index() {
        print "<br><h1>Bienvenido al index</h1>";
    }
}