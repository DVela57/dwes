<?php
   $numero = $_GET["numero"];
for ($i=0 ; $i<100000 ; $i++) {
   $resultado = fact($numero);
}
echo $resultado;
function fact($num)
{
    $res = 1;
    for ($n = $num; $n >= 1; $n--)
        $res = $res*$n;
    return $res;
}
?>
