<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        /**
         * Clase enlace
         */
        class Enlace {

            public $direccion;
            public $nombre;

            function __construct($nom, $direc) {
                $this->nombre = $nom;
                $this->direccion = $direc;
            }

        }

        /**
         * 
         */
        class Menu {

            public $enlace;
            public $color;

            function __construct() {
                # code...
            }

            public function ABM() {//$enlace){
                //$this->enlace[] = $enlace;
                echo "<div>";
                echo "<form method='POST'>";
                echo "Ingrese un nombre enlace:<input type='text' name='nombre'><br>";
                echo "Ingrese direccion:<input type='text' name='direccion'><br>";
                echo "<input type='submit' name='agregar'>";
                echo "</form>";
                echo "</div>";

                $nombre;
                $direccion;
                if (isset($_POST['nombre'])) {
                    $nombre = $_POST['nombre'];
                }
                if (isset($_POST['direccion'])) {
                    $direccion = $_POST['direccion'];                   
                }

                $enlaC = new Enlace($nombre, $direccion);
                $this->enlace[] = $enlaC;
                var_dump($enlaC);
            }
            public function getValores() {
                return $this->enlace;
            }

        }

        /**
         * 
         */
        class MV extends Menu {
            
/*
            function __construct() {
                # code...
                
            }*/

            public function mostrar($param = "") {
               // $array = parent::enlace; 
               
              // $arr =  parent::enlace; //$param;
              // var_dump($arr);
              // echo 'asdfads';
                $array = $param;
                $otro = (Object) $param;
                $otro = is_object($param);
              // if(count($array)!= 0){
                echo "<div>";
                echo "<table>";
                echo "<tr>";
                echo "<td>Link</td>";
                echo "</tr>";
               //foreach ($array as $value) {
                    echo "<tr>";
                    echo  var_dump($param);  //"<th>"var_dump($param)."</th>";
                    echo "</tr>";
                //}

                echo "</table>";
                echo "</div>";
             echo 'sajkldsa';
             //echo date()."<";
              // }
            }

        }

        $menu = new Menu();
        $menu->ABM();
        $mv = new MV();
        $mv->mostrar($menu->getValores());
        //echo is_subclass_of($mv, $ABM);
        ?>
    </body>
</html>
