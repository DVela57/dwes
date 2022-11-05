<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Deseos</title>
</head>
<body>
  <h1>Bienvenido <?= $_COOKIE['name'] ?> a la lista de deseos</h1>

  <h2>Lista de deseos</h2>
  <h4><a href="?method=empty">Vaciar lista de deseos</a></h4>
  <h4><a href="?method=close">Cerrar sesión</a></h4>
  <ul>
    <pre>
  <?php 
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
  <h2>Añadir nuevos deseos</h2>
  <form action="?method=new" method="post">
    <label for="nuevo">Deseo a añadir</label>
    <input type="text" name="nuevo">
    
    <input type="submit" value="nuevo">
  </form>
  
</body>
</html>