<?php
    class app {
        //ejecuta toda la app
        public function run () {
            //continua la session
            session_start();
            //comprueba que tenga metodo
            if (isset($_GET['method'])) {
                $method = $_GET['method'];
              } else {
                $method = 'home';
              }
            
              $this->$method();   
        }
        //para recargar la pagina cada vez
            public function indexReload()
        {
            header('location:index.php');
        }
        //lleva a la pag inicial
        public function home()
        {
            if (isset($_SESSION['color'])) {   
            $this->color = ($_SESSION['color']);
            }

            include('views/home.php');
            include('views/colores.php');
            
        }

        //crea la session y recarga
        public function cambio(){

            if (isset($_GET['color'])) {   
            $color = $_GET['color'];
            $_SESSION['color'] = $color;
            }

            $this->indexReload();

        }
    }