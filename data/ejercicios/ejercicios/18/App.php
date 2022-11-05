<?php

class App
{//ejecuta la app y comprueba el metdodo si no al login
  public function run()
  {
    if (isset($_GET['method'])) {
      $method = $_GET['method'];
    } else {
      $method = 'login';
    }
  
    $this->$method();      
  }
// si no hayy cookie te devuelve al metodo home

  public function login()
  {
    if (isset($_COOKIE['name'])) {
      header('Location: ?method=home');
    }
    include('views/login.php');
  }
//comprueba los datos  crea las cookies con los datos
  public function auth()
  {
    if (isset($_POST['name'])) {
      $name = $_POST['name'];
      $password = $_POST['password'];
    } else {
      header('Location: ?method=login');
    }
    setcookie('name', $name, time() + 60*60*2);
    setcookie('password', $password, time() + 60*60*2);
    header('Location: index.php?method=home');
  }
  //si la cookie no exste te envia al login si existe al home con las cookies
  public function home()
  {
    if (!isset($_COOKIE['name'])) {
      header('Location: ?method=login');
    }
    if (isset($_COOKIE['deseos'])) {
      $deseos = unserialize($_COOKIE['deseos']);
    } else {
      $deseos = [];
    }
    include('views/home.php');
  }
//crea un nuevo deseo con la cookie modificada con el array que ha añadido
  public function new()
  {
    if (!isset($_POST['nuevo'])) {
      header('Location: index.php?method=home');
    }
    $nuevo = $_POST['nuevo'];
    if (isset($_COOKIE['deseos'])) {
      $deseos = unserialize($_COOKIE['deseos']);
    } else {
      $deseos = [];
    }
    $deseos[] = $nuevo;
    setcookie('deseos', serialize($deseos), time() + 60*60*2);
    header('Location: index.php?method=home');
  }
//borra el deseo y lo queita de la cookie
  public function delete()
  {
    if (isset($_COOKIE['deseos'])) {
      $deseos = unserialize($_COOKIE['deseos']);
    } else {
      $deseos = [];
    }
    $id = $_GET['id'];
    unset($deseos[$id]);
    setcookie('deseos', serialize($deseos), time() + 60*60*2);
    header('Location: index.php?method=home');
  }
//vacia el array y elimina de la cookie los deseos
  public function empty()
  {
    setcookie('deseos', '',  1);
    header('Location: index.php?method=home');    
  }
//elimina la cookie limpiando la cookie antes
  public function close()
  {
    setcookie('deseos', '',  1);
    setcookie('name', '',  1);
    setcookie('password', '',  1);
    header('Location: index.php?method=login');
  }
}
