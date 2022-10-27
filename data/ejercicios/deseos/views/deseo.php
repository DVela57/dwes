<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Bienvenido <?= $_COOKIE['name'] ?></h1>

  <h2>Lista de deseos</h2>
  <h4><a href="?method=empty">Vaciar lista de deseos</a></h4>
  <h4><a href="?method=close">Cerrar sesión</a></h4>
  <ul>
    <pre>
  <?php 
  // var_dump($deseos);
  // exit();
  if (count($deseos)) {
    foreach ($deseos as $id => $deseo) {
      echo "<li> Deseo nº $id: " . $deseo . ' <a href="?method=delete&id=' . $id . '"> borrar</a> </li>';
    }
  } else {
    echo "No hay deseos todavía";
  }
  ?>
  </ul>
  
  <hr>
  <h2>Alta de nuevos deseos</h2>
  <form action="?method=new" method="post">
    <p>
        <h1>Lista de deseos:</h1>
            <select name="new" id="deseos">
                <option value="vaqueros">vaqueros</option>
                <option value="mobil">mobil</option>
                <option value="coche">coche</option>
                <option value="collar">collar</option>
                <option value="casa">casa</option>
            </select>
    </p>
    
    <input type="submit" value="nuevo">
  </form>
  
</body>
</html>