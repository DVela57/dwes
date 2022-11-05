<?php
    class app {
        //ejecuta la aplicacion comprobando que haya metodo
        public function run () {
            if (isset($_GET['method'])) {
                $method = $_GET['method'];
              } else {
                $method = 'home';
              }
            
              $this->$method();   
        }
        //recargar la pagina 
            public function indexReload()
        {
            header('location:index.php');
        }
        //carga la pagina con la cookie
        public function home()
        {
            if (isset($_COOKIE['color'])) {   
            $this->color = unserialize($_COOKIE['color']);
            }

            include('views/home.php');
            include('views/colores.php');
            
        }

        //crea la cookie con lo que recibe y recalga
        public function cambio(){

            if (isset($_GET['color'])) {   
            $color = $_GET['color'];
            setcookie("color", serialize($color), time() + 3600);
            }

            $this->indexReload();

        }
    }