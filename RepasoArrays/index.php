<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Repaso Encuesta</title>
        <style>
            #moduloPhp{
                display: none;
            }
            #moduloCocina{
                display: none
            }
            table, th, td {
                border: 2px solid black;
            }
        </style>
    </head>
    <body>

        <div>
            <form id="entrada" method="POST" action="index.php">
                <fieldset>
                    <legend>Datos Basicos</legend>
                    Nombre:<input type="text" name="nombre" ></input><br>
                    Apellido:<input type="text" name="apellido"></input>
                </fieldset>
                <div>
                    <fieldset>
                        <legend>Curso</legend>
                        <div onchange="mostrar();">
                            <select id="modulos">
                                <option selected></option>
                                <option value="php">PHP</option>
                                <option value="cocina">Cocina</option>
                            </select>
                        </div>
                        <div id="moduloPhp">
                            <input type="checkbox" name="Modulo[]" value="arrays">Arreglos</input><br>
                            <input type="checkbox" name="Modulo[]" value="archivos">Archivos</input><br>
                            <input type="checkbox" name="Modulo[]" value="ado">ADO</input><br>
                        </div>
                        <div id="moduloCocina">
                            <input type="checkbox" name="Modulo[]" value="pan">Pan</input><br>
                            <input type="checkbox" name="Modulo[]" value="sopas">Sopas</input><br>
                            <input type="checkbox" name="Modulo[]" value="salsas">Salsas</input><br>
                        </div>
                    </fieldset>
                </div>
                <input type="submit" name="Aceptar" value='Aceptar'></input>    
            </form>
        </div> 

        <script type="text/javascript">
            function mostrar() {
                var tipoCurso = document.getElementById('modulos');
                if (tipoCurso.value == "php") {
                    document.getElementById('moduloPhp').style.display = 'block';
                    document.getElementById('moduloCocina').style.display = 'none';
                } else
                if (tipoCurso.value == "cocina") {
                    document.getElementById('moduloCocina').style.display = 'block';
                    document.getElementById('moduloPhp').style.display = 'none';
                } else {
                    document.getElementById('moduloPhp').style.display = 'none';
                    document.getElementById('moduloCocina').style.display = 'none';
                }
            }
        </script>

        <?php
        $_SESSION['contPHP'] = 0;
        $_SESSION['contCocina'] = 0;

        function getModulos() {
            $modulos = "modulos:";
            foreach ($_REQUEST['Modulo'] as $value) {
                $modulos .= "[" . $value . "]";
            }
            return $modulos;
        }

        function imprimirArreglo($param) {

            echo "<div><br><br>";
            echo "<table class=classTabla >";
            echo "<tr> ";
            echo "<td>Nombre</td> <td>Apellido</td> <td>Curso</td>";
            echo "</tr> ";


            for ($index = 0; $index < count($param); $index++) {
                $aux = $param[$index];

                echo "<tr>";
                echo "<td>$aux[Nombre]</td> <td>$aux[Apellido]</td> <td>$aux[Curso]</td> ";
                echo "</tr> ";
            }
            echo "<caption>Tabla contenidos</caption>";
            echo "<br><br></div>";
        }

        if (isset($_REQUEST['Aceptar'])) {
            if (!empty($_POST['nombre']) && !empty($_POST['apellido'])) {
                $nombre = $_REQUEST['nombre'];
                $apellido = $_REQUEST['apellido'];
                $modulo = getModulos();
                $registro = array("Nombre" => $nombre, "Apellido" => $apellido, "Curso" => $modulo);
                $_SESSION['lista22'][] = $registro;
                if ($_REQUEST['modulos'].value == 'php') {
                    $_SESSION['contPHP'] ++;
                } else
                if ($_REQUEST['modulos'].value == 'cocina') {
                    $_SESSION['contCicina'] ++;
                }
            }
        }

        imprimirArreglo($_SESSION['lista22']);
        imprimirCont($_SESSION['contPHP'], $_SESSION['contCocina']);

        function imprimirCont($param, $param2) {
            echo '<br>';
            echo '<div>';
            echo '<table>';
            echo '<tr>';
            echo '<td>Curso</td>';
            echo '<td>Total</td>';
            echo '</tr>';
            echo '<tr>';
            echo'<th>PHP</th>';
            echo "<th>$param</th>";
            echo'</tr>';
            echo'<tr>';
            echo'<th>Cocina</th>';
            echo"<th>$param2</th>";
            echo'</tr>';
            echo'</table>';
            echo'</div>';
        }
        ?>
    </body>
</html>
