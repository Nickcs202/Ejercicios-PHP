<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include 'Animal.php';
        include 'Anfivio.php';
        include 'Lista.php';

        $animal = new Animal("Leon", "Carnivoro");
        $animal->mostrar();

        $anfivio = new Anfivio("Rana", "carnivora", "43");
        $anfivio->mostrar();

        $list = new Lista();
        $list->nuevo($animal);

        $list->nuevo($anfivio); 

        $list->listar();
        $lsit->listarAnimal();
        ?>
    </body>
</html>
